@extends('layouts.app')

@section('content')

    <section class="banner page__banner_top" id="desktop_publishing_and_typesetting__section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xl-12">
                    <div class="block">
                        <h1 class="mb-3 mt-3 baner_top_words">Desktop Publishing and Typesetting</h1>
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
                                <img src="{{('assets/images/solutions/desktop_publishing/1.png')}}" alt="" class="small__imgs"> 
                            </div>
                            <div class="col-lg-11 mb-10">
                                <h4 class="translation__h">What Is Desktop Publishing ?</h4>
                                <p>Desktop publishing is the use of a personal computer or workstation to produce high-quality documents containing text and graphics formatted for a single-page publication. For instance, desktop publishing is utilized to create printed material such as book covers, brochures, and files.</p>

                                <p>As well as offering translation and interpreting services, PoliLingua has an experienced team of in-house designers to assist you in your desktop publishing requirements.</p>

                            </div>
                        </div>
                        <hr class="hr__divider">

                        <div class="row">
                            <div class="col-lg-1 mb-10"> 
                                 <img src="{{('assets/images/solutions/desktop_publishing/2.png')}}" alt="" class="small__imgs"> 
                            </div>
                            <div class="col-lg-11 mb-10">
                                <h4 class="translation__h">Our Desktop Publishing and Typesetting Services</h4>
                                <p>PoliLingua provides expert design services for a wide variety of products, including:</p>

                                <div id="language__section">
                                   <div class="lang_sing_box">
                                       <a> Point of sale displays</a>
                                    </div>
                                </div>
                                <div id="language__section">
                                   <div class="lang_sing_box">
                                       <a> Retail packaging</a>
                                    </div>
                                </div>
                                <div id="language__section">
                                   <div class="lang_sing_box">
                                       <a> Trade show exhibits</a>
                                    </div>
                                </div>
                                <div id="language__section">
                                   <div class="lang_sing_box">
                                       <a> Promotional materials</a>
                                    </div>
                                </div>
                                <div id="language__section">
                                   <div class="lang_sing_box">
                                       <a> User manuals</a>
                                    </div>
                                </div>
                                <div id="language__section">
                                   <div class="lang_sing_box">
                                       <a> Books</a>
                                    </div>
                                </div>
                                <div id="language__section">
                                   <div class="lang_sing_box">
                                       <a> Brochures, etc.</a>
                                    </div>
                                </div>

                                <p>PoliLingua services provide experts in a number of desktop publishing applications, including popular Adobe products such as Photoshop, InDesign, Illustrator, as well as CorelDRAW, PageMaker and more – to bring you the most professional results.</p>

                                <p>Our in-house designers are experts not only in creating the right graphics and layout for your business, but also in getting this across in a wide range of languages. This includes the use of multiple language fonts and word processing software.</p>
                                <p>Our team are also experts in foreign and cultural conventions in the printed word, helping to ensure your message is displayed in the best possible way to a wide range of audiences. All of our professionals are highly qualified translators, making sure PoliLingua is able to meet all of your needs.</p>

                                <p>You can either give us your requirements to start the project from scratch, or we can adapt existing documents to be used in different languages – alerting you to any foreign-language conventions that may affect the readability of your product.</p>
                           
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