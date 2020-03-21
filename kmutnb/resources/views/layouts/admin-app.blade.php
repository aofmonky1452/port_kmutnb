<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'ภาควิชาเทคโนโลยีวิศวกรรมไฟฟ้า') }}</title>
    <link rel="icon" href="{{asset('img/logo.png')}}" type="image/png" sizes="16x16">


    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/imageSlideShow.js') }}"></script>
    <script src="{{ asset('js/navbarResponsive.js') }}"></script>
    <script src="{{ asset('js/imageUploadPreview.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


</head>

<body>
    {{-- button back to top --}}
    <a class="back-to-top" href="#">
        <i class="fas fa-arrow-up"></i>
    </a>

    {{-- nav --}}
    <div class="nav">
        <div class="nav-container">
        <div class="nav-left">
            <a href="{{route('indexAdmin')}}">
            <img src="{{asset('img/logo.png')}}" alt="" />
            </a>
            <div class="nl-title">
            <h2><a href="{{route('indexAdmin')}}">ภาควิชาเทคโนโลยีวิศวกรรมไฟฟ้า</a></h2>
            <h4><a href="{{route('indexAdmin')}}">วิทยาลัยเทคโนโลยีอุตสาหกรรม</a></h4>
            </div>
        </div>
        <div class="nav-right">
            <a href="{{route('login')}}"><i class="fas fa-user"></i>เข้าสู่ระบบ</a>
            <a href="#" class="aj">บุคลากร</a>
        </div>
        </div>
    </div>

    {{-- nav-menu --}}
    <div class="nav-menu">
        <div class="nm-container">
            <ul class="menu">
                <li><a href="{{route('indexAdmin')}}"><i class="fas fa-home"></i>หน้าแรก</a></li>
                <li><a href="#"><i class="fas fa-info-circle"></i>เกี่ยวกับภาควิชา</a>
                    <ul class="menu-sub">
                        <li><a href="{{route('news_Admin')}}">ข่าวสารประชาสัมพันธ์</a></li>
                        <li><a href="{{route('aboutDepartment_Admin')}}">ประวัติความเป็นมา</a></li>
                        <li><a href="{{route('mission_Admin')}}">พันธกิจ/วิสัยทัศน์</a></li>
                    </ul>
                </li>
                <li><a href="#"><i class="fas fa-book"></i>กิจกรรมภาควิชา</a>
                    <ul class="menu-sub">
                        <li><a href="#">วิดีโอเกี่ยวกับภาควิชา</a></li>
                        <li><a href="#">กิจกรรม/รูปภาพ</a></li>
                    </ul></li>
                <li><a href="{{route('personal')}}"><i class="fas fa-users"></i>บุคลากร</a>
                    <ul class="menu-sub">
                        <li><a href="{{route('personal_Admin')}}">บุคลากร</a></li>
                        <li><a href="#">โครงสร้างองค์กร</a></li>
                    </ul></li>
                <li><a href="#"><i class="fas fa-address-book"></i>หลักสูตร</a>
                    <ul class="menu-sub">
                        <li><a href="#">อุตสาหกรรมบัณฑิต</a></li>
                        <li><a href="#">วิศวกรรมบัณฑิต</a></li>
                        <li><a href="#">วิศวกรรมมหาบัณฑิต</a></li>
                    </ul></li>
                <li><a href="#"><i class="fas fa-bookmark"></i>ปริญญานิพนธ์</a>
                    <ul class="menu-sub">
                        <li><a href="#">ข่าวสารปริญญานิพนธ์</a></li>
                        <li><a href="#">ขั้นตอนการจัดทำปริญญานิพนธ์</a></li>
                        <li><a href="#">ค้นหาปริญญานิพนธ์</a></li>
                        <li><a href="#">จัดการข้อมูลปริญญานิพนธ์</a></li>
                        <li><a href="#">จัดการไฟล์ปริญญานิพนธ์</a></li>
                    </ul></li>
                <li><a href="#"><i class="fas fa-award"></i>สหกิจศึกษา</a>
                    <ul class="menu-sub">
                        <li><a href="#">ขั้นตอนการดำเนินการ</a></li>
                        <li><a href="#">ค้นหาโครงการสหกิจ</a></li>
                        <li><a href="#">จัดการข้อมูลสหกิจศึกษา</a></li>
                        <li><a href="#">จัดการข้อมูลสหกิจศึกษา</a></li>
                    </ul></li>
                <li><a href="#"><i class="fas fa-briefcase"></i>ระบบคุรุภัณฑ์</a></li>
                <li><a href="#"><i class="fas fa-phone-alt"></i>ติดต่อ</a>
                    <ul class="menu-sub">
                        <li><a href="#">ที่อยู่ภาควิชา</a></li>
                        <li><a href="#">ส่งข้อความถึงเรา</a></li>
                        <li><a href="#">แผนที่ภาควิชา</a></li>
                    </ul></li>
                </ul>
        </div>
    </div>
    
    {{-- Navbar Responsive --}}
    <div class="navbarResponsive">
        <div class="nbr-left">
            <img src="{{asset('img/logo.png')}}" alt="">
            <div class="nbr-title">
                <p>ภาควิชาเทคโนโลยีวิศวกรรมไฟฟ้า</p>
                <p>วิทยาลัยเทคโนโลยีอุตสาหกรรม</p>
            </div>
        </div>
        <div class="nbr-right">
            <div class="nav-btn">
                <label for="nav-check">
                  <span></span>
                  <span></span>
                  <span></span>
                </label>
            </div>
        </div>
    </div>















    {{-- menu before click hamberger --}}
    <div class="nbr-link">
        <li>
            <a id="link-1" class="link-main"><i class="fas fa-sign-in-alt"></i>เข้าสู่ระบบ</a>
            <div id="link-sub-1" class="link-sub">
                <a href="{{ route('login') }}">นักศึกษา</a>
                <a href="{{ route('indexAdmin')}} ">บุคลากร</a>
                <a href="{{ route('register') }}">สมัครสมาชิก</a>
            </div>
        </li>

        <li>
            <a id="link-2" class="link-main" href="{{route('index')}}"><i class="fas fa-home"></i>หน้าแรก</a>
        </li>

        <li>
            <a id="link-3" class="link-main"><i class="fas fa-info-circle"></i>เกี่ยวกับภาควิชา</a>
            <div id="link-sub-3" class="link-sub">
                <a href="{{route('news_Admin')}}">ข่าวสารประชาสัมพันธ์</a>
                <a href="{{route('aboutDepartment_Admin')}}">ประวัติความเป็นมา</a>
                <a href="{{route('mission_Admin')}}">พันธกิจ/วิสัยทัศน์</a>
            </div>
        </li>

        <li>
            <a id="link-4" class="link-main"><i class="fas fa-book"></i>กิจกรรมภาควิชา</a>
            <div id="link-sub-4" class="link-sub">
                <a href="#">วิดีโอเกี่ยวกับภาควิชา</a>
                <a href="#">กิจกรรม/รูปภาพ</a>
            </div>
        </li>

        <li>
            <a id="link-5" class="link-main" href="{{route('personal')}}"><i class="fas fa-users"></i>บุคลากร</a>
            <div id="link-sub-5" class="link-sub">
                <a href="{{route('personal')}}">บุคลากร</a>
                <a href="#">โครงสร้างองค์กร</a>
            </div>
        </li>

        <li>
            <a id="link-6" class="link-main"><i class="fas fa-address-book"></i>หลักสูตร</a>
            <div id="link-sub-6" class="link-sub">
                <a href="#">อุตสาหกรรมบัณฑิต</a>
                <a href="#">วิศวกรรมบัณฑิต</a>
            </div>
        </li>

        <li>
            <a id="link-7" class="link-main"><i class="fas fa-bookmark"></i>ปริญญานิพนธ์</a>
            <div id="link-sub-7" class="link-sub">
                <a href="#">ข่าวสารปริญญานิพนธ์</a>
                <a href="#">ขั้นตอนการจัดทำปริญญานิพนธ์</a>
                <a href="#">ค้นหาปริญญานิพนธ์</a>
                <a href="#">จัดการข้อมูลปริญญานิพนธ์</a>
                <a href="#">จัดการไฟล์ปริญญานิพนธ์</a>
            </div>
        </li>

        <li>
            <a id="link-8" class="link-main"><i class="fas fa-award"></i>สหกิจศึกษา</a>
            <div id="link-sub-8" class="link-sub">
                <a href="#">ขั้นตอนการดำเนินการ</a>
                <a href="#">ค้นหาโครงการสหกิจ</a>
                <a href="#">จัดการข้อมูลสหกิจศึกษา</a>
                <a href="#">จัดการข้อมูลสหกิจศึกษา</a>
            </div>
        </li>

        <li>
            <a id="link-9" class="link-main"><i class="fas fa-briefcase"></i>ระบบคุรุภัณฑ์</a>
            <div id="link-sub-9" class="link-sub">
                <a href="#">Post</a>
                <a href="#">Picture</a>
            </div>
        </li>

        <li>
            <a id="link-10" class="link-main"><i class="fas fa-phone-alt"></i>ติดต่อ</a>
            <div id="link-sub-10" class="link-sub">
                <a href="#">ที่อยู่ภาควิชา</a>
                <a href="#">ส่งข้อความถึงเรา</a>
                <a href="#">แผนที่ภาควิชา</a>
            </div>
        </li>
    </div>

    @yield('content')

















    <footer>
        <div class="footer-container">
          <div class="footer-detail">
            <p>จำนวนการเยี่ยมชมเว็บไซต์ 100</p>
          </div> <!-- end footer detail -->
          
          <div class="footer-ul">
            <ul>
                <li><h4>ติดต่อ</h4></li>
                <div class="footer-main">
                    <div class="fm-left">
                        <i class="fas fa-building"></i>
                    </div>
                    <div class="admin-manageFooter">
                        <a href="#" class="btn-footer">แก้ไข</a>
                        <a href="#" class="btn-footer">แก้ไข</a>
                        <a href="#" class="btn-footer">แก้ไข</a>
                    </div>
                    <div class="fm-right">
                        <p>ตึก 63 ชั้น 2</p>
                        <p>ภาควิชาเทคโนโลยีวิศวกรรมไฟฟ้า</p>
                        <p>วิทยาลัยเทคโนโลยีอุตสาหกรรม</p>
                    </div>
                </div>
                <div class="footer-main">
                    <div class="fm-left">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <div class="admin-manageFooter">
                        <a href="#" class="btn-footer">แก้ไข</a>
                    </div>
                    <div class="fm-right">
                        <p>โทรศัพท์ : 01-2345-678</p>
                    </div>
                </div>
                <div class="footer-main">
                    <div class="fm-left">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="admin-manageFooter">
                        <a href="#" class="btn-footer">แก้ไข</a>
                    </div>
                    <div class="fm-right">
                        <p>อีเมล : example@kmutnb.ac.th</p>
                    </div>
                </div>
            </ul>
            
            <ul>
              <li><h4>เยี่ยมชมเว็บไซต์อื่น ๆ</h4></li>
              <li><a href="#">มหาวิทยาลัยเทคโนโลยีพระจอมเกล้าพระนครเหนือ</a></li>
              <li><a href="#">วิทยาลัยเทคโนโลยีอุตสาหกรรม</a></li>
            </ul>
          </div>
        </div>

      </footer>


</body>

</html>
