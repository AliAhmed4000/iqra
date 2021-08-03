@extends('layouts.app')

@section('content')

    <section class="banner page__banner_top" id="quality__banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xl-12">
                    <div class="block">
                        <h1 class="mb-3 mt-3 baner_top_words">Quality</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
    <div class="icon-box-area pt-20 pb-25 js--sticky-menu mob__mb" id="page_text_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 mb-10">
                        <p>
                            PoliLingua’s Quality Assurance Process for translation projects consists of a 3-step translation process : TEP (translation, editing, proofreading) and a final quality assessment (QA) performed by the project manager. Each of the three steps in the TEP process is completed by a different certified translator team with native speakers of the target language.
                        </p>
                        <hr class="hr__divider">

                        <div class="row">
                            <div class="col-lg-1 mb-10"> 
                                <img src="{{asset('public/assets/images/why-us/5.png')}}" alt="" class="small__imgs"> 
                        </div>
                            <div class="col-lg-11 mb-10">
                                <h4 class="translation__h">Translation</h4>
                                <p>Our first step for large projects is usually the development of a comprehensive glossary of terms specific to the client’s project. This process is managed by a terminology/ content manager whose sole function is to receive, interpret, convert, and implement terms via a dynamic glossary that is distributed and integrated across our teams of linguists. For technical content and other translations that require a strong knowledge of industry-specific information, we rely on subject-matter experts to ensure the correct usage of industry terminology. Our linguists have access to translation glossaries, authoritative and up-to-date dictionaries and industry-specific terminology tools. We strongly believe in the necessity to employ industry-expert translators as each industry relies on specific terminology and nomenclature that is ever-changing and critical to conducting its everyday activities</p>
                            </div>
                        </div>

                        <hr class="hr__divider">

                        <div class="row">
                            <div class="col-lg-1 mb-10"> 
                                <img src="{{asset('public/assets/images/why-us/6.png')}}" alt="" class="small__imgs"> 
                        </div>
                            <div class="col-lg-11 mb-10">
                                <h4 class="translation__h">Editing</h4>
                                <p>We combine tools and processes that ensure that correct terms are used at all times, fusing accuracy with time-efficiency. This process provides consistency, while allowing each linguist to submit adaptations and modifications where considered appropriate.</p>
                               
                            </div>
                        </div>

                        <hr class="hr__divider">

                        <div class="row">
                            <div class="col-lg-1 mb-10"> 
                                <img src="{{asset('public/assets/images/why-us/7.png')}}" alt="" class="small__imgs"> 
                        </div>
                            <div class="col-lg-11 mb-10">
                                <h4 class="translation__h">Proofreading/content management</h4>
                                <p>Proofreading is another control step, to define and correct spelling and grammar, correct formatting and address punctuation errors. In order to expose a text with no grammar, style and terminology mistakes there is a need of the proofreader expertise who is highly qualified linguistically. Depending on the client’s purpose for the target text the product undergoes and internal quality check or an external proofreading.

                            </p>
                            </div>
                        </div>

                        <hr class="hr__divider">

                        <div class="row">
                            <div class="col-lg-1 mb-10"> 
                                <img src="{{asset('public/assets/images/why-us/2.png')}}" alt="" class="small__imgs"> 
                        </div>
                            <div class="col-lg-11 mb-10">
                                <h4 class="translation__h">Quality Assessment</h4>
                                <p>Consequent to the completion of the work, the project manager approves its delivery and monitors further corrective actions required by the client or in response to in-house decisions. Lastly, the project manager ensures that the client has received the finished product, that it meets the client’s satisfaction, that all translation databases have been updated, and that the project has been archived.</p>

                                <img src="{{asset('public/assets/images/why-us/certified.jpg')}}" class="img-fluid certificate_img">

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
   