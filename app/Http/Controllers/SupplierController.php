<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supplier;

class SupplierController extends Controller
{
    //buat fungsi baru untuk index
    function index(){
      //echo "assaoy geboyu";
      $supplier = Supplier::get(['supplier_id', 'supplier_name', 'supplier_address']);
      //var_dump($supplier);
      return view('supplier.index', compact('supplier'));
    }

    function create(){
      //echo "telo";
      //ingak ingak url customer/create ><
      return view('supplier.create');
    }

    public function store(Request $request){
      //echo "jatimiko";
      $suppId = $request->input('sup_id');
      $suppName = $request->input('sup_name');
      $suppAddress = $request->input('sup_address');

      echo $suppId." <br />".$suppName." <br />".$suppAddress;

      Supplier::create([
        'supplier_id' =>$suppId,
        'supplier_name' =>$suppName,
        'supplier_address' =>$suppAddress
      ]);

      return redirect('/Supplier');
    }
}
