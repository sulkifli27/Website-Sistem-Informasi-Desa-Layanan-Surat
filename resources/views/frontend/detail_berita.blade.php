@extends('constra_template.master')

@section('content')
    
<div id="banner-area" class="banner-area" style="background-image:url({{asset('constra/images/banner/satu.jpg')}})">
    <div class="banner-text">
       <div class="container">
          <div class="row">
             <div class="col-xs-12">
                <div class="banner-heading">
                   <h1 class="banner-title">BERITA</h1>
                   <ol class="breadcrumb">
                      <li></li>
                   </ol>
                </div>
             </div><!-- Col end -->
          </div><!-- Row end -->
       </div><!-- Container end -->
    </div><!-- Banner text end -->
 </div><!-- Banner area end --> 

 <div class="coba">
 <section id="main-container" class="main-container" >
    <div class="container ">
       <div class="row" >
          <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 ">
             <div class="post-content post-single">
                <div class="post-media post-image image-angle">
                   <img  src="{{asset('storage/' . $berita->gambar)}}" class="img-responsive " alt="">
                </div>

                <div class="post-body">
                   <div class="entry-header">
                      <div class="post-meta">
                         <span class="post-author">
                            <i class="fa fa-user"></i><a href="#">{{$berita->user->level}}</a>
                         </span>
                         <span class="post-meta-date"><i class="fa fa-calendar"></i>{{\Carbon\Carbon::parse($berita['created_at'])->isoFormat('D MMMM, Y')}}</span>
                      </div>
                      <h2 class="entry-title">
                        {{$berita->judul}}
                      </h2>
                   </div><!-- header end -->

                   <div class="entry-content">
                      {!!$berita->content!!}
                   </div>        
                </div><!-- post-body end -->
             </div><!-- post content end -->
          </div><!-- Content Col end -->  
       </div><!-- Main row end -->
    </div><!-- Conatiner end -->
 </section>
</div>
@endsection

@push('script')
    <script type="text/javascript" src="{{asset('constra/js/owl.carousel.min.js')}}"></script>
@endpush