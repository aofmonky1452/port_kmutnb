<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct(){}

    public function indexAdmin(){ return view('admin-home'); }

    // About Department
        // เกี่ยวกับภาควิชา
        public function aboutDepartment_Admin(){ return view('aboutDepartment.about.admin-aboutDepartment'); }
        public function aboutDepartment_Add(){ return view('aboutDepartment.about.admin-aboutDepartment_Add'); }
        public function aboutDepartment_Edit(){ return view('aboutDepartment.about.admin-aboutDepartment_Edit'); }
        // พันธกิจ วิสัยทัศน์
        public function mission_Admin(){ return view('aboutDepartment.mission.admin-mission'); }
        public function mission_Add(){ return view('aboutDepartment.mission.admin-mission_Add'); }
        public function mission_Edit(){ return view('aboutDepartment.mission.admin-mission_Edit'); }
        // ข่าวประชาสัมพันธ์
        public function news_Admin(){ return view('aboutDepartment.news.admin-news'); }
        public function news_Add(){ return view('aboutDepartment.news.admin-news_Add'); }
        public function news_Edit(){ return view('aboutDepartment.news.admin-news_Edit'); }
    
    // Personal
        // บุคลากร
        public function personal_Admin(){ return view('personal.personal.admin-personal'); }
        public function personal_Add(){ return view('personal.personal.admin-personal_Add'); }
        public function personal_Edit(){ return view('personal.personal.admin-personal_Edit'); }
}
