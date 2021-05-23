<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\Model;
use App\Models\PHeader;
use Illuminate\Http\Request;


class PHeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pheader = Pheader::all();
        return view('admin.pheader.index', compact('pheader'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pheader.create');
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
            'title'=>'required|max:200',
            'text_btn'=>'required|max:500',
        ]);

        $ph = new PHeader([
            'title' => $request->get('title'),
            'text_btn' => $request->get('text_btn'),
        ]);

        $ph->save();

        return redirect( route('pheader.index'))->with('success', 'Page Header saved');
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
        $pheader = PHeader::find($id);
        return view('admin.pheader.edit', compact('pheader'));

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
            'title'=>'required|max:200',
            'text_btn'=>'required|max:500',
        ]);

        $pheader = PHeader::find($id);
        $pheader->title = $request->get('title');
        $pheader->text_btn = $request->get('text_btn');

        $pheader->save();

        return redirect( route('pheader.index'))->with('success', 'Page Header updated!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pheader = PHeader::find($id);
        $pheader->delete();

        return redirect( route('pheader.index'))->with('success', 'Page Header deleted!');

    }
}
