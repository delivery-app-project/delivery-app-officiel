<?php

namespace App\Http\Controllers;
use App\Repositories\StockRepository;
use Illuminate\Http\Request;
use App\Assistant\ResponseFormatter;

class StockController extends Controller
{
    //
    protected $repository;
    public function __construct(StockRepository $repository)
    {

            $this->repository = $repository;
    }
    public function index(Request $request){


        return response()->json($this->repository->index($request->all()));
    }


    public function show($id){

        $result = $this->repository->show($id);

        return ResponseFormatter::response($result);
    }
}
