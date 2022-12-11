<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Purchase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PurchaseController extends Controller
{
    public function store(Request $request) {
        $pencil_quantity = 0;
        $rule_quantity = 0;
        $book_quantity = 0;
        $i = 1;

        $attributes = request()->validate([
            'username' => 'required',
            'email' => 'required',
            'mobile' => 'required',
        ]);

        
        //return $request->all();
        $user = new User();
        $user->username = $request->username;
        $user->password = Hash::make('userpassword');
        $user->email = $request->email;
        $user->mobile = $request->mobile;
        $user->save();
    
        //return $request->itemtype;
        foreach ($request->itemtype as $item_type) {
            if ($item_type == "pencil")
                $pencil_quantity += $request->itemquantity[$i];
            else if ($item_type == "book")
                $book_quantity += $request->itemquantity[$i];
            else if ($item_type == "rule")
                $rule_quantity += $request->itemquantity[$i];

        $i++;
        }

        $all_item = array($pencil_quantity, $book_quantity, $rule_quantity);

        $purchase = new Purchase();
        $purchase->pencilqty = $pencil_quantity;
        $purchase->ruleqty = $rule_quantity;
        $purchase->bookqty = $book_quantity;
        $purchase->save();

        return view('result', ['user' => $user], ['all_item' => $all_item]);
    }
}
