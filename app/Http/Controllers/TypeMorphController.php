<?php

namespace App\Http\Controllers;

use App\Assistant\ResponseFormatter;
use App\Repositories\TypeMorphRepository;
use Illuminate\Http\Request;

class TypeMorphController extends Controller
{
    //
    protected $repository;

    public function __construct(TypeMorphRepository $repository)
    {
            $this->repository = $repository;
    }



    public function index(Request $request){

        return ResponseFormatter::response($this->repository->index($request->all()));
    }
}
