<?php

namespace App\Http\Controllers;

use App\Models\Statistics;
use Illuminate\Http\Request;

class StatisticsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stat = Statistics::where('id', 1)->first();
        return view('admin.statistics.index', compact('stat'));
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
     * @param  \App\Models\Statistics  $statistics
     * @return \Illuminate\Http\Response
     */
    public function show(Statistics $statistics)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Statistics  $statistics
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $stats = Statistics::find($id);
        return view('admin.statistics.edit', compact('stats'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Statistics  $statistics
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'projects' => 'required',
            'projects_desc' => 'required',
            'hours' => 'required',
            'hours_desc' => 'required',
            'clients' => 'required',
            'clients_desc' => 'required',
            'ui_ux_design' => 'required',
            'ui_ux_design_desc' => 'required',
            'web_design' => 'required',
            'web_design_desc' => 'required',
            'app_design' => 'required',
            'app_design_desc' => 'required',
            'support' => 'required',
            'support_desc' => 'required',
            'blog_posts' => 'required',
        ]);

        $stats = Statistics::find($id);
        $stats->projects = $request->get('projects');
        $stats->projects_desc = $request->get('projects_desc');
        $stats->hours = $request->get('hours');
        $stats->hours_desc = $request->get('hours_desc');
        $stats->clients = $request->get('clients');
        $stats->clients_desc = $request->get('clients_desc');
        $stats->ui_ux_design = $request->get('ui_ux_design');
        $stats->ui_ux_design_desc = $request->get('ui_ux_design_desc');
        $stats->web_design = $request->get('web_design');
        $stats->web_design_desc = $request->get('web_design_desc');
        $stats->app_design = $request->get('app_design');
        $stats->app_design_desc = $request->get('app_design_desc');
        $stats->support = $request->get('support');
        $stats->support_desc = $request->get('support_desc');
        $stats->blog_posts = $request->get('blog_posts');

        $stats->save();

        return redirect()->route('stats')->with(['status' => 'Statistics updated successfully']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Statistics  $statistics
     * @return \Illuminate\Http\Response
     */
    public function destroy(Statistics $statistics)
    {
        //
    }
}
