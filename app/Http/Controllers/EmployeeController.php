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
    public function index(Request $request)
    {


        return response()->json($this->repository->index($request->all()));
    }


    public function show($id)
    {

        $result = $this->repository->show($id);

        return ResponseFormatter::response($result);
    }
}
