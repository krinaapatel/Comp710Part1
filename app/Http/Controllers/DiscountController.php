<?php

namespace App\Http\Controllers;

use App\Discount;
use Illuminate\Http\Request;
use DB;

class DiscountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        //
             $discountmst = DB::table('discount_mst')->where('deleteData', '=', '1')->get();
            $discountmst = json_decode(json_encode($discountmst), True);
            
        
        return view('searchDiscount', compact('discountmst'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Discount = new Discount(
            ['title' => $request->get('title'),
            'percentage' => $request->get('percentage'),
            'condition' => $request->get('condition'),
            'age' => $request->get('age'),
            'from' => $request->get('from'),
            'to' => $request->get('to'),
            ]); // here add [$i]
        $Discount->save();
        return redirect('/discount')->with('success', 'Discount created successfully!'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function show(Services $services)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
       $discountmst = DB::table('discount_mst')->where('deleteData', '=', '1')->get();
            $discountmst = json_decode(json_encode($discountmst), True);
            
        
        $discount= Discount::find($id);
        return view('editDiscount', compact('discount','id','discountmst'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //

         $discount= Discount::find($id);
        $discount->title = $request->get('title');
        $discount->percentage = $request->get('percentage');
        $discount->condition = $request->get('condition');
        $discount->age = $request->get('age');
        $discount->from = $request->get('from');
        $discount->to = $request->get('to');
        $discount->save();
        //return redirect('/searchStandard');
        return redirect('/discount')->with('success', 'Discount updated successfully '); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
      $discount= Discount::find($id);
        $discount->deleteData = '0';
        $discount->save();
        return redirect('/discount')->with('success', 'Discount deleted successfully ');
    }
}
