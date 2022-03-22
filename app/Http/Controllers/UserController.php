<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepository;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    protected $repository;

    public function __construct(UserRepository $repository)
    {
            $this->repository = $repository;
    }



    public function update(Request $request,$id){

        return response()->json($this->repository->update($request->all(),$id));
    }
}
