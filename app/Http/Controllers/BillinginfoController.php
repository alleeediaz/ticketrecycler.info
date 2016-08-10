<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Billinginfo;

class BillinginfoController extends Controller
{
    //
    public function index() { 
    	$rfcs = Billinginfo::all(); 
    	return view('forms.billinginfo-index', ['rfcs' => $rfcs]); 
    	//return 'Hola nnnnnn';
    }

    public function store(Request $request)
    {
        // Validate the request...

        $flight = new Flight;

        $flight->name = $request->name;

        $flight->save();
    }



}
