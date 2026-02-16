<?php

namespace App\Http\Controllers\FontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FontEndController extends Controller
{
    public function index()
    {
        return view('font-end.screen.home');
    }

    public function services()
    {
        return view('font-end.screen.services');
    }
    public function onlineOrderingSystem()
    {
        return view('font-end.screen.onlineOrderingSystem');
    }

    public function cloudEposSystem()
    {
        return view('font-end.screen.cloudEposSystem');
    }
    public function digitalMarketing()
    {
        return view('font-end.screen.digitalMarketing');
    }
    public function printMedia()
    {
        return view('font-end.screen.printMedia');
    }
    public function videos()
    {
        return view('font-end.screen.videos');
    }
    public function photo()
    {
        return view('font-end.screen.photo');
    }
    public function news()
    {
        return view('font-end.screen.news');
    }
    public function blackFriday2024()
    {
        return view('font-end.screen.blackFriday2024');
    }
    public function newYear2024()
    {
        return view('font-end.screen.newYear2024');
    }
    public function valentineOffer2025()
    {
        return view('font-end.screen.valentineOffer2025');
    }
    public function portfolio()
    {
        return view('font-end.screen.portfolio');
    }
    public function partners()
    {
        return view('font-end.screen.partners');
    }
    public function contact()
    {
        return view('font-end.screen.contact');
    }
    public function fromPartner()
    {
        return view('font-end.screen.from_partner');
    }
}
