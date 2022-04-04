<?php

namespace App\Http\Controllers;

use App\Assistant\ResponseFormatter;
use App\Repositories\EmployeeRepository;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    //
    protected $repository;

    public function __construct(EmployeeRepository $repository)
    {
            $this->repository = $repository;
    }



    public function index(Request $request){
        return ResponseFormatter::response($this->repository->index($request->all()));
    }
    
}
