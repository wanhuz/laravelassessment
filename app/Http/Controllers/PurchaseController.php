<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Purchase;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    public function store(Request $request) {

        $attributes = request()->validate([
            'title' => 'required',
            'body' => 'required',
        ]);
    
        
        Purchase::create($attributes);

        return view(Purchase::all());
    }
}
