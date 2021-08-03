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
                            <div class="col-lg-12 mb-10">
                                <p>Subtitling is an extremely effective and indispensable part of most video and audio production nowadays, in particular with videos’ ability of global reach. Through the process of subtitling, transcription acquires immediate value in that it provides a written version of a speech, video, or other audio file, which renders videos considerably more captivating. While video and audio recordings are exceptional advents of modern technology, much of audiences across the world comprise visual learners, which means that most information won’t sink in until it has been read.</p>
                                <p>That’s where PoliLingua comes in. As a human-produced transcription service, we offer credible subtitles that are adequately formatted, legible, and timely delivered. We understand the importance of getting your subtitles on time; hence, we will do our best to ensure you get what you need when you need it.</p>
                                <p>PoliLingua is distinguished by superior customer service, efficiency, quality, and reach – thanks to the relatively large number of languages covered. We value accountability and transparency and are dedicated to consistently following the specification agreed with the client.</p>
                               
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 mb-10">
                                <h4 class="translation__h">Localized Subtitling</h4>

                                <p>Localization plays a crucial role in our transcription and subtitling services. To guarantee a properly localized transcription and thus and precisely subtitled project, PoliLingua hires native linguists. They take into consideration cultural connotations and ensure an authentically localized service.  </p>
                                <p>If you are ambivalent whether to choose subtitling or voiceover, please get in touch for professional guidance. To receive a free quote, please fill out the form and upload your document. A subtitling project manager will receive the request and respond with a detailed quotation as soon as possible.</p>
                               
                            </div>
                        </div>
                </div>

                <div class="col-lg-3 mb-10">
                     <form id="form_aside">
                        <div class="mb-3">
                            <h4>Поговорите с нами</h4>
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" id="" placeholder="Полное Имя *">
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" id="" placeholder="Эл. Почта *">
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" id="" placeholder="Телефон *">
                        </div>
                        <div class="mb-2">
                            <input type="file" class="form-control file_ch_box" id="">
                        </div>
                        <div class="mb-1">
                            <p class="ad_more_f"><i class="fa fa-plus"></i>   Добавить ещё файл</p>
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" placeholder="Заметки" rows="5"></textarea>
                        </div>
                        <div class="mb-2">
                            <button type="submit" class="btn btn-primary btn__submit">Отправить</button>
                        </div>
                        <div class="mb-1">
                            <a href="#"><button class="btn btn-primary btn__r_quote">или запросите <br> подробный расчет</button></a>
                        </div>
                    </form>
                   
                </div>
            </div>
        </div>
    </div>

   @endsection