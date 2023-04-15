<footer class="footer">
    <div class="footer_top">
        <div class="container">
            <div class="newsLetter_wrap">
                <div class="row justify-content-between">
                    <div class="col-md-7">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Rester à jour
                            </h3>
                            <form method="POST" action="{{ route('emailSave') }}" enctype="multipart/form-data" class="newsletter_form">
                                @csrf
                                <input type="text" placeholder="Adresse Email" name="email">
                                <button type="submit">Valider</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-5">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Reseaux sociaux
                            </h3>
                            <div class="socail_links">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="ti-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-linkedin"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-md-6 col-lg-3">
                    <div class="footer_widget">
                        <h3 class="footer_title">
                            À Propos De Nous
                        </h3>
                        <ul>
                            <li><a href="#">Etudes</a></li>
                            <li><a href="#">Par rapport</a></li>
                            <li><a href="#">Carrières</a></li>
                            <li><a href="#">Devenir un instructeur</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-3">
                    <div class="footer_widget">
                        <h3 class="footer_title">
                            Campus
                        </h3>
                        <ul>
                            <li><a href="#">Nos plans</a></li>
                            <li><a href="#">Solutions académiques</a></li>
                            <li><a href="#">Solutions pour les entreprises</a></li>
                            <li><a href="#">Solutions pour le gouvernement</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-3">
                    <div class="footer_widget">
                        <h3 class="footer_title">
                            Étude
                        </h3>
                        <ul>
                            <li><a href="#">Politique d'admission</a></li>
                            <li><a href="#">Suivi Formation</a></li>
                            <li><a href="#">Calculateur de frais de scolarité</a></li>
                            <li><a href="#">Diplome de fin de formations</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-3">
                    <div class="footer_widget">
                        <h3 class="footer_title">
                            Support
                        </h3>
                        <ul>
                            <li><a href="#">Support</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Configuration requise</a></li>
                            <li><a href="#">Autres Informations</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copy-right_text">
        <div class="container">
            <div class="footer_border"></div>
            <div class="row">
                <div class="col-xl-12">
                    <p class="copy_right text-center">
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Tous droits réservés | Ce modèle est réalisé par Moussa Baidy DAFF 781321191 / moussabaidy2000@gmail.com<i class="ti-heart" aria-hidden="true"></i>    <a href="https://www.linkedin.com/in/moussa-baidy-daff-4224a7228/" target="_blank">linkedin</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer end  -->


<!-- JS here -->
<script src="{{asset('assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('assets/js/ajax-form.js')}}"></script>
<script src="{{asset('assets/js/waypoints.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('assets/js/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('assets/js/scrollIt.js')}}"></script>
<script src="{{asset('assets/js/jquery.scrollUp.min.js')}}"></script>
<script src="{{asset('assets/js/wow.min.js')}}"></script>
<script src="{{asset('assets/js/nice-select.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.slicknav.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('assets/js/plugins.js')}}"></script>
<script src="{{asset('assets/js/gijgo.min.js')}}"></script>

<!--contact js-->
<script src="{{asset('assets/js/contact.js')}}"></script>
<script src="{{asset('assets/js/jquery.ajaxchimp.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.form.js')}}"></script>
<script src="{{asset('assets/js/jquery.validate.min.js')}}"></script>
<script src="{{asset('assets/js/mail-script.js')}}"></script>

<script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>
