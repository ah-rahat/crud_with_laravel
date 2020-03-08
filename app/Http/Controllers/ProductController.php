<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    function addproduct(){
    	$products=Product::all();
    	return view('product/insert',compact('products'));
    }
    function insertproduct(Request $request){
    	$request->validate([
    		"product_name"=>'required',
           	"product_description"=>'required',
           	"product_price"=>'required',
           	"product_quantity"=>'required'
    	]);
           Product::insert([
           	"product_name"=>$request->product_name,
           	"product_description"=>$request->product_description,
           	"product_price"=>$request->product_price,
           	"product_quantity"=>$request->product_quantity
           ]);
           return back()->with('success','Insert successFull');
    }
    function viewproduct(){
    	$products=Product::all();
    	return view('product/view',compact('products'));
    }
    function deleteproduct($product_id){
    	Product::find($product_id)->delete();
    	return back()->with('deleteMsg','Product Deleted successFully');
    }
     function editproduct($product_id){
     	$single_products=Product::findOrfail($product_id);
     	return view('product/edit',compact('single_products'));
    }
    function updateproduct(Request $request){
    	$request->validate([
    		"product_name"=>'required',
           	"product_description"=>'required',
           	"product_price"=>'required',
           	"product_quantity"=>'required'
    	]);
    	Product::find($request->id)->update([
    		"product_name"=>$request->product_name,
           	"product_description"=>$request->product_description,
           	"product_price"=>$request->product_price,
           	"product_quantity"=>$request->product_quantity
    	]);
    	return back()->with("updateMsg","Update successFull");
    }
}
