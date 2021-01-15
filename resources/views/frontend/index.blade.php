@extends('constra_template.master')

@section('content')
    <!-- Carousel -->
<div id="main-slide" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ol class="carousel-indicators visible-lg visible-md">
        <li data-target="#main-slide" data-slide-to="0" class="active"></li>
        <li data-target="#main-slide" data-slide-to="1"></li>
        <li data-target="#main-slide" data-slide-to="2"></li>
    </ol>
    <!--/ Indicators end-->

    <!-- Carousel inner -->
    <div class="carousel-inner">

    <div class="item active" style="background-image:url({{asset('constra/images/slider-main/lima.jpg')}})">
            <div class="slider-content">
                <div class="col-md-12 text-center" style="margin-top: 210px;">
                    <h3 class="slide-sub-title animated5 ">Desa tompobulu berintegritas </h3>
                </div>
            </div>
        </div>
        <!--/ Carousel item 1 end -->

        <div class="item" style="background-image:url({{asset('constra/images/slider-main/dua.jpg')}})">
            <div class="slider-content">
                <div class=" col-md-12 text-center" style="margin-top: 210px;">
                    <h3 class="slide-sub-title animated5 ">menuju desa modern </h3>
                </div>
            </div>
        </div>
        <!--/ Carousel item 2 end -->

        <div class="item" style="background-image:url({{asset('constra/images/slider-main/text.jpg')}})">
            <div class="slider-content ">
                <div class="col-md-12 text-center" style="margin-top: 210px;">
                    <h3 class="slide-sub-title animated7">dengan sistem digital</h3>
                </div>
            </div>
        </div>
        <!--/ Carousel item 3 end -->

    </div><!-- Carousel inner end-->

    <!-- Controllers -->
    <a class="left carousel-control" href="#main-slide" data-slide="prev">
        <span><i class="fa fa-angle-left"></i></span>
    </a>
    <a class="right carousel-control" href="#main-slide" data-slide="next">
        <span><i class="fa fa-angle-right"></i></span>
    </a>
</div>
<!--/ Carousel end -->

<section class="call-to-action-box no-padding">
    <div class="container">
        <div class="action-style-box">
            <div class="row">
                <div class="col-md-10">
                    <div class="call-to-action-text">
                        <h3 class="action-title">Memberikan Pelayanan yang terbaik Kepada Warga Desa Tompobulu
                        </h3>
                    </div>
                </div><!-- Col end -->
            </div><!-- row end -->
        </div><!-- Action style box -->
    </div><!-- Container end -->
</section><!-- Action end -->

<section id="ts-features" class="ts-features">
    <div class="container">
    </div><!-- Container end -->
</section><!-- Feature are end -->

<section id="facts" class="facts-area dark-bg">
    <div class="container">
        <div class="row">
            <div class="facts-wrapper">
                <div class="col-sm-3 ts-facts">
                    <div class="ts-facts-img">
                        <img src="{{asset('constra/images/icon-image/fact1.png')}}" alt="" />
                    </div>
                    <div class="ts-facts-content">
                    <h2 class="ts-facts-num"><span class="counterUp" data-count="{{$jumlahkk}}">0</span></h2>
                        <h3 class="ts-facts-title">Kepala keluarga</h3>
                    </div>
                </div><!-- Col end -->

                <div class="col-sm-3 ts-facts">
                    <div class="ts-facts-img">
                        <img src="{{asset('constra/images/icon-image/satu.png')}}" alt="" style="width: 60px; height: 60px;">
                    </div>
                    <div class="ts-facts-content">
                    <h2 class="ts-facts-num"><span class="counterUp" data-count="{{$jmlpenduduk}}">0</span></h2>
                        <h3 class="ts-facts-title">Masyarakat</h3>
                    </div>
                </div><!-- Col end -->

                <div class="col-sm-3 ts-facts">
                    <div class="ts-facts-img">
                        <img src="{{asset('constra/images/icon-image/dua.png')}}" alt="" />
                    </div>
                    <div class="ts-facts-content">
                    <h2 class="ts-facts-num"><span class="counterUp" data-count="{{$perempuan}}">0</span></h2>
                        <h3 class="ts-facts-title">Perempuan</h3>
                    </div>
                </div><!-- Col end -->

                <div class="col-sm-3 ts-facts">
                    <div class="ts-facts-img">
                        <img src="{{asset('constra/images/icon-image/tiga.png')}}" alt="" />
                    </div>
                    <div class="ts-facts-content">
                    <h2 class="ts-facts-num"><span class="counterUp" data-count="{{$laki}}">0</span></h2>
                        <h3 class="ts-facts-title">laki-laki</h3>
                    </div>
                </div><!-- Col end -->
            </div> <!-- Facts end -->
        </div>
        <!--/ Content row end -->
    </div>
    <!--/ Container end -->
