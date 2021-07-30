<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\LandingPage;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::all();
        return view('admin.services.index', compact('services'));
    }

        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function frontIndex()
    {
        $services = Service::all();
        $servlan = LandingPage::where('id', 1)->value('our_services');
        return view('front.services', compact(['services', 'servlan']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.services.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:100',
            'services_desc' => 'required|max:700',
            'service_image' => 'required',
            'services_btn' => 'required|max:50',
        ]);

        $service = new Service([
            'title' => $request->get('title'),
            'services_desc' => $request->get('services_desc'),
            'service_image' => $request->get('service_image'),
            'services_btn' => $request->get('services_btn'),
        ]);

        $service->save();

        return redirect()->route('service.index')->with(['status' => 'Service added successfully']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = Service::find($id);

        return view('admin.services.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:100',
            'services_desc' => 'required|max:700',
            'services_btn' => 'required|max:50',
        ]);

        $service = Service::find($id);
        $service->title = $request->get('title');
        $service->services_desc = $request->get('services_desc');
        if ($request->get('service_image')){
            $service->service_image = $request->get('service_image');
        }
        $service->services_btn = $request->get('services_btn');
        

        $service->save();

        return redirect()->route('service.index')->with(['status' => 'Service updated successfully']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $serv = Service::find($id);
        $serv->delete();

        return back()->with('status' , 'Services deleted successfully');
    }
}
