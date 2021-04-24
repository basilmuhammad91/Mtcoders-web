<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Footer;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $footer = Footer::get();
        return view('dashboard.footer.index')
        ->with('footer', $footer)
        ;
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function show(Footer $footer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $req)
    {
        $footer = Footer::where(["footer_id"=>$req->id])->first();
        return view('dashboard.footer.edit')
        ->with('footer', $footer)
        ;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req)
    {
        // $req->validate([
        //     "text" => "required",
        //     "fb_link" => "required",
        //     "wp_link" => "required",
        //     "email" => "required",
        //     "phone" => "required",
        //     "phone2 " => "required",
        //     "address" => "required"
        // ]);
        
        $footer = Footer::where(["footer_id"=>$req->footer_id])->update([
            "text" => $req->text,
            "fb_link" => $req->fb_link,
            "wp_link" => $req->wp_link,
            "email" => $req->email,
            "phone" => $req->phone,
            "phone2" => $req->phone2,
            "address" => $req->address
        ]);

        if($footer)
        {
            return redirect()->action('Admin\FooterController@index');
        }
        else
        {
            return redirect()->back();
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Footer $footer)
    {
        //
    }
}
