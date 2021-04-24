<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\homepage;
use App\Models\About;
use App\Models\Service;
use DB;

class WebController extends Controller
{
    public function homepage()
    {

    	$about = About::get()->first();
    	$homepage = Homepage::get()->first();
    	$service = Service::get();
    	return view('web.home')
    	->with('homepage', $homepage)
    	->with('about', $about)
    	->with('service', $service)
    	;
    }

    public function who_we_are()
    {
    	$about = About::get()->first();
    	return view('web.who-we-are')
    	->with('about', $about)
    	;
    }

    public function technology()
    {
    	return view('web.technology');
    }

    public function view_service(Request $req)
    {
    	$service = Service::where(["service_id"=>$req->service_id])->first();
    	return view('web.single-service')
    	->with('service', $service)
    	;
    }

    public function solution()
    {
    	
    }
}
