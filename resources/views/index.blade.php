@extends('layouts.app')

@section('content')



 <div id="mob__bg_img">
        <div class="h__area"> 
            <div class="col-md-12 mob__heading">
                <p>
                    Your Words, Their Language
                </p>
            </div>
            <div class="col-md-12 mob__btn_section">
                <a class="" href="">
                    <span class="btn_sm_mob">Get a free quote</span>
                </a>
                <a class="" href="">
                    <span class="btn_sm_mob">Start A Project</span>
                </a>
            </div>
        </div>
</div>


    <div id="sli" class="carousel slide __slider" data-ride="carousel" >
        <ul class="carousel-indicators">
            <li data-target="#sli" data-slide-to="0" class="active"></li>
            <li data-target="#sli" data-slide-to="1"></li>
            <li data-target="#sli" data-slide-to="2"></li>
        </ul>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="slider_img" src="{{asset('assets/images/header.jpg')}}" alt="">
                <div class="container slider_up_words_section" >
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-xl-7">
                            <div class="block">
                                <h1 class="mb-3 mt-3 baner_top_words">Your Words, Their Language</h1>
                                
                                <p class="mb-4 pr-5 baner_p_words">IQRA TRANSLATION specializes in translation, localization and managed language solutions for clients both large and small, from corporate, government and private sectors. We’re happy to provide free price quotes for any document, user manual, website or software localization project.
                                </p>
                                <div class="btn-container ">
                                    <a href="#" target="_blank" class="btn btn-main-2 btn-icon btn-round-full btn__blue">GET A FREE QUOTE</a>
                                    <a href="#" target="_blank" class="btn btn-main-2 btn-icon btn-round-full btn__green">START A PROJECT</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="slider_img" src="{{asset('/assets/images/header.jpg')}}" alt="">
            </div>
            <div class="carousel-item">
                <img class="slider_img" src="{{asset('/assets/images/header.jpg')}}" alt="">
            </div>
        </div>
    </div>

    <div class="icon-box-area pt-40 pb-40 js--sticky-menu" id="feature">
        <div class="container" id="img__section">
            <div class="row">
                <div class="col-lg-12 text-center mb-10">
                    <div class="">
                        <h4 class="heading__h">What We Offer</h4>
                        <div class="top__para">Armed with a global network of production facilities, we can translate anything into over 100 languages, guaranteeing client satisfaction</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-icon-box">
                        <img  src="{{asset('/assets/images/1.jpg')}}" alt="" class="img-fluid w-100 img__height img-responsive">
                        <div class="icon-box-content">
                            <h6 class="iconbox-content-heading">TRANSLATION SERVICES</h6>
                            <div class="iconbox-content-body">
                                <p>IQRA TRANSLATION is proud to present a number of translation services, from our highly qualified team of over 8000 professional linguists translating in their mother-tongues.</p>
                                <a class="btn btn-inline read-more-btn" href="{{url('/translation')}}"> Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-icon-box">
                        <img src="{{asset('/assets/images/2.jpg')}}" alt="" class="img-fluid w-100 img__height">
                        <div class="icon-box-content">
                            <h6 class="iconbox-content-heading">TRANSCRIPTION SERVICES</h6>
                            <div class="iconbox-content-body">
                                <p>IQRA TRANSLATION is proud to present a number of translation services, from our highly qualified team of over 8000 professional linguists translating in their mother-tongues.</p>
                                <a class="btn btn-inline read-more-btn" href="{{url('/transcription')}}"> Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-icon-box">
                        <img src="{{asset('/assets/images/3.jpg')}}" alt="" class="img-fluid w-100 img__height">
                        <div class="icon-box-content">
                            <h6 class="iconbox-content-heading">MULTILINGUAL VOICE OVER</h6>
                            <div class="iconbox-content-body">
                                <p>IQRA TRANSLATION is proud to present a number of translation services, from our highly qualified team of over 8000 professional linguists translating in their mother-tongues.</p>
                                <a class="btn btn-inline read-more-btn" href="{{url('/multilingual-voice-over')}}"> Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

             <div class="row" style="margin-top: 25px;">
                <div class="col-lg-4">
                    <div class="single-icon-box">
                        <img src="{{asset('/assets/images/4.jpg')}}" alt="" class="img-fluid w-100 img__height">
                        <div class="icon-box-content">
                            <h6 class="iconbox-content-heading"> SUBTITLING SERVICES</h6>
                            <div class="iconbox-content-body">
                                <p>IQRA TRANSLATION is proud to present a number of translation services, from our highly qualified team of over 8000 professional linguists translating in their mother-tongues.</p>
                                <a class="btn btn-inline read-more-btn" href="{{url('/SUBTITLING')}}"> Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-icon-box">
                        <img src="{{asset('/assets/images/5.jpg')}}" alt="" class="img-fluid w-100 img__height img-responsive">
                        <div class="icon-box-content">
                            <h6 class="iconbox-content-heading">INTERPRETING SERVICES</h6>
                            <div class="iconbox-content-body">
                                <p>IQRA TRANSLATION is proud to present a number of translation services, from our highly qualified team of over 8000 professional linguists translating in their mother-tongues.</p>
                                <a class="btn btn-inline read-more-btn" href="{{url('/interpreting')}}"> Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-icon-box">
                        <img src="{{asset('assets/images/6.jpg')}}" alt="" class="img-fluid w-100 img__height">
                        <div class="icon-box-content">
                            <h6 class="iconbox-content-heading">DESKTOP PUBLISHING AND TYPESETTING</h6>
                            <div class="iconbox-content-body">
                                <p>IQRA TRANSLATION is proud to present a number of translation services, from our highly qualified team of over 8000 professional linguists translating in their mother-tongues.</p>
                                <a class="btn btn-inline read-more-btn" href="{{url('/desktop-publishing-and-typesetting')}}"> Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bemax-area gray-bg pt-40 pb-25" id="industry_expertise_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-30">
                    <div class="top__words">
                        <h4 class="heading__h">Industry Expertise</h4>
                        <p>Our team of Expert Translators all have a specific expertise,</p>
                        <p>skills and relevant background to handle projects that require a deep understanding of specific industries.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2 col-md-2">
                    <a href="{{url('/legal-and-law')}}">
                        <div class="single-bemax-item">
                            <div class="item-icon">
                               <i class="fa fa-gavel"></i>
                               <p>Legal and Law</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-md-2">
                    <a href="{{url('/life-sciences')}}"> 
                        <div class="single-bemax-item">
                            <div class="item-icon">
                              <i class="fa fa-plus-circle"></i>
                               <p>Life Sciences</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-md-2">
                    <a href="{{url('/finance')}}"> 
                        <div class="single-bemax-item">
                            <div class="item-icon">
                               <i class="fa fa-chart-bar"></i>
                               <p>Finance</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-md-2">
                    <a href="{{url('/technical-and-manufacturing')}}">
                        <div class="single-bemax-item">
                            <div class="item-icon">
                                <i class="fa fa-cogs"></i>
                               <p>Technical & Manufacturing</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-md-2">
                    <a href="{{url('/publishing-media')}}"> 
                        <div class="single-bemax-item">
                                <div class="item-icon">
                                   <i class="fa fa-photo-video"></i>
                                   <p>Publishing & Media Translation Services</p>
                                </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-md-2">
                    <a href="{{url('/IT-and-software')}}"> 
                        <div class="single-bemax-item">
                            <div class="item-icon">
                               <i class="fa fa-laptop"></i>
                               <p>IT & Software</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-md-2">
                    <a href="{{url('/retail')}}"> 
                        <div class="single-bemax-item">
                            <div class="item-icon">
                               <i class="fa fa-shopping-cart"></i>
                               <p>Retail</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-md-2">
                    <a href="{{url('/game-localization')}}"> 
                        <div class="single-bemax-item">
                            <div class="item-icon">
                               <i class="fa fa-shopping-cart"></i>
                               <p>Game Localization</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-md-2">
                    <a href="{{url('/government')}}"> 
                        <div class="single-bemax-item">
                            <div class="item-icon">
                               <i class="fa fa-gamepad"></i>
                               <p>Government</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-md-2">
                    <a href="{{url('/hospitality')}}"> 
                        <div class="single-bemax-item">
                            <div class="item-icon">
                               <i class="fa fa-handshake"></i>
                               <p>Hospitality</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-md-2">
                    <a href="{{url('/energy')}}"> 
                        <div class="single-bemax-item">
                            <div class="item-icon">
                               <i class="fa fa-bolt"></i>
                               <p>Energy</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-md-2">
                    <a href="{{url('/automotive')}}"> 
                        <div class="single-bemax-item">
                            <div class="item-icon">
                               <i class="fa fa-tachometer-alt"></i>
                               <p>Automotive</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="bemax-area gray-bg pt-30 pb-25" id="popular_languages">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-30">
                    <div class="top__words">
                        <h4 class="heading__h">Popular Translation Languages</h4>
                        <p>A small selection of the most common languages we translate</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-2 col-md-2">
                    <div class="single-bemax-item">
                        <div class="flag-wrapper">
                          <div class="flag flag-icon-background flag-icon-fr tast__flag"></div>
                        </div>
                        <p></p>
                        <p>French Translations</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2">
                    <div class="single-bemax-item">
                        <div class="flag-wrapper">
                          <div class="flag flag-icon-background flag-icon-de tast__flag"></div>
                        </div>
                        <p></p>
                        <p>French Translations</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2">
                    <div class="single-bemax-item">
                        <div class="flag-wrapper">
                          <div class="flag flag-icon-background flag-icon-de tast__flag"></div>
                        </div>
                        <p></p>
                        <p>French Translations</p>
                    </div>
                </div>
                 <div class="col-lg-2 col-md-2">
                    <div class="single-bemax-item">
                        <div class="flag-wrapper">
                          <div class="flag flag-icon-background flag-icon-it tast__flag"></div>
                        </div>
                        <p></p>
                        <p>French Translations</p>
                    </div>
                </div>
                 <div class="col-lg-2 col-md-2">
                    <div class="single-bemax-item">
                        <div class="flag-wrapper">
                          <div class="flag flag-icon-background flag-icon-pt tast__flag"></div>
                        </div>
                        <p></p>
                        <p>French Translations</p>
                    </div>
                </div>
                 <div class="col-lg-2 col-md-2">
                    <div class="single-bemax-item">
                        <div class="flag-wrapper">
                          <div class="flag flag-icon-background flag-icon-se tast__flag"></div>
                        </div>
                        <p></p>
                        <p>French Translations</p>
                    </div>
                </div>
                 <div class="col-lg-2 col-md-2">
                    <div class="single-bemax-item">
                        <div class="flag-wrapper">
                          <div class="flag flag-icon-background flag-icon-cn tast__flag"></div>
                        </div>
                        <p></p>
                        <p>French Translations</p>
                    </div>
                </div>
                 <div class="col-lg-2 col-md-2">
                    <div class="single-bemax-item">
                        <div class="flag-wrapper">
                          <div class="flag flag-icon-background flag-icon-jp tast__flag"></div>
                        </div>
                        <p></p>
                        <p>French Translations</p>
                    </div>
                </div>
                 <div class="col-lg-2 col-md-2">
                    <div class="single-bemax-item">
                        <div class="flag-wrapper">
                          <div class="flag flag-icon-background flag-icon-sa tast__flag"></div>
                        </div> 
                        <p></p>
                        <p>French Translations</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2">
                    <div class="single-bemax-item">
                        <div class="flag-wrapper">
                          <div class="flag flag-icon-background flag-icon-de tast__flag"></div>
                        </div>
                        <p></p>
                        <p>French Translations</p>
                    </div>
                </div>

                 <div class="col-lg-2 col-md-2">
                    <div class="single-bemax-item">
                        <div class="flag-wrapper">
                          <div class="flag flag-icon-background flag-icon-de tast__flag"></div>
                        </div>
                        <p></p>
                        <p>French Translations</p>
                    </div>
                </div>

                 <div class="col-lg-2 col-md-2">
                    <div class="single-bemax-item">
                        <div class="flag-wrapper">
                          <div class="flag flag-icon-background flag-icon-de tast__flag"></div>
                        </div>
                        <p></p>
                        <p>French Translations</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bemax-area gray-bg pt-50 pb-25" id="out_clients">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-30">
                    <div class="top__words">
                        <h4 class="heading__h">Our Clients</h4>
                        <p>Among us clients are many companies and individuals from many countries</p>
                    </div>
                </div>
            </div>
            @include('includes.clients')
            
        </div>
    </div>


    <div class="bemax-area gray-bg pt-30 pb-25" id="show_bg_img_sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <div class="single-bemax-item">
                        <img style="max-width: 150px; max-height: 80px;" src="{{asset('assets/images/icons/icon1.png')}}">
                        <h1>8000+</h1>
                        <p>French Translations</p>
                    </div>
                </div>
                 <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <div class="single-bemax-item border__left">
                        <img style="max-width: 150px; max-height: 80px;" src="{{asset('assets/images/icons/icon2.png')}}">
                        <h1>4500+</h1>
                        <p>French Translations</p>
                    </div>
                </div>
                 <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <div class="single-bemax-item border__left">
                        <img style="max-width: 150px; max-height: 80px;" src="{{asset('assets/images/icons/icon3.png')}}">
                        <h1>320</h1>
                        <p>French Translations</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="bemax-area gray-bg pt-30 pb-25" id="our_clients_says">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-30">
                    <div class="top__words">
                        <h4 class="heading__h">What Our Clients Say</h4>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="testimonial-carousel owl-carousel">
                        <div class="single-testimonial-item ">
                            <div class="testimonial-content d-flex testimonial_words "  >
                                <p><q> Everything went super well. Your equipment guys were fabulous, interpreters were excellent and all the materials came in time for us to use them. Thank you, you really did a great job. </q></p>
                            </div>
                            <div class="sm_img">
                                <center>
                                    <div class="">
                                        <img src="{{asset('assets/images/clients_says/2.png')}}" alt="">
                                    </div>
                                </center>
                                <p></p>
                               <h4>Stefania</h4>
                               <p>Samsung trainer</p>

                            </div>
                        </div>
                        <div class="single-testimonial-item ">
                            <div class="testimonial-content d-flex testimonial_words "  >
                                <p><q> You are an absolute star! Great job! Thanks very much for the very speedy response, much appreciated. </q></p>
                            </div>
                            <div class="sm_img">
                                <center>
                                    <div class="">
                                        <img src="{{asset('assets/images/clients_says/3.png')}}" alt="">
                                    </div>
                                </center>
                                <p></p>
                               <h4>Rose</h4>
                               <p>Vargis Account Manager</p>

                            </div>
                        </div>

                        <div class="single-testimonial-item ">
                            <div class="testimonial-content d-flex testimonial_words "  >
                                <p><q> Thank you very much for all the hard work you & your team have put into this project, greatly appreciated! Jim just wrote to say how perfect everything is and how grateful they are for delivering the test and Certificate Of Achievement. The first day is always a challenge but this one has worked out very, very well and that has so much to do with you and your team. </q></p>
                            </div>
                            <div class="sm_img">
                                <center>
                                    <div class="">
                                        <img src="{{asset('assets/images/clients_says/1.png')}}" alt="">
                                    </div>
                                </center>
                                <p></p>
                               <h4>Andres</h4>
                               <p>Project Manager</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
    <div class="bemax-area gray-bg pt-30 pb-25" id="need">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-center mb-30">
                    <div class="need_project_section">
                        <h4>Need A Translation?</h4>
                        <p>Fill in the form and a qualified professional
                           <br>
                            will begin to manage your project right away</p>

                               <a class="btn btn-primary btn__submit btn__need_order" href="#" >Order Online</a>
                    </div>
                </div>
                <div class="col-lg-6 text-center mb-30">
                    <div class="need_project_section">
                        <h4>Have A Large Project?</h4>
                        <p>Leave the translation and localization to us
                          <br>  and concentrate in your core business. Speak with us.</p>

                          <a class="btn btn-primary btn__submit btn__need_order" href="#"">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bemax-area gray-bg pt-30 pb-25" id="blog_posts">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-30">
                    <div class="top__words">
                        <h4 class="heading__h">Blog Posts</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 mb-30 blog__set" >
                    <div>
                        <h4>Top differences between Canadian and American English</h4>
                        <hr>
                    </div>
                    <div class="created-blog">
                        <span class="__date">Apr 26, 2021</span>
                        <span>|</span>
                        <span>
                            <a href="#" class="text_wt_date">
                                Translation services
                            </a>
                        </span>
                    </div>
                    <a href="#"> <img src="{{asset('assets/images/blog/24569.jpg')}}" class="img-fluid"></a>
                    <div class="excerpt">
                        Once upon a time, there was a language that was used solely by the British people. It had many dialects, some of which were so - ahem - unique that sometimes it took some time even for English speakers to realize it was English they'd just heard.&nbsp;With its...
                        <a class="rd_mr_btn" href="">
                            Read more
                        </a>
                    </div>
                </div>

                 <div class="col-lg-6 mb-30 blog__set" >
                    <div>
                        <h4>How to translate a WordPress website?</h4>
                        <hr>
                    </div>
                    <div class="created-blog">
                        <span class="__date">Apr 26, 2021</span>
                        <span>|</span>
                        <span>
                            <a href="#" class="text_wt_date">
                                Multilingual SEO
                            </a>
                        </span>
                    </div>
                    <a href="#"> <img src="{{asset('assets/images/blog/95055.jpg')}}" class="img-fluid"></a>
                    <div class="excerpt">
                         Why translating WordPress? Exporting the WordPress content ...
                        <a class="rd_mr_btn" href="">
                            Read more
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection