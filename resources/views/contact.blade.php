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
                        <h3>Contact</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bradcam_area_end  -->

    <!-- ================ contact section start ================= -->
    <section class="contact-section">
            <div class="container">
                <div class="d-none d-sm-block mb-5 pb-4">
                    <div id="map" style="height: 480px; position: relative; overflow: hidden;"></div>
                    <script>
                        function initMap() {
                            var uluru = {
                                lat: 14.6919,
                                lng: -17.4474
                            };
                            var grayStyles = [{
                                    featureType: "all",
                                    stylers: [{
                                            saturation: -90
                                        },
                                        {
                                            lightness: 50
                                        }
                                    ]
                                },
                                {
                                    elementType: 'labels.text.fill',
                                    stylers: [{
                                        color: '#ccdee9'
                                    }]
                                }
                            ];
                            var map = new google.maps.Map(document.getElementById('map'), {
                                center: {

                                    lng: -17.437255359805235,
                                    lat:  14.690034527331726
                                },
                                zoom: 16,
                                styles: grayStyles,
                                scrollwheel: false
                            });
                        }
                    </script>
                    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpfS1oRGreGSBU5HHjMmQ3o5NLw7VdJ6I&amp;callback=initMap">
                    </script>

                </div>


                <div class="row">
                    <div class="col-12">
                        <h2 class="contact-title">Contactez-nous</h2>
                    </div>

                    <div class="col-lg-8">
                        <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder="Messege"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Entrer votre nom'" placeholder="Entrer votre nom">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Entrer votre  adresse email'" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Suggestion'" placeholder="Commentaires">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group mt-3">
                                <button type="submit" class="button button-contactForm boxed-btn">Envoyer</button>
                                </div>

                        </form>
                    </div>


                    <div class="col-lg-3 offset-lg-1">
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-home"></i></span>
                            <div class="media-body">
                                <h3>Km 4,5 Bd du Centenaire de la Commune BP. 1225 </h3>
                                <p>- DAKAR-</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                            <div class="media-body">
                                <h3>+221 338 32 38 23 / +221 338 32 14 98</h3>
                                <p>Lundi à Vendredi 8H à 18H</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-email"></i></span>
                            <div class="media-body">
                                <h3>enfmsn@yahoo.fr</h3>
                                <p>Envoyez-nous votre demande à tout moment!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- ================ contact section end ================= -->

    <!-- footer start -->
    @include("composant.footer")
