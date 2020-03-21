@extends('layouts.admin-app')

@section('content')

{{-- Slide Show --}}
<div class="slideContainer">
    <div class="slider">
        <div class="slide active" id='s1'><a href="https://google.com" target="_blank"><img src="{{asset('img/slide1.jpg')}}"></a></div>
        <div class="slide right" id='s2'><a href="https://google.com" target="_blank"><img src="{{asset('img/slide2.jpg')}}"></a></div>
        <div class="slide right" id='s3'><a href="https://google.com" target="_blank"><img src="{{asset('img/slide3.jpg')}}"></a></div>
        <div class="slide right" id='s4'><a href="https://google.com" target="_blank"><img src="{{asset('img/slide1.jpg')}}"></a></div>
        <div class="slide right" id='s5'><a href="https://google.com" target="_blank"><img src="{{asset('img/slide3.jpg')}}"></a></div>
        <div class="slide right" id='s6'><a href="https://google.com" target="_blank"><img src="{{asset('img/slide1.jpg')}}"></a></div>
    </div>

    <div class="prev"><i class="fa fa-chevron-left fa-2x"></i></div>
    <div class="next"><i class="fa fa-chevron-right fa-2x"></i></div>

    <div class="bols">
        <span data-get="#s1" class="clicked"></span>
        <span data-get="#s2"></span>
        <span data-get="#s3"></span>
        <span data-get="#s4"></span>
        <span data-get="#s5"></span>
        <span data-get="#s6"></span>
    </div>
</div>

<div class="admin-changeImage">
    <a href="#" class="btn-changeImage">เปลี่ยนรูปภาพที่ 1</a>
    <a href="#" class="btn-changeImage">เปลี่ยนรูปภาพที่ 2</a>
    <a href="#" class="btn-changeImage">เปลี่ยนรูปภาพที่ 3</a>
    <a href="#" class="btn-changeImage">เปลี่ยนรูปภาพที่ 4</a>
    <a href="#" class="btn-changeImage">เปลี่ยนรูปภาพที่ 5</a>
    <a href="#" class="btn-changeImage">เปลี่ยนรูปภาพที่ 6</a>
</div>


