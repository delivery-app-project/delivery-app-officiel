<?php

namespace App\Http\Controllers;
use App\Repositories\StockRepository;
use Illuminate\Http\Request;
use App\Assistant\ResponseFormatter;
use Exception;
use Prettus\Validator\Exceptions\ValidatorException;

class StockController extends Controller
{
    //
    protected $repository;
    public function __construct(StockRepository $repository)
    {

            $this->repository = $repository;
    }
    public function index(Request $request){


        return response()->json($this->repository->index($request->all()));
    }


    public function show($id){

        $result = $this->repository->show($id);

        return ResponseFormatter::response($result);
    }

    
    public function store(Request $request)
    {
        $result = null;

        try {


            $result = $this->repository->store($request->all());

        } catch (ValidatorException $e) {

            return ResponseFormatter::response($e->getMessageBag()->messages(), true);
        } catch (Exception $th) {

            dd($th->getMessage());
        }


        return ResponseFormatter::response($result);
    }


    public function update(Request $request,$id){
        
        $result = null;

        try {


            $result = $this->repository->edit($request->all(),$id);
            
        } catch (ValidatorException $e) {

            return ResponseFormatter::response($e->getMessageBag()->messages(), true);
        } catch (Exception $th) {

            dd($th->getMessage());
        }


        return ResponseFormatter::response($result);
    }
}
