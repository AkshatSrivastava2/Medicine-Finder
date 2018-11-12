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

    public function store(Request $request)
    {
        $validated = $request->validate([
            'medicine_name' => 'required',
            'medicine_quantity' => 'required|integer',
            'medicine_potency' => 'required',
            'medicine_price' => 'required|numeric'
        ]);

        $medicine = Medicine::create([
            'name' => strtoupper($request->medicine_name),
            'quantity' => $request->medicine_quantity,
            'potency' => $request->medicine_potency,
            'price' => $request->medicine_price,
            'user_id' => auth()->id()
        ]);

        return redirect()->to('/home');
    }

    public function index()
    {
    	$medicines = Medicine::all();

    	$count =  count($medicines);

    	return view('home',compact(['medicines','count']));
    }

    public function delete($id)
    {
        $medicine = Medicine::where('id',$id)->first();

        $medicine->delete();

        return redirect()->to('/home');
    }
}
