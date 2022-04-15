<?php

namespace App\Http\Controllers;

use App\Assistant\ResponseFormatter;
use App\Repositories\OrderRepository;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    protected $repository;
    //
    public function __construct(OrderRepository $repository)
    {
            
            $this->repository = $repository;
    }





    public function index(Request $request){
            return response()->json($this->repository->index($request->all()));
    }

    public function store(Request $request){
        return ResponseFormatter::response($this->repository->store($request->all()));
    }

    public function show($id){
            return ResponseFormatter::response($this->repository->find($id));
    }
}
