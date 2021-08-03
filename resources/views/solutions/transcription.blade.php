@extends('layouts.app')

@section('content')

    <section class="banner page__banner_top" id="transcription__section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xl-12">
                    <div class="block">
                        <h1 class="mb-3 mt-3 baner_top_words">Transcription services</h1>
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
                                <img src="{{('assets/images/solutions/transcription/5.png')}}" alt="" class="small__imgs"> 
                            </div>
                            <div class="col-lg-11 mb-10">
                                <h4 class="translation__h">Transcription project estimate</h4>
                            </div>    

                        <div class="col-lg-12 mb-10">
                          <div class="row">
                            <div class="col-lg-4 mb-10 box__section_setting">
                              <i class="fa fa-language font__awesome" aria-hidden="true"></i>
                              <p>Langauge</p>
                              <select name="select" id="select" class="form-control">
                                <option value="0">select</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                              </select>
                            </div>
                            <div class="col-lg-4 mb-10 box__section_setting">
                              <i class="fa fa-clock font__awesome" aria-hidden="true"></i>
                              <p>Length</p>
                              <input type="number" name="" class="form-control" placeholder="0">
                            </div>
                            <div class="col-lg-4 mb-10 box__section_setting">
                              <i class="fa fa-users font__awesome" aria-hidden="true"></i>
                              <p>Speakers</p>
                              <select name="select" id="select" class="form-control">
                                <option value="0">select</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="4+">5+</option>
                              </select>
                            </div>
                          </div>
                        </div>

                        <div class="col-lg-12 mb-10">
                          <div class="row">
                            
                            <div class="col-lg-6 mb-10 box__section_setting checkbox__section">
                              <i class="fa fa-clock font__awesome" aria-hidden="true"></i>
                              <p>Delivery</p>
                              <input type="radio" id="" name="" value="">
                              <label for=""> Standart service</label><br>
                              <input type="radio" id="" name="" value="">
                              <label for=""> Rush 2 business days</label><br>
                              <input type="radio" id="" name="" value="">
                              <label for=""> 24 hours</label><br>
                            </div>

                            <div class="col-lg-6 mb-10 box__section_setting checkbox__section">
                              <i class="fa fa-clock font__awesome" aria-hidden="true"></i>
                              <p>Extras</p>
                              <input type="checkbox" id="" name="" value="">
                              <label for=""> checkbox__section</label><br>
                              <input type="checkbox" id="" name="" value="">
                              <label for=""> Strong accent</label><br>
                              <input type="checkbox" id="" name="" value="">
                              <label for=""> Background noise</label><br>
                              <input type="checkbox" id="" name="" value="">
                              <label for=""> Heavy background noise</label><br>
                            </div>

                            
                          </div>
                        </div>

                        <div class="col-lg-12 mb-10">
                          <div class="row">
                            <div class="col-lg-4 mb-10  ">
                              <p><b>Your Estimate</b></p>
                              <p>($0.60/min) <br> <b>$0.00</b></p>
                              
                            </div>

                            <div class="col-lg-4 mb-10  ">
                              <select name="select" id="select" class="form-control">
                                <option value="USD">USD</option>
                                <option value="EUR">EUR</option>
                                <option value="GBP">GBP</option>
                                <option value="ZAR">ZAR</option>
                              </select>
                            </div>

                            <div class="col-lg-4 mb-10 ">
                              <div class="mb-2">
                                <button type="submit" class="btn btn-primary btn__submit">Request a Quote</button>
                              </div>
                            </div>



                            
                          </div>
                        </div>



                        </div>

                        <hr class="hr__divider">

                        <div class="row">
                            <div class="col-lg-1 mb-10"> 
                                <img src="{{('assets/images/solutions/transcription/1.png')}}" alt="" class="small__imgs"> 
                            </div>
                            <div class="col-lg-11 mb-10">
                                <h4 class="translation__h">Transcription and typing</h4>
                                <p>PoliLingua provides transcription services and typing services in over 40 languages for all industries and professions at an affordable rate. We specialize in legal transcription, academic research transcription, financial, insurance and investigation transcription and general business typing and secretarial services.</p>

                                <p>Our clients upload their dictation, audio recordings of interviews, legal documents, court hearing recordings, teleconferences, podcasts or focus groups via our secure, cutting edge transcription workflow system. Our expert transcriptionists and proof-readers will deliver exceptional quality transcripts within your chosen timeframe. We can use your templates or tailor-make templates for you at no extra cost and we cater for all realistic deadlines.</p>
                            </div>
                        </div>
                        <hr class="hr__divider">

                        <div class="row">
                            <div class="col-lg-1 mb-10"> 
                                 <img src="{{('assets/images/solutions/transcription/2.png')}}" alt="" class="small__imgs"> 
                            </div>
                            <div class="col-lg-11 mb-10">
                                <h4 class="translation__h">Transcription types</h4>

                                <div id="language__section">
                                   <div class="lang_sing_box">
                                       <a> Academic transcription</a>
                                    </div>
                                </div>
                                <div id="language__section">
                                   <div class="lang_sing_box">
                                       <a> Interview transcription </a>
                                    </div>
                                </div>
                                <div id="language__section">
                                   <div class="lang_sing_box">
                                       <a> Market research transcription </a>
                                    </div>
                                </div>
                                <div id="language__section">
                                   <div class="lang_sing_box">
                                       <a> Medical transcription </a>
                                    </div>
                                </div>
                                <div id="language__section">
                                   <div class="lang_sing_box">
                                       <a> Legal transcription </a>
                                    </div>
                                </div>
                                <div id="language__section">
                                   <div class="lang_sing_box">
                                       <a> Audio transcription </a>
                                    </div>
                                </div>
                                <div id="language__section">
                                   <div class="lang_sing_box">
                                       <a> Conference transcription </a>
                                    </div>
                                </div>
                                <div id="language__section">
                                   <div class="lang_sing_box">
                                       <a> Foreign language transcription </a>
                                    </div>
                                </div>
                                <div id="language__section">
                                   <div class="lang_sing_box">
                                       <a> Business transcription </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                         <div class="row">
                            <div class="col-lg-1 mb-10"> 
                                <img src="{{('assets/images/solutions/transcription/3.png')}}" alt="" class="small__imgs"> 
                            </div>
                            <div class="col-lg-11 mb-10">
                                <h4 class="translation__h">Why choose PoliLingua’s Transcription Services</h4>
                                <p>Over the last 11 years PoliLingua has done thousands of hours of transcription. We have over 98% accuracy rate, all of the transcriptions are done by real people. Our transcriptionists are specialized in certain fields such as: medical, business, legal, interviews etc. They’ve transcribed all sorts of subjects, from molecular biology to astrophysics - and if they don’t recognize a term, they will research it on Google, Wikipedia or other sources.</p>

                                <p>Anyway, we can guarantee that you’re going to receive an accurate transcript from us. We have multilingual ongoing transcription projects for one of the biggest software companies in the field – Nuance Communications Inc, <a href=""><b class="__link"> please read the case study here</b></a>.</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-1 mb-10"> 
                                 <img src="{{('assets/images/solutions/transcription/4.png')}}" alt="" class="small__imgs"> 
                            </div>
                            <div class="col-lg-11 mb-10">
                                <h4 class="translation__h">Transcription process</h4>
                                <p>Go to our <a href=""><b class="__link">  request a transcription quote </b></a> page and upload your files (or direct us where we can download them) as well as some basic information. We Do The Rest.</p>

                                <div id="language__section">
                                   <div class="lang_sing_box">
                                       <a>Our project manager receives the files, checks them out.</a>
                                    </div>
                                </div>
                                <div id="language__section">
                                   <div class="lang_sing_box">
                                       <a>You receive an exact quote, usually within an hour or two but not more than 7 hours.</a>
                                    </div>
                                </div>
                                <div id="language__section">
                                   <div class="lang_sing_box">
                                       <a>Upon your confirmation our project manager assigns the job to the best available transcriptionist qualified for that subject. </a>
                                    </div>
                                </div>
                                <div id="language__section">
                                   <div class="lang_sing_box">
                                       <a> The transcriptionist will create a professional, formatted, accurate transcript from your recording. It will be saved in a text format of your choice (MS Word, TXT etc), so that you can easily search, copy or share with others. </a>
                                    </div>
                                </div>
                                <div id="language__section">
                                   <div class="lang_sing_box">
                                       <a>Project manager checks the files again to make sure it meets PoliLingua’s standards before emailing it to you on or before the due date requested.</a>
                                    </div>
                                </div>
                                <div id="language__section">
                                   <div class="lang_sing_box">
                                       <a>We offer 30 days payment terms for our regular clients. </a>
                                    </div>
                                </div>

                                <p>Our transcription service rate begins at $0.99 per minute of recording for general transcription. Go <a href=""><b class="__link"> here </b></a>to upload your files for an exact quote.</p>
                                
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