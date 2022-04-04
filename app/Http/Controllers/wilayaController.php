<?php

namespace App\Http\Controllers;

use App\Assistant\ResponseFormatter;
use App\Repositories\WilayaRepository;
use Illuminate\Http\Request;

class wilayaController extends Controller
{
    //
    protected $repository;
    public function __construct(WilayaRepository $repository)
    {
        
        $this->repository = $repository;
    }


    public function index(Request $request){
        return ResponseFormatter::response($this->repository->index($request->all()));

    }
}
