<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolio = Portfolio::where('id','!=',Null)->orderBy('created_at','desc')->paginate(10);
        return view('admin.portfolio.index', compact('portfolio'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Portfolio()
    {
        $portfolio = Portfolio::where('id','!=',Null)->orderBy('created_at','desc')->paginate(10);
        return view('front.portfolio.index', compact('portfolio'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.portfolio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $portfo = new Portfolio();
        $portfo->project_name = $request->get('project_name');
        $portfo->project_description = $request->get('project_description');
        $portfo->project_link = $request->get('project_link');
        $portfo->project_display_img = $request->get('project_display_img');
        $portfo->project_img_1 = $request->get('project_img_1');
        $portfo->project_img_2 = $request->get('project_img_2');
        $portfo->project_img_3 = $request->get('project_img_3');
        $portfo->clients_name = $request->get('clients_name');
        $portfo->client_country = $request->get('client_country');

        if ($request->has('save')) {
            $portfo->active = 0; 
            $message = 'Project saved successfully';
            $redirect = route('portfolio.index');
        } else {
            $portfo->active = 1; 
            $message = 'Project published successfully';
            $redirect = route('portfolio.index');
        }
        $portfo->save();

        return redirect(route('portfolio.index'))->with('success', $message);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function show(Portfolio $portfolio, $id)
    {
        $project = Portfolio::find($id);
        $portfolio = Portfolio::where('id','!=',Null)->orderBy('created_at','desc')->paginate(4);
        return view('front.portfolio.show', compact(['project', 'portfolio']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function edit(Portfolio $portfolio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portfolio $portfolio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portfolio $portfolio)
    {
        //
    }
}
