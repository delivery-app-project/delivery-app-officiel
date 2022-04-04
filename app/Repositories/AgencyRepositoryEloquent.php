<?php

namespace App\Repositories;

use App\Criteria\AgencyRepositoryCriteria;
use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\AgencyRepository;
use App\Entities\Agency;
use App\Providers\RouteServiceProvider;
use App\Traits\BaseRepositoryTrait;
use App\Validators\AgencyValidator;

use Illuminate\Container\Container as Application;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;

/**
 * Class AgencyRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class AgencyRepositoryEloquent extends BaseRepository implements AgencyRepository
{

    use BaseRepositoryTrait;

    protected $address_repository;
    protected $type_morph_repository;



    public function __construct(Application $app, AddressRepository $address_repository, TypeMorphRepository $type_morph_repository)
    {

        parent::__construct($app);
        $this->address_repository = $address_repository;
        $this->type_morph_repository = $type_morph_repository;
    }

    protected $relations = [
        'director.user', 'address.city.daira.wilaya', 'main_stock', 'type'
    ];


    protected $fieldSearchable = [
        'name' => 'like'
    ];

    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Agency::class;
    }

    /**
     * Specify Validator class name
     *
     * @return mixed
     */
    public function validator()
    {

        return AgencyValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));

        $this->pushCriteria(app(AgencyRepositoryCriteria::class));
    }


    public function index($data)
    {

        $id = key_exists('id', $data) ? $data['id'] : null;

        $perPage = key_exists('perPage', $data) ? $data['perPage'] : RouteServiceProvider::PERPAGE;


        $model = $this;


        if ($id) $model =  $this->where('employee_id', $id);


        return $model->paginate($perPage);
    }


    public function show($id)
    {
        return $this->findOrFail($id);
    }

    public function store($data)
    {
        // create the agency
        $agency = $this->create($data);
        // get type
        $type = $this->type_morph_repository->find($data['type_id']);
        // use (district and city_id)
        $this->address_repository->create(array_merge(
            ['model_type' => Agency::class, 'model_id' => $agency->id],
            $data
        ));
        // attah type 
        $type->agencies()->save($agency);


        return $agency;
    }

    public function edit($data, $id)
    {
        $agency = $this->update($data,$id);

        $type = $this->type_morph_repository->find($data['type_id']);
        $address = $data['address_id'] ? $this->address_repository->find($data['address_id']) : null;   
        // use (district and city_id)
        if(!$address)
        $this->address_repository->create(array_merge(
            ['model_type' => Agency::class, 'model_id' => $agency->id],
            $data
        ));
        else
        $this->address_repository->update($data,$address->id); 
        
        // attah type 
        $type->agencies()->save($agency);

        return $agency;
    }
}
