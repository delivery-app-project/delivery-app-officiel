<?php

namespace App\Http\Controllers;

use App\Repositories\MarchentRepositoryEloquent;
use App\Repositories\PackageRepository;
use App\Repositories\PackageRepositoryEloquent;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    //
    protected $repository;
    protected $repository_marchent;

    public function __construct(PackageRepository $repository,MarchentRepositoryEloquent $repository_marchent)
    {
            $this->repository = $repository;
            $this->repository_marchent = $repository_marchent;

    }




    public function index(Request $request){
            
            // $id = $request->marchent_id;
            // // "search" => null
            // // "perPage" => "10"
            // // "page" => "1"
            // // "sortBy" => "id"
            // // "sortDesc" => "true"
            // // "status" => "Paid"
            // $model = $this->repository->where(

            // );
            // get package where id marchent
            // if($id) return response()->json($this->repository->whereHas('marchent',function ($q) use ($id){
            //     $q->where('id',$id);
            // })->paginate($request->perPage));

            // if there is no marchent id 
            return response()->json($this->repository->index($request->all()));
    }
}
