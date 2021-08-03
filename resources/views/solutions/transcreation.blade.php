@extends('layouts.app')

@section('content')

    <section class="banner page__banner_top" id="transcreation__section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xl-12">
                    <div class="block">
                        <h1 class="mb-3 mt-3 baner_top_words">Transcreation Services</h1>
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
                                <img src="{{('assets/images/solutions/transcreation/1.png')}}" alt="" class="small__imgs"> 
                            </div>
                            <div class="col-lg-11 mb-10">
                                <h4 class="translation__h">Transcreation – What it Is and How it Works ?</h4>
                                <p>Transcreation is, from a certain perspective, the highest form of translation. Content native to your own language is not simply translated – it becomes a new text, one completely native to the target language. The transcreation process empowers you to connect to a foreign target audience in ways that would otherwise simply not be possible. Transcreation is the single most effective way to retain your message and focus when they cross cultural and linguistic borders. That’s precisely because the transcreation process means changing the words in which ideas are expressed to give them emotional impact in a new context. The transcreated content is designed to bring into play the (often very different) lexicon, phraseology, imagery and sequencing that will resonate most powerfully for the people you need to receive your message. Ultimately, transcreation is the art of talking to your audience in their internal language, so that they really hear what you have to say.</p>
                               
                            </div>
                        </div>
                        <hr class="hr__divider">


                    

                        <div class="row">
                            <div class="col-lg-1 mb-10"> 
                                 <img src="{{('assets/images/solutions/transcreation/2.png')}}" alt="" class="small__imgs"> 
                            </div>
                            <div class="col-lg-11 mb-10">
                                <h4 class="translation__h">Why do you need it ?</h4>
                                <p>Transcreation is particularly powerful when it comes to international (global) marketing. Slogans, taglines and other elements of marketing copy cannot be simply translated; your message can achieve its purpose only when it is recast in terms that have intrinsic meaning for another culture and language. All kinds of branded materials, including brochures and entire web sites, can be transcreated. And that makes it possible to introduce your content into a foreign market with maximum effect. PoliLingua’s transcreation services enable you reach foreign audiences in ways you never thought possible. We are a creative transcreation agency built to give you the power not just to reach out to people in their own languages, but also to tap into their common cultural expectations and preferences– a strategic key to effective global marketing. You might want to tailor your message for several foreign cultures to localize foreign customers’ experience on your web site. Or you might need to vault potential new customers’ awareness of a product or service in a foreign market to new heights. In all these cases, whatever your global marketing and advertising goals, transcreation is a crucial tool for success.</p>
                                

                                <table class="table transcreation__table">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>How?</th>
                                            <th>For?</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th>Marketing translation</th>
                                            <td>Close to source</td>
                                            <td>Blogs, newsletters, websites</td>
                                        </tr>
                                        <tr>
                                            <th>Transcreation</th>
                                            <td>Adapted for a region/market</td>
                                            <td>Slogans, campaigns, brochures…</td>
                                        </tr>
                                        <tr>
                                            <th>Original copy</th>
                                            <td>No source</td>
                                            <td>Taglines, slogans, fresh content unrelated to source</td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                        <hr class="hr__divider">

                         <div class="row">
                            <div class="col-lg-1 mb-10"> 
                                <img src="{{('assets/images/solutions/transcreation/3.png')}}" alt="" class="small__imgs"> 
                            </div>
                            <div class="col-lg-11 mb-10">
                                <h4 class="translation__h">Who ?</h4>
                                <p>Our transcreation experts are native speakers of the language of your target market, completely at home in its culture and business environment. They are also experienced copywriters, too, with a mastery of their country’s marketing language and style. We work with you and your partners so you remain confident that your materials are correctly targeted to create the results you want, and our competitive transcreation rates make the process easy. The PoliLingua team is designed to make you fluent in countries and cultures around the world, in every case providing you with the ideal transcreation experience. We’re here to help you achieve your goals around the world. Call us, ask a question, request a quote! Global success is a phone call away.</p>
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