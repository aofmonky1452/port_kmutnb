<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'TODO LIST') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/imageSlideShow.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


</head>

<body>
    {{-- nav --}}
    <div class="nav">
        <div class="nav-container">
        <div class="nav-left">
            <a href="{{route('index')}}">
            <img src="https://www.kmutnb.ac.th/KMUTNB/media/kmutnb/images/kmutnb_index_Logo.png" alt="" />
            </a>
            <div class="nl-title">
            <h2><a href="{{route('index')}}">ภาควิชาเทคโนโลยีวิศวกรรมไฟฟ้า</a></h2>
            <h4><a href="{{route('index')}}">มหาวิทยาลัยเทคโนโลยีพระจอมเกล้าพระนครเหนือ</a></h4>
            </div>
        </div>
        <div class="nav-right">
            <a href="#"><i class="fas fa-user"></i>เข้าสู่ระบบ</a>
            <a href="#" class="aj">บุคลากร</a>
        </div>
        </div>
    </div>

    {{-- nav-menu --}}
    <div class="nav-menu">
        <div class="nm-container">
            <ul class="menu">
                <li><a href="{{route('index')}}"><i class="fas fa-home"></i>หน้าแรก</a></li>
                <li><a href="#"><i class="fas fa-info-circle"></i>เกี่ยวกับภาควิชา</a>
                    <ul class="menu-sub">
                        <li><a href="#">ข้อมูลเกี่ยวกับภาควิชา</a></li>
                        <li><a href="#">ประวัติภาควิชา</a></li>
                        <li><a href="#">แผนที่การเดินทาง</a></li>
                        <li><a href="#">ปฏิทินการศึกษา</a></li>
                        <li><a href="#">ประกาศเกียรติคุณ</a></li>
                    </ul>
                </li>
                <li><a href="#"><i class="fas fa-book"></i>กิจกรรมภาควิชา</a></li>
                <li><a href="#"><i class="fas fa-users"></i>บุคลากร</a></li>
                <li><a href="#"><i class="fas fa-address-book"></i>หลักสูตร</a></li>
                <li><a href="#"><i class="fas fa-bookmark"></i>ปริญญานิพนธ์</a></li>
                <li><a href="#"><i class="fas fa-award"></i>สหกิจศึกษา</a></li>
                <li><a href="#"><i class="fas fa-briefcase"></i>ระบบคุรุภัณฑ์</a></li>
                <li><a href="#"><i class="fas fa-phone-alt"></i>ติดต่อ</a></li>
                </ul>
        </div>
    </div>
    
    @yield('content')

    <footer>
        <div class="footer-main">
          <div class="footer-detail">
            <p>ภาควิชาเทคโนโลยีวิศวกรรมไฟฟ้า</p>
            <p>วิทยาลัยเทคโนโลยีอุตสาหกรรม มหาวิทยาลัยเทคโนโลยีพระจอมเกล้าพระนครเหนือ</p>
          </div> <!-- end footer detail -->
          
          <div class="footer-welcome">
            <i class="fas fa-book"></i>
            <i class="fas fa-chevron-right"></i>
            <p>รายละเอียด</p>
          </div> <!-- end footer-welcome -->
          
          <div class="footer-ul">
            <ul>
                <li><h4>ติดต่อ</h4></li>
                <div class="footer-main">
                    <div class="fm-left">
                        <i class="fas fa-building"></i>
                    </div>
                    <div class="fm-right">
                        <p>ภาควิชาคอมพิวเตอร์ศึกษา</p>
                        <p>ชั้น2 คณะครุศาสตร์อุตสาหกรรม</p>
                        <p>มหาวิทยาลัยเทคโนโลยีพระจอมเกล้าพระนครเหนือ</p>
                    </div>
                </div>
                <div class="footer-main">
                    <div class="fm-left">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <div class="fm-right">
                        <p>โทรศัพท์ : 01-2345-678</p>
                    </div>
                </div>
                <div class="footer-main">
                    <div class="fm-left">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="fm-right">
                        <p>อีเมล : example@kmutnb.ac.th</p>
                    </div>
                </div>
            </ul>
            
            <ul>
              <li><h4>เกี่ยวกับภาควิชา</h4></li>
              <li><a href="#">Apple Store App</a></li>
              <li><a href="#">Financing</a></li>
              <li><a href="#">Order Status</a></li>
              <li><a href="#">Shopping Help</a></li>
            </ul>
            
            <ul>
              <li><h4>For Education</h4></li>
              <li><a href="#">Apple and Education</a></li>
              <li><a href="#">Shop for College</a></li>
            </ul>
            
            <ul>
              <li><h4>Account</h4></li>
              <li><a href="#">Manage Your Apple ID</a></li>
              <li><a href="#">Apple Store Account</a></li>
              <li><a href="#">iClound.com</a></li>
            </ul>
            
            <ul>
              <li><h4>About Apple</h4></li>
              <li><a href="#">Newsroom</a></li>
              <li><a href="#">Investors</a></li>
              <li><a href="#">Events</a></li>
              <li><a href="#">Contact Apple</a></li>
            </ul>
          </div>
        </div>
      </footer>


</body>

</html>