</section><!-- Facts end -->
 

<section id="ts-service-area" class="ts-service-area">
    <div class="container">
        <div class="row text-center">
            <h3 class="section-sub-title">profil kepala desa</h3>
            <h2 class="section-title"></h2>
        </div>
        <!--/ Title row end -->

        <div class="row">
            <div class="col-md-4">
                <div class="ts-service-box">
                    <div class="ts-service-box-info">
                        <h3 class="service-box-title"><a href="#">Nama</a></h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Integer adipiscing erat</p>
                    </div>
                </div><!-- Service 1 end -->

                <div class="ts-service-box">
                    <div class="ts-service-box-info">
                        <h3 class="service-box-title"><a href="#">Tanggal Lahir</a></h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Integer adipiscing erat</p>
                    </div>
                </div><!-- Service 2 end -->

                <div class="ts-service-box">
                    <div class="ts-service-box-info">
                        <h3 class="service-box-title"><a href="#">Alamat</a></h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Integer adipiscing erat</p>
                    </div>
                </div><!-- Service 3 end -->

            </div><!-- Col end -->

            <div class="col-md-4 text-center">
            <img class="service-center-img img-responsive" src="{{asset('constra/images/services/service-center.jpg')}}" alt="" />
            </div><!-- Col end -->

            <div class="col-md-4">
                <div class="ts-service-box">
                    <div class="ts-service-box-info">
                        <h3 class="service-box-title"><a href="#">Pencapaian</a></h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Integer adipiscing erat</p>
                    </div>
                </div><!-- Service 4 end -->

                <div class="ts-service-box">
                    <div class="ts-service-box-info">
                        <h3 class="service-box-title"><a href="#">Harapan</a></h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Integer adipiscing erat</p>
                    </div>
                </div><!-- Service 5 end -->

                <div class="ts-service-box">
                    <div class="ts-service-box-info">
                        <h3 class="service-box-title"><a href="#"></a>Masa jabatan</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Integer adipiscing erat</p>
                    </div>
                </div><!-- Service 6 end -->
            </div><!-- Col end -->
        </div><!-- Content row end -->
    </div>
    <!--/ Container end -->
</section><!-- Service end -->


<section id="news" class="news">
    <div class="container">
        <div class="row text-center">
            <h3 class="section-sub-title">Baca Berita terbaru</h3>
        </div>
        <!--/ Title row end -->
        <div class="row">
            @foreach ($berita as $beritas)
            <div class="col-md-4 col-xs-12 ">
                <div class="latest-post">
                    <div class="latest-post-media">
                        <a href="#" class="latest-post-img">
                            <img class="img-responsive" src="{{asset('storage/' . $beritas->gambar)}}" height="1000px" alt="img">
                        </a>
                    </div>
                    <div class="post-body">
                        <h4 class="post-title">
                        <a href="{{route('berita_detail',$beritas->slug)}}">{{$beritas->judul}}</a>
                        </h4>
                        <div class="post-meta">
                            <span class="post-author">
                            <i class="fa fa-user"></i><a href="#">{{$beritas->user->level}}</a>
                             </span>
                            <span class="post-item-date">
                                <i class="fa fa-clock-o"></i> {{\Carbon\Carbon::parse($beritas['created_at'])->isoFormat('D MMMM, Y')}}
                            </span>
                        </div>
                    </div>
                </div><!-- Latest post end -->
            </div><!-- 3rd post col end -->
        @endforeach
        </div>
        <!--/ Content row end -->

        <div class="general-btn text-center">
            {{$berita->links()}}
        </div>

    </div>
    <!--/ Container end -->
</section>

@endsection

@push('styles')
    	<!-- Animation -->
	<link rel="stylesheet" href="{{asset('constra/css/animate.css')}}">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="{{asset('constra/css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('constra/css/owl.theme.default.min.css')}}">		
@endpush

@push('script')
<!-- Owl Carousel -->
<script type="text/javascript" src="{{asset('constra/js/owl.carousel.min.js')}}"></script>
@endpush

