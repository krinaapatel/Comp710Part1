<?php

namespace App\Http\Controllers;

use App\Services;
use Illuminate\Http\Request;
use DB;

class ServicesController extends Controller
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
             $services = DB::table('services_mst')->where('deleteData', '=', '1')->get();
            $services = json_decode(json_encode($services), True);
            
        
        return view('searchServices', compact('services'));
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
        $Services = new Services(
            ['services' => $request->get('services'),
            'price' => $request->get('price'),
            ]); // here add [$i]
        $Services->save();
        return redirect('/services')->with('success', 'Services created successfully!'); 
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
    public function edit($servicesId)
    {
        //
        $services = DB::table('services_mst')->where('deleteData', '=', '1')->get();
            $servicesmst = json_decode(json_encode($services), True);
        
        $service= Services::find($servicesId);
        return view('editServices', compact('service','servicesId','servicesmst'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$servicesId)
    {
        //

        $service= Services::find($servicesId);
        $service->services = $request->get('services');
        $service->price = $request->get('price');
        $service->save();
        //return redirect('/searchStandard');
        return redirect('/services')->with('success', 'Services updated successfully '); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy($servicesId)
    {
        //
        $service= Services::find($servicesId);
        $service->deleteData = '0';
        $service->save();
        return redirect('/services')->with('success', 'Services deleted successfully ');
    }
}
