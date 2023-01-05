<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Element;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){
        $sliders = Element::where('page','index')->where('position','slider')->orderBy('sort','asc')->get();
        $arrivals = Item::where('cgy_id',2)->where('enabled',true)->orderBy('sort','asc')->get();
        $images = Element::where('page','index')->where('position','images')->orderBy('sort','asc')->take(4)->get();
        $new_product_top = Element::where('page','index')->where('position','new_product_top')->orderBy('sort','asc')->first();
        $new_products =  Item::where('cgy_id',1)->where('enabled',true)->orderBy('sort','asc')->get();
        $logo = Element::where('page','index')->where('position','logo')->orderBy('sort','asc')->get();
        $row3 = Element::where('page','index')->where('position','row3')->orderBy('sort','asc')->get();
        $desc = Element::where('page','index')->where('position','description')->orderBy('sort','asc')->get();
        $show = Element::where('page','index')->where('position','show')->orderBy('sort','asc')->get();
        $video = Element::where('page','index')->where('position','video')->orderBy('sort','asc')->first();
        return view('index',compact('sliders','arrivals','images',
        'new_product_top','new_products','logo','row3','desc','show','video'));
    }

    public function shop(){
        $logo = Element::where('page','index')->where('position','logo')->orderBy('sort','asc')->get();
        return view('shop',compact('logo'));
    }

    public function blog()
    {
        $logo = Element::where('page','index')->where('position','logo')->orderBy('sort','asc')->get();
        return view('blog',compact('logo'));
    }

    public function blog_details()
    {
        $logo = Element::where('page','index')->where('position','logo')->orderBy('sort','asc')->get();
        return view('blog_details',compact('logo'));
    }

    public function about()
    {
        $logo = Element::where('page','index')->where('position','logo')->orderBy('sort','asc')->get();
        return view('about',compact('logo'));
    }

    public function contact()
    {
        $logo = Element::where('page','index')->where('position','logo')->orderBy('sort','asc')->get();
        return view('contact',compact('logo'));
    }

    public function details()
    {
        $logo = Element::where('page','index')->where('position','logo')->orderBy('sort','asc')->get();
        return view('products_details',compact('logo'));
    }

    public function login()
    {
        $logo = Element::where('page','index')->where('position','logo')->orderBy('sort','asc')->get();
        return view('login',compact('logo'));
    }

    public function cart()
    {
        $logo = Element::where('page','index')->where('position','logo')->orderBy('sort','asc')->get();
        return view('cart',compact('logo'));
    }

    public function elements()
    {
        $logo = Element::where('page','index')->where('position','logo')->orderBy('sort','asc')->get();
        return view('elements',compact('logo'));
    }

    public function confirmations()
    {
        $logo = Element::where('page','index')->where('position','logo')->orderBy('sort','asc')->get();
        return view('confirmations',compact('logo'));
    }

    public function checkout()
    {
        $logo = Element::where('page','index')->where('position','logo')->orderBy('sort','asc')->get();
        return view('checkout',compact('logo'));
    }
}
