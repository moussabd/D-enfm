  <!-- header-start -->
  <header>
    <div class="header-area ">
        <div class="header-top_area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header_top_wrap d-flex justify-content-between align-items-center">
                            <div class="text_wrap">
                                <p><span>+221 338 32 14 98/+221 338 32 38 23</span>       <span>enfmsn@yahoo.fr       Dakar BP 1225</span></p>
                            </div>
                            <div class="text_wrap">
                                <p><a href="{{route('login')}}"> <i class="ti-user"></i>  </a> <a href="#"> </a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="sticky-header" class="main-header-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header_wrap d-flex justify-content-between align-items-center">
                            <div class="header_left">
                                <div class="logo">
                                    <a href="index.html">
                                        <img src="img/logo.png" alt="">
                                    </a>
                                </div>
                            </div>

                                <div class="slider_text ">
                                    <h3>Ecole Nationale De Formation Maritime(ENFM)</h3>
                                </div>

                            <div class="header_right d-flex align-items-center">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="{{route('accueil')}}"> Acceuil</a></li>
                                            <li><a href="{{route('formation')}}">Mes Formations</a></li>
                                            <!--
                                            <li><a href="#">blog <i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <li><a href="blog.html">blog</a></li>
                                                    <li><a href="single-blog.html">single-blog</a></li>
                                                </ul>
                                            </li>
                                            -->

                                            <li><a href="#">Informations<i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <li><a href="{{route('concours')}}">Concours</a></li>
                                                    <li><a href="{{route('galerie')}}">Gallerie</a></li>
                                                    <!--
                                                    <li><a href="Admissions.html">Admissions</a></li>
                                                    <li><a href="elements.html">elements</a></li>
                                                    -->
                                                </ul>
                                            </li>
                                            <li><a href="{{route('contact')}}">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <!--
                                <div class="Appointment">
                                    <div class="book_btn d-none d-lg-block">
                                        <a data-scroll-nav='1' href="#">Valider</a>
                                    </div>
                                </div>
                            -->
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header-end -->
