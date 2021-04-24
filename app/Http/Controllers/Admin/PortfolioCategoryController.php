<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PortfolioCategory;
use Illuminate\Http\Request;

class PortfolioCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cat = PortfolioCategory::get();
        return view('dashboard.portfolio-category.index')
        ->with('cat', $cat)
        ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.portfolio-category.create');
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
            "name" => "required|min:3"
        ]);

        $cat = new PortfolioCategory();
        $cat->name = $req->name;

        if($cat->save())
        {
            return redirect()->action('Admin\PortfolioCategoryController@index');
        }
        else
        {
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PortfolioCategory  $portfolioCategory
     * @return \Illuminate\Http\Response
     */
    public function show(PortfolioCategory $portfolioCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PortfolioCategory  $portfolioCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $req)
    {
        $cat = PortfolioCategory::where(["category_id"=>$req->edit_id])->first();
        return view('dashboard.portfolio-category.edit')
        ->with('cat', $cat)
        ;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PortfolioCategory  $portfolioCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req)
    {
        $req->validate([
            "name" => "required|min:3"
        ]);

        $cat = PortfolioCategory::where(["category_id"=>$req->category_id])->update([
            "name" => $req->name
        ]);

        if($cat)
        {
            return redirect()->action('Admin\PortfolioCategoryController@index');
        }
        else
        {
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PortfolioCategory  $portfolioCategory
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $req)
    {
        $cat = PortfolioCategory::where(["category_id"=>$req->delete_id])->delete();
        if($cat)
        {
            return redirect()->action('Admin\PortfolioCategoryController@index');
        }
        else
        {
            return redirect()->back();
        }
    }
}
