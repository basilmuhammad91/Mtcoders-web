<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Homepage;
use App\Models\ContactForm;
use DB;

class HomepageController extends Controller
{
    public function index()
    {
    	$homepage = Homepage::get();
    	$homepage2 = DB::table('homepages')->orderBy('homepage_id', 'desc')->first();

    	return view('dashboard.homepage.index')
    	->with('homepage',$homepage)
    	->with('homepage2', $homepage2)
    	;
    }

    public function create()
    {
    	return view('dashboard.homepage.create');
    }

    public function submit(Request $req)
    {
    	$homepage = new Homepage();
    	$homepage->banner_heading = $req->banner_heading;
    	$homepage->banner_tagline = $req->banner_tagline;
    	$homepage->banner_text = $req->banner_text;

    	if($homepage->save())
    	{
    		return redirect()->action('Admin\HomepageController@index');
    	}
    	else
    	{
    		return redirect()->back();
    	}
    }

    public function edit(Request $req)
    {
    	$homepage = Homepage::where(["homepage_id"=>$req->homepage_id])->first();
    	return view('dashboard.homepage.edit')
    	->with('homepage',$homepage)
    	;
    }

    public function update(Request $req)
    {
    	$homepage = Homepage::where(["homepage_id"=>$req->homepage_id])->update([
    		"banner_heading" => $req->banner_heading,
    		"banner_tagline" => $req->banner_tagline,
    		"banner_text" => $req->banner_text
    	]);

    	if($homepage)
    	{
    		return redirect()->action('Admin\HomepageController@index');
    	}
    	else
    	{
    		return redirect()->back();
    	}
    }

    public function delete(Request $req)
    {
    	$homepage = Homepage::where(["homepage_id"=>$req->homepage_id])->delete();
    	if($homepage)
    	{
    		return redirect()->action('Admin\HomepageController@index');
    	}
    	else
    	{
    		return redirect()->back();
    	}
    }

    public function show_contact_details()
    {
    	$contact = ContactForm::get();
    	return view('dashboard.homepage.contact_details')
    	->with('contact', $contact)
    	;
    }
}