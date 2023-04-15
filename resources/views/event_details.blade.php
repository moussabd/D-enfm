@include('composant.head')
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

@include('composant.navbar')
    <!-- bradcam_area_start  -->
    <div class="bradcam_area breadcam_bg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3>Nos Photos Et Videos</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bradcam_area_end  -->

    <!--<div class="event_details_area section__padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="single_event d-flex align-items-center">
                        <div class="thumb">
                            <img src="img/event/1.png" alt="">
                            <div class="date text-center">
                                <h4>02</h4>
                                <span>Dec, 2020</span>
                            </div>
                        </div>
                        <div class="event_details_info">
                            <div class="event_info">
                                <a href="#">
                                    <h4>How to speake like a nativespeaker?</h4>
                                 </a>
                                <p><span> <i class="flaticon-clock"></i> 10:30 pm</span> <span> <i class="flaticon-calendar"></i> 21 Nov 2020 </span> <span> <i class="flaticon-placeholder"></i> AH Oditoriam</span> </p>
                            </div>
                            <p class="event_info_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In rhoncus augue nibh, at ullamcorper orci ullamcorper ut. Integer vehicula iaculis risus, non consequat eros tincidunt ac. Morbi a aliquam tortor. Nam convallis vestibulum nisi, sit amet fermentum libero scelerisque id. Integer iaculis mollis justo, sed interdum ligula auctor in. Donec a vehicula nisi. Fusce quis mollis sem. Nam velit dolor, ultricies non mollis vel, sagittis sed leo. Morbi lorem justo, porta eu odio a, tincidunt pretium dui. In ac fringilla arcu.
                            </p>
                            <a href="#" class="boxed-btn3">Book a seat</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
    <div class="recent_news_area section__padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <div class="section_title text-center mb-70">
                        <h3 class="mb-45">NOS PHOTOS</h3>
                    </div>
                </div>
            </div>
            <html>
                <head>
                  <style>
                    .container {
                      display: flex;
                      flex-direction: column;
                      align-items: center;
                      margin-top: 20px;
                      margin-bottom: 20px;
                    }
                    .row {
                      display: flex;
                      justify-content: space-between;
                      width: 100%;
                    }
                    .item {
                      width: 24%;
                    }
                  </style>
                </head>
                <body>
                  <div class="container">
                    <div class="row">
                      <img src="{{asset('assets/img/img/1.png')}}" class="item">
                      <img src="{{asset('assets/img/img/2.png')}}" class="item">
                      <img src="{{asset('assets/img/img/3.png')}}" class="item">
                      <img src="{{asset('assets/img/img/4.png')}}" class="item">
                    </div>
                  </div>
                  <div class="container">
                    <div class="row">
                      <img src="{{asset('assets/img/img/5.png')}}" class="item">
                      <img src="{{asset('assets/img/img/6.png')}}" class="item">
                      <img src="{{asset('assets/img/img/7.png')}}" class="item">
                      <img src="{{asset('assets/img/img/8.png')}}" class="item">
                      </div>
                  </div>
                  <div class="container">
                    <div class="row">
                        <img src="{{asset('assets/img/img/9.png')}}" class="item">
                        <img src="{{asset('assets/img/img/10.png')}}" class="item">
                        <img src="{{asset('assets/img/img/11.png')}}" class="item">
                        <img src="{{asset('assets/img/img/12.png')}}" class="item">
                      </div>
                  </div>
                  <div class="container">
                    <div class="row">
                        <img src="{{asset('assets/img/img/13.png')}}" class="item">
                        <img src="{{asset('assets/img/img/14.png')}}" class="item">
                        <img src="{{asset('assets/img/img/15.png')}}" class="item">
                        <img src="{{asset('assets/img/img/16.png')}}" class="item">
                      </div>
                  </div>
                  <div class="container">
                    <div class="row">
                        <img src="{{asset('assets/img/img/17.png')}}" class="item">
                        <img src="{{asset('assets/img/img/18.png')}}" class="item">
                        <img src="{{asset('assets/img/img/19.png')}}" class="item">
                        <img src="{{asset('assets/img/img/20.png')}}" class="item">
                      </div>
                  </div>
                  <div class="container">
                    <div class="row">
                        <img src="{{asset('assets/img/img/21.png')}}" class="item">
                        <img src="{{asset('assets/img/img/22.png')}}" class="item">
                        <img src="{{asset('assets/img/img/23.png')}}" class="item">
                        <img src="{{asset('assets/img/img/24.png')}}" class="item">
                      </div>
                  </div>
                  <div class="container">
                    <div class="row">
                        <img src="{{asset('assets/img/img/25.png')}}" class="item">
                        <img src="{{asset('assets/img/img/26.png')}}" class="item">
                        <img src="{{asset('assets/img/img/27.png')}}" class="item">
                        <img src="{{asset('assets/img/img/28.png')}}" class="item">
                      </div>
                  </div>
                  <div class="container">
                    <div class="row">
                        <img src="{{asset('assets/img/img/29.png')}}" class="item">
                        <img src="{{asset('assets/img/img/30.png')}}" class="item">
                        <img src="{{asset('assets/img/img/31.png')}}" class="item">
                        <img src="{{asset('assets/img/img/32.png')}}" class="item">
                      </div>
                  </div>
                 <div class="container">
                  <div class="row">
                    <img src="{{asset('assets/img/img/33.png')}}" class="item">
                    <img src="{{asset('assets/img/img/34.png')}}" class="item">
                    <img src="{{asset('assets/img/img/35.png')}}" class="item">
                    <img src="{{asset('assets/img/img/26.png')}}" class="item">
                  </div>
                </div>
                </body>
              </html>
      <div class="recent_news_area section__padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <div class="section_title text-center mb-70">
                        <h3 class="mb-45">NOS VIDEOS</h3>
                    </div>
                </div>
            </div>
            <html>
  <head>
    <style>
      .container {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin: 50px 0;
      }
      .videos {
        display: flex;
        justify-content: space-between;
        width: 100%;
      }
      .video {
        width: 24%;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="videos">
        <video controls class="video">
          <source src="{{asset('assets/img/img/1.mp4')}}" type="video/mp4">
        </video>
        <video controls class="video">
          <source src="{{asset('assets/img/img/2.mp4')}}" type="video/mp4">
        </video>
        <video controls class="video">
          <source src="{{asset('assets/img/img/3.mp4')}}" type="video/mp4">
        </video>
        <video controls class="video">
          <source src="{{asset('assets/img/img/4.mp4')}}" type="video/mp4">
        </video>
      </div>
      <div class="videos">
        <video controls class="video">
          <source src="{{asset('assets/img/img/5.mp4')}}" type="video/mp4">
        </video>
        <video controls class="video">
          <source src="{{asset('assets/img/img/6.mp4')}}" type="video/mp4">
        </video>
        <video controls class="video">
          <source src="{{asset('assets/img/img/7.mp4')}}" type="video/mp4">
        </video>
        <video controls class="video">
          <source src="{{asset('assets/img/img/8.mp4')}}" type="video/mp4">
        </video>
      </div>
      <div class="videos">
        <video controls class="video">
          <source src="{{asset('assets/img/img/9.mp4')}}" type="video/mp4">
        </video>
        <video controls class="video">
          <source src="{{asset('assets/img/img/10.mp4')}}" type="video/mp4">
        </video>
        <video controls class="video">
            <source src="{{asset('assets/img/img/3.mp4')}}" type="video/mp4">
        </video>
        <video controls class="video">
            <source src="{{asset('assets/img/img/5.mp4')}}" type="video/mp4">
        </video>
      </div>
    </div>
    @include("composant.footer")
