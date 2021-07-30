<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\Model;
use App\Models\Blog;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function Counter()
    {
        $articles = Blog::where('active',1)->count();
        return view('admin.dashboard', compact('articles'));
    }

    public function latest_added() {
        $blog = Blog::where('id','!=',Null)->orderBy('created_at','desc')->paginate(3);
        $services = Service::where('id','!=',Null)->orderBy('created_at','desc')->paginate(3);

        return view('admin.dashboard', compact(['blog', 'services']));
    }



}
