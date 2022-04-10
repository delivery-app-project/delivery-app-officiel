<?php

namespace App\Http\Controllers;

use App\Assistant\ResponseFormatter;
use App\Repositories\RoleRepository;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    //
    protected $repository;

    public function __construct(RoleRepository $repository)
    {
            $this->repository = $repository;
    }



    public function index(Request $request){
        return ResponseFormatter::response($this->repository->index($request->all()));
    }
}
