<div id="top-bar" class="top-bar">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                <ul class="top-info">
                    <li> &nbsp;&nbsp;&nbsp;<i class="fa fa-map-marker"> &nbsp;</i>
                        <p class="info-text text-center"><b>92654 Kab.Sinjai, Sulsel</b> </p>
                    </li>
                </ul>
            </div>
            <!--/ Top info end -->
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 top-social text-right">
                <ul class="unstyled">
                    <li>
                        <a title="Facebook" href="#">
                            <span class="social-icon"><i class="fa fa-facebook"></i></span>
                        </a>
                        <a title="Twitter" href="#">
                            <span class="social-icon"><i class="fa fa-whatsapp"></i></span>
                        </a>
                        <a title="Instagram" href="#">
                            <span class="social-icon"><i class="fa fa-instagram"></i></span>
                        </a>
                        <a title="Linkdin" href="#">
                            <span class="social-icon"><i class="fa fa-youtube"></i></span>
                        </a>
                    </li>
                </ul>
            </div>
            <!--/ Top social end -->
        </div>
        <!--/ Content row end -->
    </div>
    <!--/ Container end -->
</div>
<!-- Header start -->
<header id="header" class="header-one">
    <div class="container">
        <div class="row">
            <div class="logo-area clearfix">
                <div class="logo col-xs-12 col-md-3">
                    <a href="index.html">
                    <img src="{{asset('constra/images/logo.png')}}" alt=""
                            style="width:207px; margin-top: 2px; margin-right:18px;">
                    </a>
                </div><!-- logo end -->

                <div class="col-xs-12 col-md-9 header-right">
                    <ul class="top-info-box">
                        <li>
                            <div class="info-box">
                                <div class="info-box-content">
                                    <p class="info-box-title">No HP</p>
                                    <p class="info-box-subtitle">08235803445</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="info-box">
                                <div class="info-box-content">
                                    <p class="info-box-title">Email</p>
                                    <p class="info-box-subtitle">Desatompobulu@gmail.com</p>
                                </div>
                            </div>
                        </li>
                    </ul><!-- Ul end -->
                </div><!-- header right end -->
            </div><!-- logo area end -->
        </div><!-- Row end -->
    </div><!-- Container end -->

    <nav class="site-navigation navigation navdown">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="site-nav-inner pull-left">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <div class="collapse navbar-collapse navbar-responsive-collapse">
                            <ul class="nav navbar-nav">
                            <li><a href="{{route('indexuser')}}">Home</a></li>

                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Profil Desa <i
                                            class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Aparatur Desa</a></li>
                                        <li><a href="#">Visi Misi</a></li>
                                    </ul>
                                </li>

                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">potensi desa <i
                                            class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Parawisata</a></li>
                                        <li><a href="#">Pertanian</a></li>
                                        <li><a href="#">hutan</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">pelayanan <i
                                            class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{route('suratkmampu')}}">surat keterangan kurang mampu</a></li>
                                        <li><a href="{{route('suratusaha')}}">surat keterangan usaha</a></li>
                                    </ul>
                                </li>
                            <li><a href="{{route('kontak')}}">Kontak Kami</a></li>

                            </ul>
                            <!--/ Nav ul end -->
                        </div>
                        <!--/ Collapse end -->

                    </div><!-- Site Navbar inner end -->

                </div>
                <!--/ Col end -->
            </div>
            <!--/ Row end -->

            <div class="nav-search">
                <span id="search"><i class="fa fa-search"></i></span>
            </div><!-- Search end -->

            <div class="search-block" style="display: none;">
                <input type="text" class="form-control" placeholder="Type what you want and enter">
                <span class="search-close">&times;</span>
            </div><!-- Site search end -->
        </div>
        <!--/ Container end -->

    </nav>
    <!--/ Navigation end -->
</header>