@extends('layouts.app')

@section('content')
    <section class="banner page__banner_top" id="useful_resources__banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xl-12">
                    <div class="block">
                        <h1 class="mb-3 mt-3 baner_top_words">Useful resources</h1>
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
                        <div class="col-lg-3 mb-10"> 
                                <h4 class="useful_r_h">Useful resources</h4>

                        </div>
                            <div class="col-lg-9 mb-10">
                                <p>There are hundreds of ways a translation project can go off track – ridiculous deadlines, misapplied machine translation, poor project management. We are including below the ATA’s (American Translators’ Association) guide to buying translation services. Please download it in any of the languages below:</p>
                                <div>
                                    <a href="#" class="useful_link">Translation: getting it right (U.S. English)</a>
                                </div>
                                <div>
                                    <a href="#" class="useful_link">Translation - getting it right (U.K. English)</a>
                                </div>
                                <div>
                                    <a href="#" class="useful_link">Preklady - a jak na to. Pruvodce pro zadavatele prekladu (Czech)
                                    </a>
                                </div>
                                <div>
                                    <a href="#" class="useful_link">Traduction - faire les bons choix (French)</a>
                                </div>
                                <div>
                                    <a href="#" class="useful_link">Ubersetzung - keine Gluckssache (German)</a>
                                </div>
                                <div>
                                    <a href="#" class="useful_link">Vertalen - een kwestie van kwaliteit! (Dutch)</a>
                                </div>
                                <div>
                                    <a href="#" class="useful_link">Traduzione - Come ottenere il prodotto giusto! (Italian)</a>
                                </div>
                                <div>
                                    <a href="#" class="useful_link">Traduction les mots au kilo? (French)</a>
                                </div>
                                <div>
                                    <a href="#" class="useful_link">Traduction les mots au kilo? (French) </a>
                                </div>
                                <div>
                                    <a href="#" class="useful_link">Multilingual jobs - LocalHR</a>
                                </div>
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
