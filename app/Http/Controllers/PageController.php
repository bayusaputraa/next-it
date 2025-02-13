<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() {
        return view('home');
    }

    public function blogVpn() {
        return view('blog-vpn-tunneling');
    }

    public function blogEducation() {
        return view('blog-education');
    }

    public function blogOrganization() {
        return view('blog-organization');
    }

    public function blogPeltier() {
        return view('blog-peltier-comp');
    }
}
