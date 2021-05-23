<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Http\Requests\AboutForm;
use Illuminate\Http\Request;

class AboutController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = About::where('id', 1)->first();
        return view('admin.about.index', compact('about'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.about.create');
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
            'story_description' => 'required',
            'title_1' => 'required|max:100',
            'icon_1' => 'required',
            'short_text_1' => 'required'
        ]);

        $about = new About([
            'story_description' => $request->get('story_description'),
            'title_1' =>  $request->get('title_1'),
            'icon_1' => $request->get('icon_1'),
            'short_text_1' => $request->get('short_text_1'),

            'title_2' =>  $request->get('title_2'),
            'icon_2' => $request->get('icon_2'),
            'short_text_2' => $request->get('short_text_2'),

            'title_3' =>  $request->get('title_3'),
            'icon_3' => $request->get('icon_3'),
            'short_text_3' => $request->get('short_text_3'),

            'title_4' =>  $request->get('title_4'),
            'icon_4' => $request->get('icon_4'),
            'short_text_4' => $request->get('short_text_4')
        ]);

        $about->save();

        return redirect(route('about.index'))->with('status', 'About detalis added successfully');

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
        $about = About::find($id);
        return view('admin.about.edit', compact('about'));
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
            'story_description' => 'required',
            'title_1' => 'required|max:100',
            'icon_1' => 'required',
            'short_text_1' => 'required'
        ]);

        $about = About::find($id); 

        $about->story_description = $request->get('story_description');
        $about->title_1 =  $request->get('title_1');
        $about->icon_1 = $request->get('icon_1');
        $about->short_text_1 = $request->get('short_text_1');

        $about->title_2 =  $request->get('title_2');
        $about->icon_2 = $request->get('icon_2');
        $about->short_text_2 = $request->get('short_text_2');

        $about->title_3 =  $request->get('title_3');
        $about->icon_3 = $request->get('icon_3');
        $about->short_text_3 = $request->get('short_text_3');

        $about->title_4 =  $request->get('title_4');
        $about->icon_4 = $request->get('icon_4');
        $about->short_text_4 = $request->get('short_text_4');

        $about->save();

        return redirect(route('about.index'))->with('status', 'About detalis updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
