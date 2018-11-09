<?php

namespace App\Http\Controllers;

use App\Medicine;
use Illuminate\Http\Request;

class MedicineController extends Controller
{
	public function __construct()
    {
        return $this->middleware('auth');
    }

    public function index()
    {
    	$medicines = Medicine::all();

    	$count =  count($medicines);

    	return view('home',compact(['medicines','count']));
    }
}
