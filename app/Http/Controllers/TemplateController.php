<?php

namespace App\Http\Controllers;
use App\Http\Requests\TemplateForm;
use App\Models\Template;
use Illuminate\Http\Request;

class TemplateController extends Controller
{
    public function index()
    {
        $template = Template::all();

        return view('template.index', compact('template'));
    }
    public function create()
    {
        return $this->edit(new Template());
    }

    public function show($id)
    {
        $temp = Template::find($id);
        return view('template.show', compact('temp'));
    }

    public function store(TemplateForm $request )
    {
        return $this->update($request, new Template());
    }

    public function edit(Template $template)
    {
       return view('template.edit')->withTemplate($template);
    }

    public function update(TemplateForm $request, Template $template)
    {
        $request->persist($template);

        return redirect(route('template.index'));
    }
}
