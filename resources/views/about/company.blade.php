@extends('layouts.app')

@section('content')

    <section class="banner page__banner_top" id="company__banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xl-12">
                    <div class="block">
                        <h1 class="mb-3 mt-3 baner_top_words">Company</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
    <div class="icon-box-area pt-40 pb-25 js--sticky-menu mob__mb" id="page_text_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 mb-10">
                        <p>PoliLingua was founded in November 2002. The business was born out as a translation service provider and, in order to meet our clients’ demands, gradually expanded to localization, transcription services, voice over, subtitling and multilingual SEO. Many clients only use the PoliLingua translation module, but increasingly clients seek to benefit from integrating our services into the overall package.</p>

                         <p>We operate from London, UK and Chisinau, Moldova with representations in Berlin, Paris, Milan and Madrid. Right from the start we have welcomed large and small clients, from corporations to one-man consultancies.</p>

                         <h4 class="pt-20">Vision </h4>
                         <p>Help clients succeed on global markets by providing them with the best possible language services.</p>

                         <h4 class="pt-20">Mission targets </h4>

                        <div class="alert alert-danger clr_gry_light">
                            offer a range of services that make our clients’ lives easier;
                        </div>
                        <div class="alert alert-danger clr_gry_dark">
                            provide the highest levels of service and reliability;
                        </div>
                        <div class="alert alert-danger clr_gry_light">
                            develop excellent client and supplier relationships;
                        </div>
                        <div class="alert alert-danger clr_gry_dark">
                            ensure employee satisfaction and engagement;
                        </div>
                        <div class="alert alert-danger clr_gry_light">
                            yield profit and continue to grow our business!
                        </div>

                        <h4 class="pt-20">Principles and values </h4>

                        <p>Above all, we care about providing the best service possible to our clients! We have strong values when doing business with you to guarantee you the best experience you deserve.</p>

                        <p><b><strong>P</strong>rofessionalism —</b> All members of staff aim to provide a top quality level in line with their skills regarding the tasks assigned.  Native translators with extensive experience and defined areas of expertise.</p>

                        <p><b><strong>O</strong>pen-mindedness —</b>We know it takes people with different ideas, strengths, interests, and cultural backgrounds to make our company succeed. We encourage healthy debate and differences of opinion.</p>

                        <p><b><strong>L</strong>oyalty  —</b> We take our reputation seriously, which is why we have strict controls regarding authorized communication among PoliLingua staff, vendors, and clients.</p>

                        <p><b><strong>I</strong>ntegrity —</b> — We are consistently open, honest, ethical, genuine and correct with both our customers and linguists – from correct quotes and to on-time payments for each vendor.</p>

                        <p><b><strong>L</strong>eadership —</b> We lead the way forward. We take the courage to shape a better future by building bridges between languages and cultures.</p>

                        <p><b><strong>I</strong>ngenuity —</b>Being intuitive and ingenious we always bring satisfaction to our clients and presume the market’s demands.</p>


                        <h4 class="pt-20">Memberships</h4>
                        <p>Part of PoliLingua philosophy is continuous growth and collaboration. That is why we became members of networks that deliver value, a platform for information exchange, benchmarking, professional development. Being a member of the Globalization and Localization Association (GALA) we always stay on top of trends and language technologies, we build solutions and skills.</p>

                        <p>Belonging to a professional organization such as American Translators Association (ATA) means being professional. Our affiliation to ATA signals commitment to excellence and service.</p>

                        <p>Being a member of European Language Industry Association (ELIA) we proudly participate at events and initiatives that are highly relevant to the needs and interests of language companies with a European business focus.</p>

                        <p>We must also mention The Institute of Translation and Interpreting (ITI), which is a great platform for connecting with valuable linguists. By adhering to ITI we became a part of a supportive, professional community and a member of a globally respected body.</p>
                        <p>We maintain existing relationships and we are always looking to further expand our network.</p>

                        <div>
                            <a href="#"><button class="btn btn__default">Dowmload Our Presentation</button></a>
                            <a href="#"><button class="btn btn__default">Online cost calculator</button></a>
                            <a href="#"><button class="btn btn__default">Get a Quote</button></a>
                        </div>
                </div>

                <div class="col-lg-3 mb-10">
                    @include('includes.form_aside')
                   
                </div>
            </div>
        </div>
    </div>

   @endsection