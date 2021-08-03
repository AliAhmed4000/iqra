<div class="header-top-bar new__header_clr" id="header">
    <div class="container">
        <div class="row align-items-center header_row">
            <div class="col-lg-6">
                <ul class="top-bar-info list-inline-item pl-0 mb-0">
                    <li class="list-inline-item">Give us a call:</a></li>
                    <li class="list-inline-item"><i class="fa fa-phone mr-2"></i>00 92 213 4112224</li>
                    <li class="list-inline-item"><i class="fa fa-mobile-alt mr-2"></i>0092 321 3852399 </li>
                </ul>
            </div>
            <div class="col-lg-6">
                <div class="text-lg-right top-right-bar mt-2 mt-lg-0">
                    <a href="{{url('/sign-in')}}" class="h__link"><span class="mr-3">Sign In </span></a>
                    <!-- <span class="mr-3">Register </span> -->
                    <span><i class="fab fa-facebook-f mr-3"></i></span>
                    <span><i class="fab fa-twitter mr-3"></i></span>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="header-area main_hide_sep" id="header__area">
    <div class="container con_pos_reltv_mob">
        <div class="header-wrapper">
            <nav class="navbar navbar-light bg-light navbar-expand-lg my_custom__navbar" id="myNavbar">
                
                <button class="navbar-toggler three_icon_mob" type="button" data-toggle="collapse" data-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars" aria-hidden="true"></i>
                </button>
                
                <a href="{{url('/')}}" class="navbar-brand"><img src="{{asset('assets/images/new_logo.png')}}" alt="" class="img-fluid"></a>
                <div class="collapse navbar-collapse" id="mainNav">
                    <ul class="navbar-nav ml-auto nav-fill">
                        
                        <li class="nav-item px-0">      
                            <a href="{{url('/request-a-quote')}}" class="nav-link get_quote">GET A QUOTE </a>
                        </li>
                        
                        <li class="nav-item px-0 dropdown drop__down">
                            <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About us</a>
                            <div class="dropdown-menu dropdown-menu-right about__menu__right" aria-labelledby="servicesDropdown">
                                <div class="d-md-flex align-items-start justify-content-start">
                                   <div>
                                        <a class="dropdown-item" href="{{url('/company')}}">Company</a>
                                        <a class="dropdown-item" href="{{url('/case-studies')}}">Case studies</a>
                                    </div>
                                    <div>
                                        <a class="dropdown-item" href="{{url('/why-us')}}">Why us</a>
                                        <a class="dropdown-item" href="{{url('/useful-resources')}}">Useful resources</a>
                                    </div>
                                    <div>
                                        <a class="dropdown-item" href="{{url('/quality')}}">Quality</a>
                                        <a class="dropdown-item" href="{{url('/register')}}">Register</a>
                                    </div>
                                     <div>
                                        <a class="dropdown-item" href="{{url('/clients')}}">Clients</a>
                                        <a class="dropdown-item remove_last_border" href="{{url('/blog')}}">Blog</a>
                                    </div>

                                </div>
                            </div>
                        </li>
                        <li class="nav-item px-0">
                            <a href="{{url('/languages')}}" class="nav-link">Languages </a>
                        </li>
                        <li class="nav-item px-0 dropdown drop__down" >
                            <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Industries</a>
                            <div class="dropdown-menu dropdown-menu-right industries__menu__right" aria-labelledby="servicesDropdown">
                                <div class="d-md-flex align-items-start justify-content-start">
                                    <div>
                                        <a class="dropdown-item" href="{{url('/legal-and-law')}}">Legal and Law </a>
                                        <a class="dropdown-item" href="{{url('/publishing-media')}}">Publishing & Media Translation</a>
                                        <a class="dropdown-item" href="{{url('/government')}}">Government </a>
                                    </div>
                                    <div>
                                        <a class="dropdown-item" href="{{url('/life-sciences')}}">Life Sciences</a>
                                        <a class="dropdown-item" href="{{url('/IT-and-software')}}">IT & Software</a>
                                        <a class="dropdown-item" href="{{url('hospitality')}}">Hospitality </a>
                                    </div>
                                    <div>
                                        <a class="dropdown-item" href="{{url('/finance')}}">Finance</a>
                                        <a class="dropdown-item" href="{{url('/retail')}}">Retail</a>
                                        <a class="dropdown-item" href="{{url('/energy')}}">Energy </a>
                                    </div>
                                    <div>
                                        <a class="dropdown-item" href="{{url('/technical-and-manufacturing')}}">Technical &; Manufacturing</a>
                                        <a class="dropdown-item" href="{{url('/game-localization')}}">Game Localization</a>
                                        <a class="dropdown-item remove_last_border" href="{{url('/automotive')}}">Automotive </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item px-0 dropdown drop__down">
                            <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Solutions</a>
                            <div class="dropdown-menu dropdown-menu-right solutions__menu__right" aria-labelledby="servicesDropdown">
                                <div class="d-md-flex align-items-start justify-content-start">
                                    <div>
                                        <a class="dropdown-item" href="{{url('/translation')}}">Translation</a>
                                        <a class="dropdown-item" href="{{url('/telephone-interpreting')}}">Telephone Interpreting</a>
                                        <a class="dropdown-item" href="{{url('/speech-data-collection')}}">Speech Data Collection </a>
                                    </div>
                                    <div>
                                        <a class="dropdown-item" href="{{url('/transcription')}}">Transcription</a>
                                        <a class="dropdown-item" href="{{url('/subtitling')}}">Subtitling</a>
                                        <a class="dropdown-item" href="{{url('/multilingual-seo-services')}}" >Multilingual SEO services </a>
                                    </div>
                                    <div>
                                        <a class="dropdown-item" href="{{url('/multilingual-voice-over')}}">Multilingual Voice Over</a>
                                        <a class="dropdown-item" href="{{url('/transcreation')}}">Transcreation</a>
                                        <a class="dropdown-item" href="{{url('/certified-translation-services')}}">Certified Translation Services </a>
                                    </div>
                                    <div>
                                        <a class="dropdown-item" href="{{url('/interpreting')}}">Interpreting</a>
                                        <a class="dropdown-item" href="{{url('/desktop-publishing-and-typesetting')}}">Desktop Publishing and Typesetting</a>
                                        <a class="dropdown-item remove_last_border" href="#">Automated backups</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item px-0">
                            <a href="{{url('/contact-us')}}" class="nav-link">Contact us</a>
                        </li>
                        <li class="nav-item px-0 dropdown drop__down">
                            <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">English</a>
                            <div class="dropdown-menu dropdown-menu-right languages__menu__right" aria-labelledby="servicesDropdown">
                                <div class="d-md-flex align-items-start justify-content-start">
                                    <div>
                                        <a class="dropdown-item" href="{{url('/deutsch')}}"> Deutsch</a>
                                        <a class="dropdown-item" href="{{url('/română')}}"> Română</a>
                                        <a class="dropdown-item" href="{{url('/schweiz')}}">Schweiz </a>
                                    </div>
                                    <div>
                                        <a class="dropdown-item" href="{{url('/français')}}"> Français</a>
                                        <a class="dropdown-item" href="{{url('/pусский')}}"> Русский</a>
                                        <a class="dropdown-item" href="{{url('/UAE')}}" > UAE</a>
                                    </div>
                                    <div>
                                        <a class="dropdown-item" href="{{url('/italiano')}}"> Italiano</a>
                                        <a class="dropdown-item" href="{{url('/português')}}"> Português</a>
                                    </div>
                                    <div>
                                        <a class="dropdown-item" href="{{url('/español')}}"> Español</a>
                                        <a class="dropdown-item remove_last_border" href="{{url('/south-africa')}}"> South Africa</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>










