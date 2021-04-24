<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use App\Models\PortfolioCategory;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolio = Portfolio::get();
        return view('dashboard.portfolio.index')
        ->with('portfolio', $portfolio)
        ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cat = PortfolioCategory::get();
        return view('dashboard.portfolio.create')
        ->with('cat', $cat)
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
        $portfolio = new Portfolio();
        $portfolio->category_id = $req->category_id;
        $portfolio->description = $req->description;

        if($req->image)
        {
            $portfolio->image = $req->image->store('Images/Portfolios','public');
        }

        if($portfolio->save())
        {
            return redirect()->action('Admin\PortfolioController@index');
        }
        else
        {
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function show(Portfolio $portfolio)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $req)
    {
        $cat = PortfolioCategory::get();
        $portfolio = Portfolio::where(["portfolio_id"=>$req->edit_id])->first();
        return view('dashboard.portfolio.edit')
        ->with('portfolio', $portfolio)
        ->with('cat', $cat)
        ;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req)
    {
        if($req->image)
        {
            $portfolio = Portfolio::where(["portfolio_id"=>$req->portfolio_id])->update([
                "image" => $req->image->store('Images/Portfolios','public')
            ]);
        }

        $portfolio = Portfolio::where(["portfolio_id"=>$req->portfolio_id])->update([
            "category_id" => $req->category_id,
            "description" => $req->description
        ]);

        if($portfolio)
        {
            return redirect()->action('Admin\PortfolioController@index');
        }
        else
        {
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $req)
    {
        $portfolio = Portfolio::where(["portfolio_id"=>$req->delete_id])->delete();
        if($portfolio)
        {
            return redirect()->action('Admin\PortfolioController@index');
        }
        else
        {
            return redirect()->back();
        }
    }
}
