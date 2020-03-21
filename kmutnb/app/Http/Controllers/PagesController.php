<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    // Index
    public function index(){ return view('home'); }

    // About Department
    public function aboutDepartment(){ return view('aboutDepartment.about.aboutDepartment'); }
    public function mission(){ return view('aboutDepartment.mission.mission'); }
    public function news(){ return view('aboutDepartment.news.news'); }
    public function newsDetail(){ return view('aboutDepartment.news.newsDetail'); }

    // personal
    public function personal() { return view('personal.personal.personal'); }

    // course
    public function industry() { return view('course.industry.industry'); }

}
