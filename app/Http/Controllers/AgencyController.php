<?php

namespace App\Http\Controllers;

use App\Repositories\AgencyRepository;
use Illuminate\Http\Request;

class AgencyController extends Controller
{
    //
    protected $repository;

    public function __construct(AgencyRepository $repository)
    {
        $this->repository = $repository;
    }



    public function index(Request $request){


        return response()->json($this->repository->index($request->all()));
    }



}
