<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Validator;
use App\Models\File;
use App\Models\About;
use App\Models\PHeader;
use App\Models\Feature;
use App\Models\Blog;
use App\Models\LandingPage;

class LandingPageController extends Controller
{
    public function __construct() {

    }


    public function indexpage()
    {
        $pgheader = PHeader::where('id',1)->get();
        $features = Feature::all();
        $about = Feature::all();
        $landing = LandingPage::where('id',1)->get();
        $blog = Blog::where('id','!=',Null)->orderBy('created_at','desc')->paginate(3);
        return view('front.index', compact(['pgheader', 'features', 'about','blog', 'landing']));
    }

    public function index()
    {
        $lanpage = LandingPage::where('id', 1)->first();
        return view('admin.landingPage.index', compact('lanpage'));
    }

    public function create()
    {
        return view('admin.landingPage.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'our_services' => 'required',
            'our_services_btn' => 'required|max:200',
            'our_services_img' => 'required',
            'about_us' => 'required',
            'about_us_btn' => 'required|max:200',
            'about_us_img' => 'required',
            'achievements_name_1' => 'required|max:200',
            'achievements_num_1' => 'required|max:55',
            'achievements_name_2' => 'required|max:200',
            'achievements_num_2' => 'required|max:55',
            'achievements_name_3' => 'required|max:200',
            'achievements_num_3' => 'required|max:55',
            'newsletter_desc' => 'required|max:700',
        ]);

        $landingP = new LandingPage([
            'our_services' => $request->get('our_services'),
            'our_services_btn' => $request->get('our_services_btn'),
            'our_services_img' => $request->get('our_services_img'),
            'about_us' => $request->get('about_us'),
            'about_us_btn' => $request->get('about_us_btn'),
            'about_us_img' => $request->get('about_us_img'),
            'achievements_name_1' => $request->get('achievements_name_1'),
            'achievements_num_1' => $request->get('achievements_num_1'),
            'achievements_name_2' => $request->get('achievements_name_2'),
            'achievements_num_2' => $request->get('achievements_num_2'),
            'achievements_name_3' => $request->get('achievements_name_3'),
            'achievements_num_3' => $request->get('achievements_num_3'),
            'achievements_name_4' => $request->get('achievements_name_4'),
            'achievements_num_4' => $request->get('achievements_num_4'),
            'newsletter_desc' => $request->get('newsletter_desc'),
        ]);
        $landingP->id = 1;
        $landingP->save();

        return redirect( route('landing.index'))->with('status', 'Landing Page information saved');

    }

    public function edit($id)
    {
        $editLanding = LandingPage::find($id);
        return view('admin.landingPage.edit', compact('editLanding'));
    }

    public function update(Request $request,$id)
    {

        $updateLanding = LandingPage::find($id);
        $updateLanding->our_services = $request->get('our_services');
        $updateLanding->our_services_btn = $request->get('our_services_btn');
        if ($request->get('our_services_img') == null) {
            $updateLanding->our_services_img == $updateLanding->our_services_img;
        } elseif ($request->get('about_us_img') == null) {
            $updateLanding->about_us_img == $updateLanding->about_us_img;
        } else {
            $updateLanding->our_services_img = $request->get('our_services_img');
            $updateLanding->about_us_img = $request->get('about_us_img');
        }
        
        $updateLanding->about_us = $request->get('about_us');
        $updateLanding->about_us_btn = $request->get('about_us_btn');
        
        $updateLanding->achievements_name_1 = $request->get('achievements_name_1');
        $updateLanding->achievements_num_1 = $request->get('achievements_num_1');
        $updateLanding->achievements_name_2 = $request->get('achievements_name_2');
        $updateLanding->achievements_num_2 = $request->get('achievements_num_2');
        $updateLanding->achievements_name_3 = $request->get('achievements_name_3');
        $updateLanding->achievements_num_3 = $request->get('achievements_num_3');
        $updateLanding->achievements_name_4 = $request->get('achievements_name_4');
        $updateLanding->achievements_num_4 = $request->get('achievements_num_4');
        $updateLanding->newsletter_desc = $request->get('newsletter_desc');

        $updateLanding->save();
        return redirect( route('landing.index'))->with('status', 'Landing Page information successfully updated');
    }

    public function destroy($id)
    {
        #...
    }
}
