<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = About::get();
        return view('dashboard.about.index')
        ->with('about', $about)
        ;
    }   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.about.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $req)
    {
    	$about = About::where(["about_id"=>$req->id])->first();
    	return view('dashboard.about.edit')
    	->with('about', $about)
    	;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req)
    {
    	$req->validate([
    		"about_text"=>"required",
    		"vision_text"=>"required",
    		"value_text"=>"required",
    		"mission_text"=>"required"
    	]);

        $about = About::where(["about_id"=>$req->about_id])->update([
        	"about_text" => $req->about_text,
        	"vision_text" => $req->vision_text,
        	"value_text" => $req->value_text,
        	"mission_text" => $req->mission_text
        ]);

        if($about)
	        {
	        	return redirect()->action('Admin\AboutController@index');
	        }
	        else
	        {
	        	return redirect()->back();
	        }

  //      try
  //      {
  //      	 if($about)
	 //        {
	 //        	return redirect()->action('Admin\AboutController@index');
	 //        }
	 //        else
	 //        {
	 //        	return redirect()->back();
	 //        }
  //      }
  //      catch(\Exception $e)
  //      {
		// return $e->getMessage();
  //      }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        //
    }
}
