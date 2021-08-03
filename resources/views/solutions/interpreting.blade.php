@extends('layouts.app')

@section('content')

    <section class="banner page__banner_top" id="interpreting__section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xl-12">
                    <div class="block">
                        <h1 class="mb-3 mt-3 baner_top_words">Interpreting</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
    <div class="icon-box-area pt-20 js--sticky-menu mob__mb" id="page_text_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 mb-10">
                        

                        <div class="row">
                            <div class="col-lg-1 mb-10"> 
                                <img src="{{('assets/images/solutions/interpreting/1.png')}}" alt="" class="small__imgs"> 
                            </div>
                            <div class="col-lg-11 mb-10">
                                <h4 class="translation__h">Interpreting</h4>
                                <p>In addition to translations, PoliLingua provides interpreting services. We provide a number of different services, including telephone interpreting, conference interpreting, personal interpreting, etc., depending on your needs and the speech to be interpreted.</p>
                                <p>Our interpreters are highly trained to successfully interpret between a number of different languages in the fields of business, politics, medicine, and others.</p>
                                <p>We understand that interpretation has different requirements to translation, which is why we select specialists in various locations who are experienced and well trained in this field. Please contact us to check if we have an interpreter for your location.</p>
                            </div>
                        </div>
                        <hr class="hr__divider">


                    

                        <div class="row">
                            <div class="col-lg-1 mb-10"> 
                                 <img src="{{('assets/images/solutions/interpreting/2.png')}}" alt="" class="small__imgs"> 
                            </div>
                            <div class="col-lg-11 mb-10">
                                <h4 class="translation__h">Our Interpreting Services</h4>
                                <p>We offer a wide range of interpreting services including:</p>

                                <div id="language__section">
                                   <div class="lang_sing_box">
                                       <a> <b>Simultaneous interpreting –</b> we will translate between a speaker and a listener at the time it is happening, allowing the speaker to talk continuously. </a>
                                    </div>
                                </div>
                                <div id="language__section">
                                   <div class="lang_sing_box">
                                       <a> <b>Consecutive interpreting –</b>   interpreting after the speaker has finished a sentence, then repeating his or her words in a target language. Therefore, it involves the collaboration of the original speaker, who will pause after each sentence or point.</a>
                                    </div>
                                </div>
                                <div id="language__section">
                                   <div class="lang_sing_box">
                                       <a> <b>Telephone interpreting –</b>  delivering translation services over the phone, allowing customers to add our trained interpreters to conference calls. This type of translation is useful for those that do not have interpreters available on site.</a>
                                    </div>
                                </div>
                                <p>Our interpreters have worked in a wide range of business and official settings. Just contact us today to find out how we can help you. If you have specific interpreting requirements please let us know how we can accommodate you today.</p>
                           
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