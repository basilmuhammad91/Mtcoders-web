<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SubService;
use Illuminate\Http\Request;
use App\Models\Service;

class SubServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sub = SubService::get();
        return view('dashboard.sub-service.index')
        ->with('sub', $sub)
        ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $service = Service::get();
        return view('dashboard.sub-service.create')
        ->with('service', $service)
        ;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function submit(Request $req)
    {
        $sub = new SubService();
        $sub->service_id = $req->service_id;
        $sub->name = $req->name;
        $sub->icon_class = $req->icon_class;

        if($sub->save())
        {
            return redirect()->action('Admin\SubServiceController@index');
        }
        else
        {
            return redirect()->back();
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SubService  $subService
     * @return \Illuminate\Http\Response
     */
    public function show(SubService $subService)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SubService  $subService
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $req)
    {
        $service = Service::get();
        $sub = SubService::where(["sub_service_id"=>$req->edit_id])->first();
        return view('dashboard.sub-service.edit')
        ->with('service', $service)
        ->with('sub', $sub)
        ;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SubService  $subService
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req)
    {
        $sub = SubService::where(["sub_service_id"=>$req->sub_service_id])->update([
            "service_id" => $req->service_id,
            "name" => $req->name,
            "icon_class" => $req->icon_class
        ]);

        if($sub)
        {
            return redirect()->action('Admin\SubServiceController@index');
        }
        else
        {
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SubService  $subService
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $req)
    {
        $sub = SubService::where(["sub_service_id"=>$req->delete_id])->delete();
         if($sub)
        {
            return redirect()->action('Admin\SubServiceController@index');
        }
        else
        {
            return redirect()->back();
        }
    }
}
