@extends('layouts.app')

@section('content')

    <section class="banner page__banner_top" id="game_localization__section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xl-12">
                    <div class="block">
                        <h1 class="mb-3 mt-3 baner_top_words">Game Localization</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
    <div class="icon-box-area pt-20 js--sticky-menu mob__mb" id="page_text_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 mb-10">
                      

                         <p>With ever-increasing levels of globalization and video game industry boom, the necessities for professional game localization services reach an all-time high. According to research more than 70% of global internet users are non-English native speakers. At PoliLingua we understand the importance worldwide business reach and global transparency and are in exclusive position to provide game localization services of any kind.</p>

                         
                         <p>If you need to prepare your game for any particular market, PoliLingua Translation Services is in exclusive position to provide professional game localization services for more than 60 languages at unbeatable rates. We understand the importance of having only the native speaker translators handling the gaming translation material. Native speakers have a deep level of understanding of subtle language differences and posses a natural familiarity with culture, history and peculiarities of the target language. All our translators are qualified native speakers. Your game will transform and appeal to the local market.</p>

                        <p class="mb-30"><img class="img-fluid" src="{{asset('assets/images/industries/5e15d22bed093.jpg')}}" alt=""></p>

                        <p>Whether you need to exhibit different in-game characters, require professional multilingual voice-over services or want your website translated, entrust your game localization project to us and we will exceed you expectations in terms of quality, service and value.</p>

                        <div class="row">
                            <div class="col-lg-1 mb-10"> 
                                <img src="{{('assets/images/industries/game_local/1.png')}}" alt="" class="small__imgs"> 
                            </div>
                            <div class="col-lg-11 mb-10">
                                <p><b>Our game localization include a wide array of services and include:</b></p>
                                <div id="language__section">
                                   <div class="lang_sing_box">
                                       <a> user interface localization </a>
                                    </div>
                                </div>
                                <div id="language__section">
                                   <div class="lang_sing_box">
                                       <a>localization of user manuals and print materials </a>
                                    </div>
                                </div>
                                <div id="language__section">
                                   <div class="lang_sing_box">
                                       <a> graphics localization </a>
                                    </div>
                                </div>
                                <div id="language__section">
                                   <div class="lang_sing_box">
                                       <a> Voice-Over recording </a>
                                    </div>
                                </div>
                                <div id="language__section">
                                   <div class="lang_sing_box">
                                       <a>linguistic QA testing </a>
                                    </div>
                                </div>
                                <div id="language__section">
                                   <div class="lang_sing_box">
                                       <a>localization and website translations</a>
                                    </div>
                                </div>
                                <div id="language__section">
                                   <div class="lang_sing_box">
                                       <a>translation of PR articles, advertising brochures and outlets, etc.</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="hr__divider">



                        <div class="row">
                          
                            <div class="col-lg-12 mb-10">
                                <p>All our gaming translation projects go through an advanced multi-step project management and quality control procedures to ensure best results achieved at all times. Simply fill out our <a href=""> <b class="__link"> request form </b></a> and submit your files for a fast and free quotation.</p>
                            </div>
                        </div>
                </div>

                <div class="col-lg-3 mb-10">
                    @include('includes.form_aside')
                   
                </div>
            </div>
        </div>
    </div>

   @endsection