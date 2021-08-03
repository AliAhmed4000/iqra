@extends('layouts.app')

@section('content')

    <section class="banner page__banner_top" id="clients__banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xl-12">
                    <div class="block">
                        <h1 class="mb-3 mt-3 baner_top_words">Clients</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
    <div class="icon-box-area pt-20 js--sticky-menu mob__mb __clients " id="page_text_section">
        <div class="container" id="out_clients">
            <div class="row">
                <div class="col-lg-12 mb-10">
                        <p>
                           Our clients are at the core of our success. We are very proud of the work we do. It is our goal to provide you with the support and resources that you need, at an affordable rate. We have a vast array of clients from both small and large companies to non-profit organizations.
                        </p>
                        <p>Below is a list of some of the leading brands that trust Polilingua</p>
                </div>
               
            </div>
            @include('includes.clients')

        </div>
    </div>

   @endsection
   