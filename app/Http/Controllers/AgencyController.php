<?php

namespace App\Http\Controllers;

use App\Assistant\ResponseFormatter;
use App\Repositories\AgencyRepository;
use Exception;
use Illuminate\Http\Request;
use Prettus\Validator\Exceptions\ValidatorException;

class AgencyController extends Controller
{
    //
    protected $repository;

    public function __construct(AgencyRepository $repository)
    {
        $this->repository = $repository;
    }



    public function index(Request $request)
    {


        return response()->json($this->repository->index($request->all()));
    }


    public function show($id)
    {

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
