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
                        <h3>Mes Formations</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bradcam_area_end  -->

    <!-- popular_program_area_start  -->
    <div class="popular_program_area section__padding program__page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text-center">
                        <h3>FORMATION INITIALE</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <nav class="custom_tabs text-center">
                        <div class="nav" id="nav-tab" role="tablist">
                           <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Brevet d'Etudes Professionnelles Maritimes/Polyvalent(Pont & Machine)</a>
                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Diplôme de Chef Mécanicien Puissance < 3000 KW</a>
                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Diplôme de Chef Mécanicien Puissance > 3О00 KW</a>
                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact2" role="tab" aria-controls="nav-contact" aria-selected="false">Diplôme de Capitaine Navire de JB < 3000 UMS </a>
                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Diplôme de Capitaine Navire de JB > 3000 UMS</a>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text-center">
                        <h3>FORMATION PERMANENTE: FILIERES TRADITIONNELLES</h3>
                    </div>
                </div>
            </div>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="single__program">
                                <div class="program_thumb">
                                    <img src="{{asset('assets/img/program/1-1.jpg')}}" alt="">
                                </div>
                                <div class="program__content">
                                    <span>PONT PECHE</span>
                                    <p>• Brevet de Capacitaire à la Navigation Maritime (BCNM)</p>
                                    <p>• Brevet de Lieutenant de Pêche</p>
                                    <p>• Brevet de Capitaine de Pêche</p>
                                    <a href="#" class="boxed-btn5">OK</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single__program">
                                <div class="program_thumb">
                                    <img src="{{asset('assets/="img/program/1-2.jpg')}}" alt="">
                                </div>
                                <div class="program__content">
                                    <span>PONT COMMERCE</span>
                                    <p>• Brevet de Capitaine à la Navigation Cotiere</p>
                                    <p>• Brevet Officier Chef de quart Passerelle JB > 3000 UMS</p>
                                    <p>• Brevet de Capitaine 3000 UMS</p>
                                    <a href="#" class="boxed-btn5">OK</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single__program">
                                <div class="program_thumb">
                                    <img src="{{asset('assets/="img/program/1-3.jpg')}}" alt="">
                                </div>
                                <div class="program__content">
                                    <span>PONT MACHINE</span>
                                    <p>• Permis de conduire des moteurs marins 200 KW</p>
                                    <p>• Brevet Motoriste 450 KW</p>
                                    <p>• Brevet Motoriste 750 KW</p>
                                    <p>• Brevet Officier Chef de quart Machine</p>
                                    <a href="#" class="boxed-btn5">OK</a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section_title text-center">
                                    <h3>FORMATION PERMANENTE: NOUVELLES FILIERES</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single__program">
                                <div class="program_thumb">
                                    <img src="{{asset('assets/="img/program/1-4.jpg')}}" alt="">
                                </div>
                                <div class="program__content">
                                    <h4>• Formation des artisans pecheurs en navigation, pour une meilleure sécurité en mer</h4>
                                    <h4>• Formation des agents de maintenance de la pêche industrielle et des industries de transformation</h4>
                                    <a href="#" class="boxed-btn5">OK</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single__program">
                                <div class="program_thumb">
                                    <img src="{{asset('assets/="img/program/1-5.png')}}" alt="">
                                </div>
                                <div class="program__content">
                                    <h4>• Qualification (de base et avancée) à la lutte contre l'incendie (Normes STCW)</h4>
                                    <h4>• Techniques individuelles de survie en mer</h4>
                                    <a href="#" class="boxed-btn5">OK</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single__program">
                                <div class="program_thumb">
                                    <img src="{{asset('assets/="img/program/1-6.png')}}" alt="">
                                </div>
                                <div class="program__content">
                                    <h4>• Sécurité des personnes et responsabilités sociales</h4>
                                    <h4>• RADAR / ARPA/SMDSM:/MACHINE</h4>
                                    <h4>• MEDICAL II. ISPS & ISM CODE</h4>
                                    <a href="#" class="boxed-btn5">OK</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h4>NB: Les modules de formation permanents sont définis en fonction des besoins spécifiques</h4>
                <h4>La formation comprend un enseignement général et un enseignement technique</h4>
                <h4>La durée de la scolarité varie d'une à quatre années suivant la filière</h4>
                </div>


                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="single__program">
                                            <div class="program_thumb">
                                                <img src="{{asset('assets/="img/program/1-1.jpg')}}" alt="">
                                            </div>
                                            <div class="program__content">
                                                <span>PONT PECHE</span>
                                                <p>• Brevet de Capacitaire à la Navigation Maritime (BCNM)</p>
                                                <p>• Brevet de Lieutenant de Pêche</p>
                                                <p>• Brevet de Capitaine de Pêche</p>
                                                <a href="#" class="boxed-btn5">OK</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="single__program">
                                            <div class="program_thumb">
                                                <img src="{{asset('assets/="img/program/1-2.jpg')}}" alt="">
                                            </div>
                                            <div class="program__content">
                                                <span>PONT COMMERCE</span>
                                                <p>• Brevet de Capitaine à la Navigation Cotiere</p>
                                                <p>• Brevet Officier Chef de quart Passerelle JB > 3000 UMS</p>
                                                <p>• Brevet de Capitaine 3000 UMS</p>
                                                <a href="#" class="boxed-btn5">OK</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="single__program">
                                            <div class="program_thumb">
                                                <img src="{{asset('assets/="img/program/1-3.jpg')}}" alt="">
                                            </div>
                                            <div class="program__content">
                                                <span>PONT MACHINE</span>
                                                <p>• Permis de conduire des moteurs marins 200 KW</p>
                                                <p>• Brevet Motoriste 450 KW</p>
                                                <p>• Brevet Motoriste 750 KW</p>
                                                <p>• Brevet Officier Chef de quart Machine</p>
                                                <a href="#" class="boxed-btn5">OK</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="section_title text-center">
                                                <h3>FORMATION PERMANENTE: NOUVELLES FILIERES</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="single__program">
                                            <div class="program_thumb">
                                                <img src="{{asset('assets/="img/program/1-4.jpg')}}" alt="">
                                            </div>
                                            <div class="program__content">
                                                <h4>• Formation des artisans pecheurs en navigation, pour une meilleure sécurité en mer</h4>
                                                <h4>• Formation des agents de maintenance de la pêche industrielle et des industries de transformation</h4>
                                                <a href="#" class="boxed-btn5">OK</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="single__program">
                                            <div class="program_thumb">
                                                <img src="{{asset('assets/="img/program/1-5.png')}}" alt="">
                                            </div>
                                            <div class="program__content">
                                                <h4>• Qualification (de base et avancée) à la lutte contre l'incendie (Normes STCW)</h4>
                                                <h4>• Techniques individuelles de survie en mer</h4>
                                                <a href="#" class="boxed-btn5">OK</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="single__program">
                                            <div class="program_thumb">
                                                <img src="{{asset('assets/="img/program/1-6.png')}}" alt="">
                                            </div>
                                            <div class="program__content">
                                                <h4>• Sécurité des personnes et responsabilités sociales</h4>
                                                <h4>• RADAR / ARPA/SMDSM:/MACHINE</h4>
                                                <h4>• MEDICAL II. ISPS & ISM CODE</h4>
                                                <a href="#" class="boxed-btn5">OK</a>
                                            </div>
                                        </div>
                                    </div>

                        </div>
                        <h4>NB: Les modules de formation permanents sont définis en fonction des besoins spécifiques</h4>
                <h4>La formation comprend un enseignement général et un enseignement technique</h4>
                <h4>La durée de la scolarité varie d'une à quatre années suivant la filière</h4>
                </div>

                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                <div class="row"><div class="col-lg-4 col-md-6">
                                    <div class="single__program">
                                        <div class="program_thumb">
                                            <img src="{{asset('assets/="img/program/1-1.jpg')}}" alt="">
                                        </div>
                                        <div class="program__content">
                                            <span>PONT PECHE</span>
                                            <p>• Brevet de Capacitaire à la Navigation Maritime (BCNM)</p>
                                            <p>• Brevet de Lieutenant de Pêche</p>
                                            <p>• Brevet de Capitaine de Pêche</p>
                                            <a href="#" class="boxed-btn5">OK</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="single__program">
                                        <div class="program_thumb">
                                            <img src="{{asset('assets/="img/program/1-2.jpg')}}" alt="">
                                        </div>
                                        <div class="program__content">
                                            <span>PONT COMMERCE</span>
                                            <p>• Brevet de Capitaine à la Navigation Cotiere</p>
                                            <p>• Brevet Officier Chef de quart Passerelle JB > 3000 UMS</p>
                                            <p>• Brevet de Capitaine 3000 UMS</p>
                                            <a href="#" class="boxed-btn5">OK</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="single__program">
                                        <div class="program_thumb">
                                            <img src="{{asset('assets/="img/program/1-3.jpg')}}" alt="">
                                        </div>
                                        <div class="program__content">
                                            <span>PONT MACHINE</span>
                                            <p>• Permis de conduire des moteurs marins 200 KW</p>
                                            <p>• Brevet Motoriste 450 KW</p>
                                            <p>• Brevet Motoriste 750 KW</p>
                                            <p>• Brevet Officier Chef de quart Machine</p>
                                            <a href="#" class="boxed-btn5">OK</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="section_title text-center">
                                            <h3>FORMATION PERMANENTE: NOUVELLES FILIERES</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="single__program">
                                        <div class="program_thumb">
                                            <img src="{{asset('assets/="img/program/1-4.jpg')}}" alt="">
                                        </div>
                                        <div class="program__content">
                                            <h4>• Formation des artisans pecheurs en navigation, pour une meilleure sécurité en mer</h4>
                                            <h4>• Formation des agents de maintenance de la pêche industrielle et des industries de transformation</h4>
                                            <a href="#" class="boxed-btn5">OK</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="single__program">
                                        <div class="program_thumb">
                                            <img src="{{asset('assets/="img/program/1-5.png')}}" alt="">
                                        </div>
                                        <div class="program__content">
                                            <h4>• Qualification (de base et avancée) à la lutte contre l'incendie (Normes STCW)</h4>
                                            <h4>• Techniques individuelles de survie en mer</h4>
                                            <a href="#" class="boxed-btn5">OK</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="single__program">
                                        <div class="program_thumb">
                                            <img src="{{asset('assets/="img/program/1-6.png')}}" alt="">
                                        </div>
                                        <div class="program__content">
                                            <h4>• Sécurité des personnes et responsabilités sociales</h4>
                                            <h4>• RADAR / ARPA/SMDSM:/MACHINE</h4>
                                            <h4>• MEDICAL II. ISPS & ISM CODE</h4>
                                            <a href="#" class="boxed-btn5">OK</a>
                                        </div>
                                    </div>
                                </div>

                    </div>
                    <h4>NB: Les modules de formation permanents sont définis en fonction des besoins spécifiques</h4>
            <h4>La formation comprend un enseignement général et un enseignement technique</h4>
            <h4>La durée de la scolarité varie d'une à quatre années suivant la filière</h4>
            </div>
                <div class="tab-pane fade" id="nav-contact2" role="tabpanel" aria-labelledby="nav-contact-tab">
                                <div class="row"><div class="col-lg-4 col-md-6">
                                    <div class="single__program">
                                        <div class="program_thumb">
                                            <img src="{{asset('assets/="img/program/1-1.jpg')}}" alt="">
                                        </div>
                                        <div class="program__content">
                                            <span>PONT PECHE</span>
                                            <p>• Brevet de Capacitaire à la Navigation Maritime (BCNM)</p>
                                            <p>• Brevet de Lieutenant de Pêche</p>
                                            <p>• Brevet de Capitaine de Pêche</p>
                                            <a href="#" class="boxed-btn5">OK</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="single__program">
                                        <div class="program_thumb">
                                            <img src="{{asset('assets/="img/program/1-2.jpg')}}" alt="">
                                        </div>
                                        <div class="program__content">
                                            <span>PONT COMMERCE</span>
                                            <p>• Brevet de Capitaine à la Navigation Cotiere</p>
                                            <p>• Brevet Officier Chef de quart Passerelle JB > 3000 UMS</p>
                                            <p>• Brevet de Capitaine 3000 UMS</p>
                                            <a href="#" class="boxed-btn5">OK</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="single__program">
                                        <div class="program_thumb">
                                            <img src="{{asset('assets/="img/program/1-3.jpg')}}" alt="">
                                        </div>
                                        <div class="program__content">
                                            <span>PONT MACHINE</span>
                                            <p>• Permis de conduire des moteurs marins 200 KW</p>
                                            <p>• Brevet Motoriste 450 KW</p>
                                            <p>• Brevet Motoriste 750 KW</p>
                                            <p>• Brevet Officier Chef de quart Machine</p>
                                            <a href="#" class="boxed-btn5">OK</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="section_title text-center">
                                            <h3>FORMATION PERMANENTE: NOUVELLES FILIERES</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="single__program">
                                        <div class="program_thumb">
                                            <img src="{{asset('assets/="img/program/1-4.jpg')}}" alt="">
                                        </div>
                                        <div class="program__content">
                                            <h4>• Formation des artisans pecheurs en navigation, pour une meilleure sécurité en mer</h4>
                                            <h4>• Formation des agents de maintenance de la pêche industrielle et des industries de transformation</h4>
                                            <a href="#" class="boxed-btn5">OK</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="single__program">
                                        <div class="program_thumb">
                                            <img src="{{asset('assets/="img/program/1-5.png')}}" alt="">
                                        </div>
                                        <div class="program__content">
                                            <h4>• Qualification (de base et avancée) à la lutte contre l'incendie (Normes STCW)</h4>
                                            <h4>• Techniques individuelles de survie en mer</h4>
                                            <a href="#" class="boxed-btn5">OK</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="single__program">
                                        <div class="program_thumb">
                                            <img src="{{asset('assets/="img/program/1-6.png')}}')}}" alt="">
                                        </div>
                                        <div class="program__content">
                                            <h4>• Sécurité des personnes et responsabilités sociales</h4>
                                            <h4>• RADAR / ARPA/SMDSM:/MACHINE</h4>
                                            <h4>• MEDICAL II. ISPS & ISM CODE</h4>
                                            <a href="#" class="boxed-btn5">OK</a>
                                        </div>
                                    </div>
                                </div>

                    </div>
                    <h4>NB: Les modules de formation permanents sont définis en fonction des besoins spécifiques</h4>
            <h4>La formation comprend un enseignement général et un enseignement technique</h4>
            <h4>La durée de la scolarité varie d'une à quatre années suivant la filière</h4>
            </div>
            </div>
        </div>
    </div>
    <!-- popular_program_area_end -->

    <!-- footer start -->
    @include("composant.footer")