<!-- Container Body -->
<div class="main-container">
    <div class="card-news">
        <div class="card-container-admin">
            <div class="admin-addNews">
                <a href="#" class="a-topic">ข่าวประชาสัมพันธ์</a>
                <a href="#" class="btn-addNews"><i class="fas fa-plus-circle"></i>เพิ่มข่าว</a>
            </div>
            <hr>
            <!-- ROW -->
            <div class="news-row">

                <div class="card-news-info">
                    <div class="card-news-top">
                        <img src="https://images.unsplash.com/photo-1504711434969-e33886168f5c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" alt="">
                    </div>
                    <div class="card-news-bottom">
                        <a href="#">1.รับสมัครบุคลากรเข้าศึกษาต่อ</a>
                        <span>Lorem ipsum dolor sit amet conseum dolor sit amet consectetur adipisicing elit. Eum, itaque!</span>
                        <div class="admin-manageNews">
                            <a href="#" class="btn-editNews">แก้ไข</a>
                            <a href="#" class="btn-readNews">อ่านข่าว</a>
                            <a href="#" class="btn-deleteNews">ลบ</a>
                        </div>
                    </div>
                </div>

                <div class="card-news-info">
                    <div class="card-news-top">
                        <img src="https://images.unsplash.com/photo-1504711434969-e33886168f5c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" alt="">
                    </div>
                    <div class="card-news-bottom">
                        <a href="#">2.รับสมัครบุคลากรเข้าศึกษาต่อ</a>
                        <span>Lorem ipsum dolor sit amet conseum dolor sit amet consectetur adipisicing elit. Eum, itaque!</span>
                        <div class="admin-manageNews">
                            <a href="#" class="btn-editNews">แก้ไข</a>
                            <a href="#" class="btn-readNews">อ่านข่าว</a>
                            <a href="#" class="btn-deleteNews">ลบ</a>
                        </div>
                    </div>
                </div>

                <div class="card-news-info">
                    <div class="card-news-top">
                        <img src="https://images.unsplash.com/photo-1504711434969-e33886168f5c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" alt="">
                    </div>
                    <div class="card-news-bottom">
                        <a href="#">3.รับสมัครบุคลากรเข้าศึกษาต่อ</a>
                        <span>Lorem ipsum dolor sit amet conseum dolor sit amet consectetur adipisicing elit. Eum, itaque!</span>
                        <div class="admin-manageNews">
                            <a href="#" class="btn-editNews">แก้ไข</a>
                            <a href="#" class="btn-readNews">อ่านข่าว</a>
                            <a href="#" class="btn-deleteNews">ลบ</a>
                        </div>
                    </div>
                </div>

                <div class="card-news-info">
                    <div class="card-news-top">
                        <img src="https://images.unsplash.com/photo-1504711434969-e33886168f5c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" alt="">
                    </div>
                    <div class="card-news-bottom">
                        <a href="#">4.รับสมัครบุคลากรเข้าศึกษาต่อ</a>
                        <span>Lorem ipsum dolor sit amet conseum dolor sit amet consectetur adipisicing elit. Eum, itaque!</span>
                        <div class="admin-manageNews">
                            <a href="#" class="btn-editNews">แก้ไข</a>
                            <a href="#" class="btn-readNews">อ่านข่าว</a>
                            <a href="#" class="btn-deleteNews">ลบ</a>
                        </div>
                    </div>
                </div>

                <div class="card-news-info">
                    <div class="card-news-top">
                        <img src="https://images.unsplash.com/photo-1504711434969-e33886168f5c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" alt="">
                    </div>
                    <div class="card-news-bottom">
                        <a href="#">5.รับสมัครบุคลากรเข้าศึกษาต่อ</a>
                        <span>Lorem ipsum dolor sit amet conseum dolor sit amet consectetur adipisicing elit. Eum, itaque!</span>
                        <div class="admin-manageNews">
                            <a href="#" class="btn-editNews">แก้ไข</a>
                            <a href="#" class="btn-readNews">อ่านข่าว</a>
                            <a href="#" class="btn-deleteNews">ลบ</a>
                        </div>
                    </div>
                </div>

                <div class="card-news-info">
                    <div class="card-news-top">
                        <img src="https://images.unsplash.com/photo-1504711434969-e33886168f5c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" alt="">
                    </div>
                    <div class="card-news-bottom">
                        <a href="#">6.รับสมัครบุคลากรเข้าศึกษาต่อ</a>
                        <span>Lorem ipsum dolor sit amet conseum dolor sit amet consectetur adipisicing elit. Eum, itaque!</span>
                        <div class="admin-manageNews">
                            <a href="#" class="btn-editNews">แก้ไข</a>
                            <a href="#" class="btn-readNews">อ่านข่าว</a>
                            <a href="#" class="btn-deleteNews">ลบ</a>
                        </div>
                    </div>
                </div>

                
            </div> <!-- end row -->
        </div> <!-- card container -->
        <a href="#" class="btn-readall">
            อ่านข่าวทั้งหมด    
        </a>  
    </div> <!-- card news -->

    <div class="information">
        <a class="card-info" href="https://cit.kmutnb.ac.th/main/%E0%B8%94%E0%B8%B2%E0%B8%A7%E0%B9%82%E0%B8%AB%E0%B8%A5%E0%B8%94" target="_blank">
            <i class="fas fa-file-word"></i>
            <p>ดาวน์โหลดเอกสาร</p>
        </a>
        <a class="card-info" href="http://cit.kmutnb.ac.th/examination/" target="_blank">
            <i class="fas fa-file-pdf"></i>
            <p href="#">คลังข้อสอบ</p>
        </a>
        <a class="card-info" href="https://grade.icit.kmutnb.ac.th/" target="_blank">
            <i class="fas fa-chalkboard-teacher"></i>
            <p href="#">ประเมินอาจารย์</p>
        </a>
        <a class="card-info" href="http://klogic.kmutnb.ac.th:8080/kris/index.jsp" target="_blank">
            <i class="fab fa-leanpub"></i>
            <p href="#">ลงทะเบียนเรียน</p>
        </a>
        <a class="card-info" href="http://acdserv.kmutnb.ac.th/academic-calendar" target="_blank">
            <i class="far fa-calendar-alt"></i>
            <p href="#">ปฏิทินการศึกษา</p>
        </a>
    </div>

</div> <!-- main container -->

@endsection
