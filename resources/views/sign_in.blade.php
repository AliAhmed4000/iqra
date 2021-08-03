@extends('layouts.app')

@section('content')

    <section class="banner page__banner_top" id="sign_in__banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xl-12">
                    <div class="block">
                        <h1 class="mb-3 mt-3 baner_top_words">Sign In</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
     <div class="icon-box-area pt-20 js--sticky-menu mob__mb" id="page_text_section">
        <div class="container">
                <div class="row">
                    <div class="col-lg-12 mb-10">
                        <div class="row">
                            <div class="col-lg-4 mb-10">
                                <h4 class="useful_r_h">Sign In</h4>
                            </div>
                            <div class="col-lg-8 mb-10">
                                <form id="" class="form__clr_setting">
                                    <div class="row">
                                        <div class="col-lg-6 mb-10">
                                            <div class="mb-3">
                                                <label > <b> Email</b></label>
                                                <input type="email" class="form-control" id="" placeholder="Email *">
                                            </div>
                                            <div class="mb-3">
                                                 <label > <b> Password</b></label>
                                                <input type="password" class="form-control" id="" placeholder="Password *">
                                            </div>
                                             <div class="mb-0">
                                                 <label><a href="" class="forgot__link"> <b> Forgot password?</b></a></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-2">
                                        <button type="submit" class="btn btn-primary btn__submit btn__red_border">Sign In</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>

   @endsection
   