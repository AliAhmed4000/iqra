@extends('layouts.app')

@section('content')

    <section class="banner page__banner_top" id="retail__section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xl-12">
                    <div class="block">
                        <h1 class="mb-3 mt-3 baner_top_words">Retail</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
    <div class="icon-box-area pt-20 js--sticky-menu mob__mb" id="page_text_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 mb-10">
                       

                         <p>The consumer and retail industry is all about reaching out to many people to get them to buy their products. If retail companies want to expand, they need more clients. That is why they are trying to access new markets. However, issues arise when it comes to language and cultural barriers. In fact, over 70% of people spend the greatest amount of time on websites that are in their own language. This means that companies absolutely need good translation of their content. It helps to create an experience that feels local and welcoming to the client.</p>
                         <p>It’s not enough to just get your products and services in front of new markets, you have to consolidate, saturate, and regulate to move beyond borders effectively.</p>
                         <p>Successful expansion into new markets requires a deep appreciation of different cultures and language nuances. It’s why PoliLingua is the preferred language services provider for some of the best-known retailers in the world. With our consultancy-based approach, translation services are tailored to the precise needs of every client.</p>
                         <p><b>Content We Translate</b></p>

                        <div class="row">
                            <div class="col-lg-12 mb-10">
                                <div id="language__section">
                                   <div class="lang_sing_box">
                                       <a> Marketing Campaigns </a>
                                    </div>
                                </div>

                                <div id="language__section">
                                   <div class="lang_sing_box">
                                       <a> Brochures and Leaflets  </a>
                                    </div>
                                </div>

                                <div id="language__section">
                                   <div class="lang_sing_box">
                                       <a> Websites  </a>
                                    </div>
                                </div>

                                <div id="language__section">
                                   <div class="lang_sing_box">
                                       <a> E-commerce  </a>
                                    </div>
                                </div>

                                <div id="language__section">
                                   <div class="lang_sing_box">
                                       <a>Packaging  </a>
                                    </div>
                                </div>

                                <div id="language__section">
                                   <div class="lang_sing_box">
                                       <a> Branding and Copywriting </a>
                                    </div>
                                </div>

                                <div id="language__section">
                                   <div class="lang_sing_box">
                                       <a> Video Subtitling and Dubbing  </a>
                                    </div>
                                </div>

                                <div id="language__section">
                                   <div class="lang_sing_box">
                                       <a> Staff Training and Onboarding  </a>
                                    </div>
                                </div>

                                <div id="language__section">
                                   <div class="lang_sing_box">
                                       <a>HR Policy and Documentation</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="hr__divider">

                        <div class="row">
                            <div class="col-lg-1 mb-10"> 
                                <img src="{{('assets/images/industries/retail/1.png')}}" alt="" class="small__imgs"> 
                            </div>
                            <div class="col-lg-11 mb-10">
                                <h4 class="translation__h">Apparel Industry Localization and Translation</h4>
                                <p>Dress your brand for success. When you deal with employees, customers, and manufacturers across the globe, precision is key. You want to convey the right message the first time and avoid costly mistakes.
                                <br>  
                                No matter your market segment, PoliLingua has the experience and specialists who can expertly guide your brand’s messaging wherever your apparel can be found. Our dedicated team is available 24/7/365 to meet your needs.
                                We’re all dressed and ready to go.</p>
                            </div>
                        </div>
                        <hr class="hr__divider">

                        <div class="row">
                            <div class="col-lg-1 mb-10"> 
                                <img src="{{('assets/images/industries/retail/2.png')}}" alt="" class="small__imgs"> 
                            </div>
                            <div class="col-lg-11 mb-10">
                                <h4 class="translation__h">Translation and Localization for the Electronics Industry</h4>
                                <p>We have extensive experience in electronics translation and localization and business services. We can help you adapt your training materials, your advertising campaigns, and your user guides for every market you venture into. We also understand the regulatory nuances of your next target country.
                               </p>
                            </div>
                        </div>
                        <hr class="hr__divider">

                        <div class="row">
                            <div class="col-lg-1 mb-10"> 
                                <img src="{{('assets/images/industries/retail/3.png')}}" alt="" class="small__imgs"> 
                            </div>
                            <div class="col-lg-11 mb-10">
                                <h4 class="translation__h">Translation and Localization for Luxury Brands</h4>
                                <p>The image of a luxury brand is of paramount importance. Making sure that your image remains consistent across cultures is something PoliLingua can help you achieve. We have the experience, market awareness, and attention to detail to shepherd your brand into the global marketplace while maintain its air of exclusivity, refinement, and luxury.
                                You’re reknowned and beloved. So are we. We’re the ideal partner for your luxury brand.
                               </p>
                            </div>
                        </div>
                        <hr class="hr__divider">

                        <div class="row">
                            <div class="col-lg-1 mb-10"> 
                                <img src="{{('assets/images/industries/retail/4.png')}}" alt="" class="small__imgs"> 
                            </div>
                            <div class="col-lg-11 mb-10">
                                <h4 class="translation__h">Translation and Localization for the Cosmetics & Personal Care Industry</h4>
                                <p>Put on your best face no matter where you are. PoliLingua has unparalleled knowledge in the personal care sector.
                                  <br>
                                  Attention to detail is critically important when it comes to labeling, messaging, and each form of communication required in the business of personal care products. We can help you navigate cultural and regulatory barriers to get your products into the hands of those who want them.
                                </p>
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