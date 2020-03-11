@extends('layouts.app')

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


<!-- Container Body -->
<div class="main-container">
    <div class="card-news">
        <div class="card-container">
            <a href="#" class="a-topic">ข่าวประชาสัมพันธ์</a>
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
                        <a class="btn-readmore" href="#">อ่านต่อ</a>
                    </div>
                </div>

                <div class="card-news-info">
                    <div class="card-news-top">
                        <img src="https://images.unsplash.com/photo-1504711434969-e33886168f5c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" alt="">
                    </div>
                    <div class="card-news-bottom">
                        <a href="#">2.รับสมัครบุคลากรเข้าศึกษาต่อ</a>
                        <span>Lorem ipsum dolor sit amet conseum dolor sit amet consectetur adipisicing elit. Eum, itaque!</span>
                        <a class="btn-readmore" href="#">อ่านต่อ</a>
                    </div>
                </div>

                <div class="card-news-info">
                    <div class="card-news-top">
                        <img src="https://images.unsplash.com/photo-1504711434969-e33886168f5c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" alt="">
                    </div>
                    <div class="card-news-bottom">
                        <a href="#">3.รับสมัครบุคลากรเข้าศึกษาต่อ</a>
                        <span>Lorem ipsum dolor sit amet conseum dolor sit amet consectetur adipisicing elit. Eum, itaque!</span>
                        <a class="btn-readmore" href="#">อ่านต่อ</a>
                    </div>
                </div>

                <div class="card-news-info">
                    <div class="card-news-top">
                        <img src="https://images.unsplash.com/photo-1504711434969-e33886168f5c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" alt="">
                    </div>
                    <div class="card-news-bottom">
                        <a href="#">4.รับสมัครบุคลากรเข้าศึกษาต่อ</a>
                        <span>Lorem ipsum dolor sit amet conseum dolor sit amet consectetur adipisicing elit. Eum, itaque!</span>
                        <a class="btn-readmore" href="#">อ่านต่อ</a>
                    </div>
                </div>

                <div class="card-news-info">
                    <div class="card-news-top">
                        <img src="https://images.unsplash.com/photo-1504711434969-e33886168f5c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" alt="">
                    </div>
                    <div class="card-news-bottom">
                        <a href="#">5.รับสมัครบุคลากรเข้าศึกษาต่อ</a>
                        <span>Lorem ipsum dolor sit amet conseum dolor sit amet consectetur adipisicing elit. Eum, itaque!</span>
                        <a class="btn-readmore" href="#">อ่านต่อ</a>
                    </div>
                </div>

                <div class="card-news-info">
                    <div class="card-news-top">
                        <img src="https://images.unsplash.com/photo-1504711434969-e33886168f5c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" alt="">
                    </div>
                    <div class="card-news-bottom">
                        <a href="#">6.รับสมัครบุคลากรเข้าศึกษาต่อ</a>
                        <span>Lorem ipsum dolor sit amet conseum dolor sit amet consectetur adipisicing elit. Eum, itaque!</span>
                        <a class="btn-readmore" href="#">อ่านต่อ</a>
                    </div>
                </div>

                <div class="card-news-info">
                    <div class="card-news-top">
                        <img src="https://images.unsplash.com/photo-1504711434969-e33886168f5c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" alt="">
                    </div>
                    <div class="card-news-bottom">
                        <a href="#">7.รับสมัครบุคลากรเข้าศึกษาต่อ</a>
                        <span>Lorem ipsum dolor sit amet conseum dolor sit amet consectetur adipisicing elit. Eum, itaque!</span>
                        <a class="btn-readmore" href="#">อ่านต่อ</a>
                    </div>
                </div>

                <div class="card-news-info">
                    <div class="card-news-top">
                        <img src="https://images.unsplash.com/photo-1504711434969-e33886168f5c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" alt="">
                    </div>
                    <div class="card-news-bottom">
                        <a href="#">8.รับสมัครบุคลากรเข้าศึกษาต่อ</a>
                        <span>Lorem ipsum dolor sit amet conseum dolor sit amet consectetur adipisicing elit. Eum, itaque!</span>
                        <a class="btn-readmore" href="#">อ่านต่อ</a>
                    </div>
                </div>
                <div class="card-news-info">
                    <div class="card-news-top">
                        <img src="https://images.unsplash.com/photo-1504711434969-e33886168f5c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" alt="">
                    </div>
                    <div class="card-news-bottom">
                        <a href="#">9.รับสมัครบุคลากรเข้าศึกษาต่อ</a>
                        <span>Lorem ipsum dolor sit amet conseum dolor sit amet consectetur adipisicing elit. Eum, itaque!</span>
                        <a class="btn-readmore" href="#">อ่านต่อ</a>
                    </div>
                </div>
                <div class="card-news-info">
                    <div class="card-news-top">
                        <img src="https://images.unsplash.com/photo-1504711434969-e33886168f5c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" alt="">
                    </div>
                    <div class="card-news-bottom">
                        <a href="#">10.รับสมัครบุคลากรเข้าศึกษาต่อ</a>
                        <span>Lorem ipsum dolor sit amet conseum dolor sit amet consectetur adipisicing elit. Eum, itaque!</span>
                        <a class="btn-readmore" href="#">อ่านต่อ</a>
                    </div>
                </div>
            </div> <!-- end row -->
        </div> <!-- card container -->
        <a href="#" class="btn-readall">
            อ่านข่าวทั้งหมด    
        </a>  
    </div> <!-- card news -->
</div>


@endsection
