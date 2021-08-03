@extends('layouts.app')

@section('content')

    <section class="banner page__banner_top" id="why_us__banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xl-12">
                    <div class="block">
                        <h1 class="mb-3 mt-3 baner_top_words">Why Us</h1>
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
                            PoliLingua specializes in translation, localization and managed language solutions for clients both large and small, from corporate, government and private sectors. Our project management teams offer a professional and friendly service with an in-depth understanding of project requirements. We work with total respect for our clients' deadlines and budgets.
                        </p>

                        <div class="row">
                            <div class="col-lg-1 mb-10"> 
                                <img src="{{('public/assets/images/why-us/1.png')}}" alt="" class="small__imgs"> 
                        </div>
                            <div class="col-lg-11 mb-10">
                                <h4 class="translation__h">Languages</h4>
                                <p>PoliLingua offers professional translation & localization services in over 150 languages and dialects. We provide a full suite of language services and specialize in legal translation, life sciences translation, finance, publishing and media, IT and software etc. For a full list of services and industries, please click here.</p>
                                <p>Please browse through the multitude of language combinations we support. We constantly update our language list. Please contact us if you do not find your language, we might still be able to help you.</p>
                            </div>
                        </div>

                        <hr class="hr__divider">

                        <div class="row">
                            <div class="col-lg-1 mb-10"> 
                                <img src="{{('public/assets/images/why-us/2.png')}}" alt="" class="small__imgs"> 
                        </div>
                            <div class="col-lg-11 mb-10">
                                <h4 class="translation__h">Quality</h4>
                                <p>We use only translators carefully selected to match the subject matter and content of your project. Our translations meet and exceed international quality standards. Upon request, we will provide you with a statement which certifies the accuracy of our translations.</p>
                                <p>If you are not satisfied with a completed translation, we will make corrections free of charge, until it meets your full satisfaction. If there are any issues or questions with one of our translations, we will work with you until you are completely satisfied with the quality and accuracy of your translations.</p>
                                <p>Our pride lies in the superior talent of our experienced translators, efficient editors and competent content managers and proofreaders. The quality control process ensures that the final product has outstanding quality and reads as if originally written in the target language. At PoliLingua we have a proven track record of providing high-quality translation services.</p>
                            </div>
                        </div>

                        <hr class="hr__divider">

                        <div class="row">
                            <div class="col-lg-1 mb-10"> 
                                <img src="{{('public/assets/images/why-us/3.png')}}" alt="" class="small__imgs"> 
                        </div>
                            <div class="col-lg-11 mb-10">
                                <h4 class="translation__h">Best price options</h4>
                                <p>Our main goal is to provide high-quality translation services and solutions that are stress-free, budget-saving and cost-effective. We don’t charge literally a penny more than the true value of the service.</p>
                            </div>
                        </div>

                        <hr class="hr__divider">

                        <div class="row">
                            <div class="col-lg-1 mb-10"> 
                                <img src="{{('public/assets/images/why-us/4.png')}}" alt="" class="small__imgs"> 
                        </div>
                            <div class="col-lg-11 mb-10">
                                <h4 class="translation__h">Technology and CAT tools</h4>
                                <p>We believe in using the brilliance of people and technology to provide precise and reliable translations. In order to increase the efficiency, save time and raise client’s satisfaction we use CAT tools, neural MT, specialized translation memories. We create and maintain TMs and Term bases for our loyal client thus reducing their localization costs.</p>
                                <p>We work with the most popular and well-known CAT tools. Our translators have knowledge of and/or license for at least one of the big players on the market: SDL Trados Studio, Wordfast (Classic & Pro), memoQ, Déjà Vu, Across.</p>
                            </div>
                        </div>

                        <hr class="hr__divider">

                        <div class="row">
                            <div class="col-lg-1 mb-10"> 
                                <img src="{{('public/assets/images/why-us/5.png')}}" alt="" class="small__imgs"> 
                        </div>
                            <div class="col-lg-11 mb-10">
                                <h4 class="translation__h">Translation Memory and Translation Glossary</h4>
                                <p>Translation memory is a database which previous source and target translations for easy reference while working.  TM is suitable for translating technical documentation and documents containing specialized vocabularies. By using it:</p>
                                <p><strong>·</strong> We accelerate the overall translation process; since translation memories "remember" previously translated material.</p>

                                <p><strong>·</strong>· We ensure that the translated documents are consistent, including common definitions, phrasings and terminology</p>
                                <p><strong>·</strong>· We reduce costs of long-term translation projects</p>

                            <img src="{{('public/assets/images/why-us/certified.jpg')}}" class="img-fluid certificate_img">
                            
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
   