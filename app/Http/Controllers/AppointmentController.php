<?php

namespace App\Http\Controllers;

use App\Appointment;
use Illuminate\Http\Request;
use DB;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $appointment_mst = DB::select("SELECT appointment_mst.*,services_mst.services as services_name FROM `appointment_mst` INNER JOIN services_mst ON services_mst.servicesId=appointment_mst.services WHERE appointment_mst.deleteData='1'
        ");
		$appointment_mst = json_decode(json_encode($appointment_mst), true);
        
        return view('searchAppointment', compact('appointment_mst'));

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
        $Appointment = new Appointment(
            ['name' => $request->get('name'),
            'contact' => $request->get('contact'),
            'address1' => $request->get('address1'),
            'address2' => $request->get('address2'),
            'city' => $request->get('city'),
            'state' => $request->get('state'),
            'country' => $request->get('country'),
            'pincode' => $request->get('pincode'),
            'date' => $request->get('date'),
            'time' => $request->get('time'),
            'services' => $request->get('services'),
            'age' => $request->get('age'),
            'price' => $request->get('price'),
            'discount' => $request->get('discount'),
            'totalPrice' => $request->get('totalPrice'),
            ]); // here add [$i]
        $Appointment->save();
        return redirect('/')->with('success', 'Appointment Book Successfully!'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function show(Appointment $appointment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function edit(Appointment $appointment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Appointment $appointment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appointment $appointment)
    {
        //
    }
    public function allServices(Request $request){

        $services = DB::table('services_mst')->where('deleteData', '=', '1')->get();
       return $services;
    }
    public function getPrice(Request $request){
        $serviceId = $request['serviceId'];
        $services = DB::table('services_mst')->where('servicesId', '=', $serviceId)->get();
       return $services;
    }
    public function checkCustomer(Request $request){
        $contact = $request['contact'];
        $services = DB::table('appointment_mst')->where('contact', '=', $contact)->get();
       return $services;
    }

    public function getAge(Request $request){
        $discount = DB::table('discount_mst')->where('deleteData', '=', '1')->get();
        return $discount;
    }
}
