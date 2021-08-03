@extends('layouts.app')

@section('content')

    <section class="banner page__banner_top" id="translation__section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xl-12">
                    <div class="block">
                        <h1 class="mb-3 mt-3 baner_top_words">Translation services</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
    <div class="icon-box-area pt-20 js--sticky-menu mob__mb" id="page_text_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 mb-10">
                        

                         <p><b>Professional Translation Services Overview</b></p>

                         
                         <p>PoliLingua is proud to present a number of translation services, from our highly qualified team of more than 8000 professional translators.</p>

                         <p><b>The Importance of Professional Translation</b>
                          <br>
                          The globalization of many areas of business requires that customers have access to products and services in their own language. Internationalizing your business documentation, website, and software can ensure that you reach the largest market possible, which increases your profits and decreases customer miscommunication issues. Alternatively, if you live in a foreign country or plan to apply to a job in a country with a language different from your native tongue, we can assist you with quality certified document translation services that meet all necessary legislation requirements.
                         </p>

                          <p class="mb-30"><img class="img-fluid" src="{{asset('assets/images/solutions/5e298ec80b31b.jpg')}}" alt=""></p>
                          <p><b>PoliLingua Translation Services</b></p>
                          <p>We handle translations for almost any types of texts:</p>

                          <div class="row">
                            <div class="col-lg-6"> 
                                <div id="language__section">
                                   <div class="lang_sing_box">
                                       <a> Document Translation  </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6"> 
                                <div id="language__section">
                                   <div class="lang_sing_box">
                                       <a>Certified Translations </a>
                                    </div>
                                </div>
                            </div>
                             <div class="col-lg-6"> 
                                <div id="language__section">
                                   <div class="lang_sing_box">
                                       <a> Automotive translation  </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6"> 
                                <div id="language__section">
                                   <div class="lang_sing_box">
                                       <a>Technical Translation  </a>
                                    </div>
                                </div>
                            </div>
                             <div class="col-lg-6"> 
                                <div id="language__section">
                                   <div class="lang_sing_box">
                                       <a> Legal and law translations </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6"> 
                                <div id="language__section">
                                   <div class="lang_sing_box">
                                       <a> Financial Translation  </a>
                                    </div>
                                </div>
                            </div>
                             <div class="col-lg-6"> 
                                <div id="language__section">
                                   <div class="lang_sing_box">
                                       <a> Transcreation Services  </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6"> 
                                <div id="language__section">
                                   <div class="lang_sing_box">
                                       <a> Medical Translation  </a>
                                    </div>
                                </div>
                            </div>
                             <div class="col-lg-6"> 
                                <div id="language__section">
                                   <div class="lang_sing_box">
                                       <a> First Draft Translation  </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6"> 
                                <div id="language__section">
                                   <div class="lang_sing_box">
                                       <a>Website Translation </a>
                                    </div>
                                </div>
                            </div>
                             <div class="col-lg-6"> 
                                <div id="language__section">
                                   <div class="lang_sing_box">
                                       <a> Translation with Editing  </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6"> 
                                <div id="language__section">
                                   <div class="lang_sing_box">
                                       <a>Software Localization </a>
                                    </div>
                                </div>
                            </div>
                             <div class="col-lg-6"> 
                                <div id="language__section">
                                   <div class="lang_sing_box">
                                       <a> Video translation service </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <br>

                        <div class="row">
                           
                            <div class="col-lg-12 mb-10">
                                <p>For more detailed information on our services, please check the respective pages for each service.</p>
                                <p>
                                You can even combine translation services with professional desktop publishing from our in-house desktop publishing designers, which gives you a complete package when it comes to attracting a broad multinational customer base. Let us help you with your translation needs.</p>
                                <p><a href=""><b class="__link"> Call us, ask a question, request a quote!</b></a> Your global success is a phone call away.</p>
                              
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