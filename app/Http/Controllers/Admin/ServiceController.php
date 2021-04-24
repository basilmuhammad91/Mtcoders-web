<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $service = Service::get();
        return view('dashboard.service.index')
        ->with('service', $service)
        ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.service.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function submit(Request $req)
    {
        $req->validate([
            "service_name" => "required",
            "service_text" => "required",
            "icon_class" => "required"
        ]);

        $service = new Service();
        $service->service_name = $req->service_name;
        $service->service_text = $req->service_text;
        $service->icon_class = $req->icon_class;

        if($service->save())
        {
            return redirect()->action('Admin\ServiceController@index');
        }
        else
        {
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $req)
    {
        $service = Service::where(["service_id"=>$req->edit_id])->first();
        return view('dashboard.service.edit')
        ->with('service', $service)
        ;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req)
    {
        $service = Service::where(["service_id"=>$req->service_id])->update([
            "service_name" => $req->service_name,
            "service_text" => $req->service_text,
            "icon_class" => $req->icon_class
        ]); 

        if($service)
        {
            return redirect()->action('Admin\ServiceController@index');
        }
        else
        {
            return redirect()->back();
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $req)
    {
        $service = Service::where(["service_id"=>$req->delete_id])->delete();
        if($service)
        {
            return redirect()->action('Admin\ServiceController@index');
        }
        else
        {
            return redirect()->back();
        }

    }
}