<?php

namespace App\Http\Controllers;

use App\Models\Bitcoin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Home_Controller extends Controller
{
   public function index()
   {		
       return view('home');
   }
   public function save($price)
   {
        $bitcoin = new Bitcoin;
        $bitcoin->price = $price;
        $bitcoin->save();
   }
   public function show()
   {
       $bitcoin = Bitcoin::select('price')->latest()->first();
       return response()->json($bitcoin);
   }
}
