<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Campaign;
use App\Models\Cart;
use App\Models\Page;
use App\Models\Product;
use App\Models\Tag;
use App\Models\Theme;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Mail;



class HomeController extends Controller
{
    # set theme
    public function theme($name = "")
    {
        $settingActiveThemes = getSetting("active_themes");


        $active_themes = $settingActiveThemes != null ? json_decode($settingActiveThemes) : [1];
        $theme = Theme::whereIn('id', $active_themes)->where('code', $name)->first();

        if(session('theme') != $name){
            if (Auth::check()) {
                 Cart::where('user_id', Auth::user()->id)->delete();
            } else {
                 Cart::where('guest_user_id', (int) $_COOKIE['guest_user_id'])->delete();
            }
         }

        if(!is_null($theme)){
            session(['theme' => $name]);
        }else{
            flash(localize('The page you are looking for is not available at this moment'))->error();
        }

        return redirect()->route('home');
    }

    # homepage
    public function index()
    {
        $blogs = Blog::isActive()->latest()->take(3);

        if(getTheme() == "default"){
            $blogs = $blogs->get();

            $sliders = [];
            if (getSetting('hero_sliders') != null) {
                $sliders = json_decode(getSetting('hero_sliders'));
            }

            $banner_section_one_banners = [];
            if (getSetting('banner_section_one_banners') != null) {
                $banner_section_one_banners = json_decode(getSetting('banner_section_one_banners'));
            }

            $client_feedback = [];
            if (getSetting('client_feedback') != null) {
                $client_feedback = json_decode(getSetting('client_feedback'));
            }
        }else if(getTheme() == "halal"){
            $sliders = [];
            $banner_section_one_banners = [];

            $client_feedback = [];
            if (getSetting('halal_client_feedback') != null) {
                $client_feedback = json_decode(getSetting('halal_client_feedback'));
            }
        }

        return getView('pages.home', ['blogs' => $blogs, 'sliders' => $sliders, 'banner_section_one_banners' => $banner_section_one_banners, 'client_feedback' => $client_feedback]);
    }

    # all brands
    public function allBrands()
    {
        return view('frontend.default.pages.brands');
    }

    # all categories
    public function allCategories()
    {
        return view('frontend.default.pages.categories');
    }

    # all coupons
    public function allCoupons()
    {
        return view('frontend.default.pages.coupons.index');
    }

    # all offers
    public function allOffers()
    {
        return view('frontend.default.pages.offers');
    }

    # all blogs
    public function allBlogs(Request $request)
    {
        $searchKey  = null;
        $blogs = Blog::isActive()->latest();

        if ($request->search != null) {
            $blogs = $blogs->where('title', 'like', '%' . $request->search . '%');
            $searchKey = $request->search;
        }

        if ($request->category_id != null) {
            $blogs = $blogs->where('blog_category_id', $request->category_id);
        }

        $blogs = $blogs->paginate(paginationNumber(5));
        return view('frontend.default.pages.blogs.index', ['blogs' => $blogs, 'searchKey' => $searchKey]);
    }

    # blog details
    public function showBlog($slug)
    {
        $blog = Blog::where('slug', $slug)->first();
        return view('frontend.default.pages.blogs.blogDetails', ['blog' => $blog]);
    }

    # get all campaigns
    public function campaignIndex()
    {
        return view('frontend.default.pages.campaigns.index');
    }

    # campaign details
    public function showCampaign($slug)
    {
        $campaign = Campaign::where('slug', $slug)->first();
        return view('frontend.default.pages.campaigns.show', ['campaign' => $campaign]);
    }

    # about us page
    public function aboutUs()
    {
        $features = [];

        if (getSetting('about_us_features') != null) {
            $features = json_decode(getSetting('about_us_features'));
        }

        $why_choose_us = [];

        if (getSetting('about_us_why_choose_us') != null) {
            $why_choose_us = json_decode(getSetting('about_us_why_choose_us'));
        }

        return view('frontend.default.pages.quickLinks.aboutUs', ['features' => $features, 'why_choose_us' => $why_choose_us]);
    }

    # contact us page
    public function contactUs()
    {
        return view('frontend.default.pages.quickLinks.contactUs');
    }

    # quick link / dynamic pages
    public function showPage($slug)
    {
        $page = Page::where('slug', $slug)->first();
        return view('frontend.default.pages.quickLinks.index', ['page' => $page]);
    }

    function filterTemplates(){

        $searchKey = null;
        $per_page = 9;
        $max_range = Product::max('max_price');
        $min_value = 0;
        $max_value = formatPrice($max_range, false, false, false, false);
        $tags = Tag::all();

        return view('frontend.default.pages.products.inc.productSidebar',compact('min_value', 'max_value','max_range','tags'));
    }

    public function cctv()
    {
        return view('frontend.default.pages.solutions.cctvsolutions');
    }

    public function timeattendance()
    {
        return view('frontend.default.pages.solutions.time-attendance');
    }

    public function ippbx()
    {
        return view('frontend.default.pages.solutions.ip-pbx');
    }

    public function librarysystems()
    {
        return view('frontend.default.pages.solutions.library-system');
    }

    public function fiberOptic()
    {
        return view('frontend.default.pages.solutions.fiber-optic-solutions');
    }

    public function parkingManagement()
    {
        return view('frontend.default.pages.solutions.parking-management');
    }

    public function firealarm()
    {
        return view('frontend.default.pages.solutions.fire');
    }

    public function hotelmanagement()
    {
        return view('frontend.default.pages.solutions.hotel-management');
    }

    public function guardtour()
    {
        return view('frontend.default.pages.solutions.guard-tour-systems');
    }

    public function softwaresolutions()
    {
        return view('frontend.default.pages.solutions.software-solutions');
    }
    
    
    public function distributor()
    {
        return view('frontend.default.pages.registration.distributor-registration');
    }
    
    public function storeDistributor(Request $request)
    {
        $request->validate([
            'distributorfullname' => 'required|string|max:255',
            'distributorphone'    => 'required|string|max:20',
            'distributorcompany'  => 'required|string|max:255',
            'distributoraddress'  => 'required|string|max:255',
            'distributoremail'    => 'required|email',
            'g-recaptcha-response' => 'required', // ✅ Add reCAPTCHA validation
        ]);
    
        // Verify reCAPTCHA with Google
        $recaptcha = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . env('RECAPTCHAV3_SECRET') . '&response=' . $request->input('g-recaptcha-response'));
        $recaptcha = json_decode($recaptcha);
    
        if (!$recaptcha->success || $recaptcha->score < 0.5) {
            return back()->with('error', '❌ reCAPTCHA failed. Please try again.');
        }
    
        $data = $request->only([
            'distributorfullname',
            'distributorphone',
            'distributorcompany',
            'distributoraddress',
            'distributoremail'
        ]);
    
        try {
            Mail::send('emails.distributor', $data, function($message) use ($data) {
                $message->to(['info@liveu.lk', 'rameez@liveu.lk', 'pradeep@liveu.lk'])
                        ->subject('New Distributor Registration from ' . $data['distributorfullname']);
            });
    
            return back()->with('success', '✅ Message sent successfully!');
        } catch (\Exception $e) {
            return back()->with('error', '❌ Failed to send message. ' . $e->getMessage());
        }
    }

}
