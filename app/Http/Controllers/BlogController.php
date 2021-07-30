<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\Model;
use App\Models\Blog;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog = Blog::where('id','!=',Null)->orderBy('created_at','desc')->paginate(10);
        $articles = Blog::all()->count();
        $post_active = Blog::where('active',1)->count();
        $post_draft = Blog::where('active',0)->count();
        return view('admin.blog.index', compact(['blog', 'articles', 'post_active', 'post_draft']));
    }


        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function allPost()
    {
        $blog = Blog::where('id','!=',Null)->orderBy('created_at','desc')->paginate(10);
        return view('front.blog.index', compact('blog'));
    }

    public function CountAll()
    {
        $posts = Blog::all()->count();
        $post_active = Blog::where('active',1)->count();
        $post_draft = Blog::where('active',0)->count();
        return view('admin.blog.status',  compact([
            'posts',
            'post_active',
            'post_draft'
        ]));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Blog();
        $post->title = $request->get('title');
        $post->body = $request->get('body');
        $post->slug = Str::slug($post->title);

        $duplicate = Blog::where('slug', $post->slug)->first();

        if ($duplicate) {
            return redirect(route('blog.create'))->withErrors('Title already exists.')->withInput();
        }

        if ($request->has('save')) {
            $post->active = 0; 
            $message = 'Post saved successfully';
            $redirect = route('blog.index');
        } else {
            $post->active = 1; 
            $message = 'Post published successfully';
            $redirect = route('blog.index');
        }
        $post->save();

        return redirect(route('blog.index'))->with('success', $message);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Blog::find($id);
        return view('front.blog.single_article')->with('post', $article);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $slug)
    {
        $post = Blog::where('slug',  $slug)->first();
        return view('admin.blog.edit')->with('post', $post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $post_id = $request->input('post_id');
        $post = Blog::find($post_id);

        $title = $request->input('title');
        $slug = Str::slug('title');
        $duplicate = Blog::where('slug', $slug)->first();
        if ($duplicate->id != $post_id) {
            return redirect(route('blog.edit' . $post->slug ))->withErrors('Title already exists.')->withInput();
        } else {
            $post->slug = $slug;
        }

        $post->title = $title;
        $post->body = $request->input('body');

        if ($request->has('save')) {
            $post->active = 1; 
            $message = 'Post saved successfully';
            $redirect = route('blog.index');

            $post->save();
            return redirect($redirect)->withMessage($message);
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $post = Blog::find($id);
        $post->delete();

        return redirect(route('blog.index'))->with('success', 'Post deleted Successfully.');
    }
}
