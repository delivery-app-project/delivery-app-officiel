<?php

namespace App\Http\Controllers;

use App\Repositories\OrderStatusRepository;
use Illuminate\Http\Request;

class OrderStatusController extends Controller
{
    //
    protected $repository;

    public function __construct(OrderStatusRepository $repository)
    {
        $this->repository = $repository;
    }


    public function index(Request $request){
        return response()->json($this->repository->index($request->all()));
    }
}
