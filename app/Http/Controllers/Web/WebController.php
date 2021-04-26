<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\homepage;
use App\Models\About;
use App\Models\Service;
use App\Models\Solution;
use App\Models\Portfolio;
use App\Models\PortfolioCategory;
use App\Models\Footer;
use App\Models\ContactForm;

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

    public function solution(Request $req)
    {
    	$sol = Solution::where(["solution_id"=>$req->solution_id])->first();
    	return view('web.solution')
    	->with('sol', $sol)
    	;
    }

    public function portfolio()
    {
    	$portfolio = Portfolio::get();
    	return dd($portfolio);
    }

    public function portfolio_category()
    {
    	$cat = PortfolioCategory::get();
    	return view('web.portfolio')
    	->with('cat', $cat);
    }

    public function contact()
    {
    	$footer = Footer::get()->first();
    	return view('web.contact')
    	->with('footer', $footer)
    	;
    }

    public function contact_submit(Request $req)
    {
    	$req->validate([
    		"name" => "required",
    		"email" => "required",
    		"phone" => "required",
    		"message" => "required"
    	]);

    	$contact = new ContactForm();
    	$contact->name = $req->name;
    	$contact->email = $req->email;
    	$contact->phone = $req->phone;
    	$contact->message = $req->message;
    	$contact->current_date = date('Y/m/d');

    	if($contact->save())
    	{
    		return redirect()->back();
    	}
    }

    
}
