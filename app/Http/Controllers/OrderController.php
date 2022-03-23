<?php

namespace App\Http\Controllers;

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

}
