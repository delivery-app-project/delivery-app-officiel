<?php

namespace App\Http\Controllers;

use App\Assistant\ResponseFormatter;
use App\Repositories\UserRepository;
use Exception;
use Illuminate\Http\Request;
use Prettus\Validator\Exceptions\ValidatorException;

class UserController extends Controller
{
    //
    protected $repository;

    public function __construct(UserRepository $repository)
    {
            $this->repository = $repository;
    }



    // public function update(Request $request,$id){

    //     return response()->json($this->repository->update($request->all(),$id));
    // }


    public function store(Request $request){
        $res = null;
        // dd($request->all());
        try {

            $res = $this->repository->store($request->all());


        } catch (ValidatorException $e) {

            return ResponseFormatter::response($e->getMessageBag()->messages(), true);
            
        } catch (Exception $th) {

            dd($th->getMessage());
        }


        return ResponseFormatter::response($res);
    }


    public function update(Request $request,$id){
        $res = null;
        // dd($request->all());
        try {

            $res = $this->repository->edit($request->all(),$id);


        } catch (ValidatorException $e) {

            return ResponseFormatter::response($e->getMessageBag()->messages(), true);

        } catch (Exception $th) {

            dd($th->getMessage());
        }


        return ResponseFormatter::response($res);
    }


    // public function updateLang(Request $request,$id){
    //     return ResponseFormatter::response($this->repository->update($request->all(),$id));
    // }


    public function show($id){
        
        return ResponseFormatter::response($this->repository->show($id));

    }
}
