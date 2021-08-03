@extends('layouts.app')

@section('content')

    <section class="banner page__banner_top" id="subtitling__section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xl-12">
                    <div class="block">
                        <h1 class="mb-3 mt-3 baner_top_words">Subtitling Services</h1>
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
                                <img src="{{('assets/images/solutions/subtitling/1.png')}}" alt="" class="small__imgs"> 
                            </div>
                            <div class="col-lg-11 mb-10">
                                <h4 class="translation__h">Subtitle is a crucial part of your video product. It has to be done right.</h4>
                                <p>Subtitling is a dangerous business, as any international film buff knows. Words are crucial to most video and film. If they aren’t right, a film or video can be incomprehensible. Worse, flawed subtitles can actually convey an unwanted meaning, misguiding your viewers. And when it’s clear they’re wrong, they can be laughable at the worst possible moment. At the same time, accurately and artfully rendered subtitles can enhance your film or video immeasurably.</p>
                               
                            </div>
                        </div>
                        <hr class="hr__divider">


                    

                        <div class="row">
                            <div class="col-lg-1 mb-10"> 
                                 <img src="{{('assets/images/solutions/subtitling/2.png')}}" alt="" class="small__imgs"> 
                            </div>
                            <div class="col-lg-11 mb-10">
                                <h4 class="translation__h">Who needs subtitles ?</h4>
                                <p>A company illustrating the advantages of its product through videos on its site</p>

                                <div id="language__section">
                                   <div class="lang_sing_box">
                                       <a> A studio releasing a feature film in foreign markets</a>
                                    </div>
                                </div>
                                <div id="language__section">
                                   <div class="lang_sing_box">
                                       <a> Public information videos that need to be closed-captioned to make them accessible to the deaf or hard of hearing.</a>
                                    </div>
                                </div>
                                <div id="language__section">
                                   <div class="lang_sing_box">
                                       <a>E-learning platforms hosting video lessons and lectures that need to reach a multinational audience.</a>
                                    </div>
                                </div>
                                <div id="language__section">
                                   <div class="lang_sing_box">
                                       <a>A software company hosting instructional videos on its web site or YouTube… the list is endless.</a>
                                    </div>
                                </div>
                           
                            </div>
                           
                        </div>
                        <hr class="hr__divider">

                         <div class="row">
                            <div class="col-lg-1 mb-10"> 
                                <img src="{{('assets/images/solutions/subtitling/3.png')}}" alt="" class="small__imgs"> 
                            </div>
                            <div class="col-lg-11 mb-10">
                                <h4 class="translation__h">What goes into subtitling ?</h4>
                                <p>Simple although it may seem, there are actually a series of tasks that have to be accomplished before a viewer can see subtitles on a screen.</p>

                                <div id="language__section">
                                   <div class="lang_sing_box">
                                       <a>The creation of subtitle texts usually in SRT format. This involves transcription of speech from a video original.</a>
                                    </div>
                                </div>

                                <div id="language__section">
                                   <div class="lang_sing_box">
                                       <a> Subtitle translation into your required language. </a>
                                    </div>
                                </div>
                                <div id="language__section">
                                   <div class="lang_sing_box">
                                       <a> The translated text will then be adapted and broken into units, segments displayed on the screen. These will be time-coded and assembled to create a file formatted for subtitling (usually FILL IN). </a>
                                    </div>
                                </div>
                                <div id="language__section">
                                   <div class="lang_sing_box">
                                       <a>Finally, of course, there is the technical issue of actually putting the subtitles into the video. </a>
                                    </div>
                                </div>
                               

                                <p>Subtitle translation may be the subtlest tasks of all. In part, this is because a given speech segment may be far longer or shorter in one language than another. It may also require greater context to be comprehensible to people with another language and culture. It requires real expertise to make sure that the style and attitude of the original comes across correctly in the subtitles.</p>

                            </div>
                        </div>
                        <hr class="hr__divider">

                        <div class="row">
                            <div class="col-lg-1 mb-10"> 
                                <img src="{{('assets/images/solutions/subtitling/4.png')}}" alt="" class="small__imgs"> 
                            </div>
                            <div class="col-lg-11 mb-10">
                                <h4 class="translation__h">PoliLingua’s Subtitling Services</h4>
                                <p>As a subtitling company PoliLingua works with subtitle translators who are native speakers of the target language. They ensure that your subtitles sound just right and tell the right story to your audience. Other team members handle the technical aspects of synchronization, subtitle format, and, where needed, inserting the subtitles into the video. Subtitle files can be supplied in any of the supported formats you may require. PoliLingua provides confidence that your video will look and sound right to all your audiences around the world, wherever they live and whatever language they speak. Subtitling rates are generally set per minute of source video. We can give you a detailed quote based on the specifics of your project – source and target languages, time frames, sound quality and so forth. Let’s discuss how we can help you to reach all your target audiences. <a href=""><b class="__link"> Contact us </b></a>for more information or to <a href=""><b class="__link"> request a quote </b></a>.</p>

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