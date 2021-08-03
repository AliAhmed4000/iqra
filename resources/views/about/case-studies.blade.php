@extends('layouts.app')

@section('content')

    <section class="banner page__banner_top" id="case_studies__banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xl-12">
                    <div class="block">
                        <h1 class="mb-3 mt-3 baner_top_words">Case studies</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
     <div class="icon-box-area pt-20 js--sticky-menu mob__mb case__studies_imgs" id="page_text_section">
        <div class="container">
            <div class="row">
                 <div class="col-lg-9 mb-10">
                     <div class="container" id="img__section">
            
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-icon-box">
                        <img  src="{{asset('public/assets/images/case_studies/1.jpg')}}" alt="" class="img-fluid w-100 img__height img-responsive img__set">
                        <div class="icon-box-content">
                            <h6 class="iconbox-content-heading">Limagrain Europe Case Study </h6>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-icon-box">
                        <img  src="{{asset('public/assets/images/case_studies/2.jpg')}}" alt="" class="img-fluid w-100 img__height img-responsive">
                        <div class="icon-box-content">
                            <h6 class="iconbox-content-heading">Samsung Case Study  </h6>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-icon-box">
                        <img  src="{{asset('public/assets/images/case_studies/3.jpg')}}" alt="" class="img-fluid w-100 img__height img-responsive">
                        <div class="icon-box-content">
                            <h6 class="iconbox-content-heading">Edu Zece Case Study  </h6>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-icon-box">
                        <img  src="{{asset('public/assets/images/case_studies/4.jpg')}}" alt="" class="img-fluid w-100 img__height img-responsive">
                        <div class="icon-box-content">
                            <h6 class="iconbox-content-heading">LinkedIn Austria GmbH Case Study  </h6>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-icon-box">
                        <img  src="{{asset('public/assets/images/case_studies/5.jpg')}}" alt="" class="img-fluid w-100 img__height img-responsive">
                        <div class="icon-box-content">
                            <h6 class="iconbox-content-heading">Nuance Case Study </h6>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-icon-box">
                        <img  src="{{asset('public/assets/images/case_studies/6.jpg')}}" alt="" class="img-fluid w-100 img__height img-responsive">
                        <div class="icon-box-content">
                            <h6 class="iconbox-content-heading">Closed Captioning for TV Drama Series - Case Study </h6>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-icon-box">
                        <img  src="{{asset('public/assets/images/case_studies/7.jpg')}}" alt="" class="img-fluid w-100 img__height img-responsive">
                        <div class="icon-box-content">
                            <h6 class="iconbox-content-heading">Amazon Case Study  </h6>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-icon-box">
                        <img  src="{{asset('public/assets/images/case_studies/8.jpg')}}" alt="" class="img-fluid w-100 img__height img-responsive">
                        <div class="icon-box-content">
                            <h6 class="iconbox-content-heading">Microsoft Case Study </h6>
                            
                        </div>
                    </div>
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