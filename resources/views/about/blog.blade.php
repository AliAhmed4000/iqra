@extends('layouts.app')

@section('content')

    <section class="banner page__banner_top" id="blog__banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xl-12">
                    <div class="block">
                        <h1 class="mb-3 mt-3 baner_top_words">Blog</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
    <div class="icon-box-area pt-20 js--sticky-menu mob__mb" id="page_text_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 mb-10" id="blog_posts">
                    <div class=" mb-30 blog__set" >
                        <div>
                            <h4>Top differences between Canadian and American English</h4>
                            <hr>
                        </div>
                        <div class="created-blog">
                            <span class="__date">Apr 26, 2021</span>
                            <span>|</span>
                            <span>
                                <a href="#" class="text_wt_date">
                                    Translation services
                                </a>
                            </span>
                        </div>
                        <a href="#"> <img src="{{asset('public/assets/images/blog/1.png')}}" class="img-fluid"></a>
                        <div class="excerpt">
                          This moment will come. In a month or a week or a day, your company will reach the point when everyone realizes - Henry doesn’t understand what we are talking about. We need to translate everything. Or maybe it will be the new boss who will get interested...
                            <a class="rd_mr_btn" href="">
                                Read more
                            </a>
                        </div>
                    </div>

                    <div class=" mb-30 blog__set" >
                        <div>
                            <h4>Top differences between Canadian and American English</h4>
                            <hr>
                        </div>
                        <div class="created-blog">
                            <span class="__date">Apr 26, 2021</span>
                            <span>|</span>
                            <span>
                                <a href="#" class="text_wt_date">
                                    Translation services
                                </a>
                            </span>
                        </div>
                        <a href="#"> <img src="{{asset('public/assets/images/blog/24569.jpg')}}" class="img-fluid"></a>
                        <div class="excerpt">
                            Once upon a time, there was a language that was used solely by the British people. It had many dialects, some of which were so - ahem - unique that sometimes it took some time even for English speakers to realize it was English they'd just heard.&nbsp;With its...
                            <a class="rd_mr_btn" href="">
                                Read more
                            </a>
                        </div>
                    </div>

                    <div class=" mb-30 blog__set" >
                        <div>
                            <h4>How to translate a WordPress website?</h4>
                            <hr>
                        </div>
                        <div class="created-blog">
                            <span class="__date">Apr 26, 2021</span>
                            <span>|</span>
                            <span>
                                <a href="#" class="text_wt_date">
                                    Multilingual SEO
                                </a>
                            </span>
                        </div>
                        <a href="#"> <img src="{{asset('public/assets/images/blog/95055.jpg')}}" class="img-fluid"></a>
                        <div class="excerpt">
                            Why translating WordPress? Exporting the WordPress content ...
                            <a class="rd_mr_btn" href="">
                                Read more
                            </a>
                        </div>
                    </div>

                    <div class=" mb-30 blog__set" >
                        <div>
                            <h4>What are the differences between European and Canadian French?</h4>
                            <hr>
                        </div>
                        <div class="created-blog">
                            <span class="__date">Apr 26, 2021</span>
                            <span>|</span>
                            <span>
                                <a href="#" class="text_wt_date">
                                    Multilingual SEO
                                </a>
                            </span>
                        </div>
                        <a href="#"> <img src="{{asset('public/assets/images/blog/35736.jpg')}}" class="img-fluid"></a>
                        <div class="excerpt">
                            As you may know, French is spoken not only in France and Belgium but in many countries in Africa and in one particular country in North America - Canada. How did it happen? About 200-300 years ago, European countries were on the run to conquer as much territory...
                            <a class="rd_mr_btn" href="">
                                Read more
                            </a>
                        </div>
                    </div>

                </div>

                <div class="col-lg-3 mb-10" id="language__section">
                   <h4>Blog Category</h4>

                   <div class="lang_sing_box">
                       <a href=""> Multilingual SEO </a>
                    </div>
                    <div class="lang_sing_box">
                       <a href=""> Interpretation </a>
                    </div>
                    <div class="lang_sing_box">
                       <a href=""> Language and Culture </a>
                    </div>
                    <div class="lang_sing_box">
                       <a href=""> Translation technology </a>
                    </div>
                    <div class="lang_sing_box">
                       <a href=""> Language services industry </a>
                    </div>
                    <div class="lang_sing_box">
                       <a href=""> Multilingualism </a>
                    </div>
                    <div class="lang_sing_box">
                       <a href="">  Translation industry news </a>
                    </div>
                    <div class="lang_sing_box">
                       <a href=""> Translation services </a>
                    </div>
                    <div class="lang_sing_box">
                       <a href=""> Translation and Literature </a>
                    </div>


                    <br>
                    <form id="form_aside">
                        <div class="mb-3">
                            <p style="color: black;">Subscribe and start receiving our news</p>
                        </div>
                       
                        <div class="mb-3">
                            <input type="email" class="form-control" id="" placeholder="Please Enter your Email">
                        </div>
                      
                        <div class="mb-2">
                            <button type="submit" class="btn btn-primary btn__submit">Confirm</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>

   @endsection