@extends('layouts.app')

@section('content')

    <section class="banner page__banner_top" id="register__banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xl-12">
                    <div class="block">
                        <h1 class="mb-3 mt-3 baner_top_words">Register</h1>
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
                                <h4 class="useful_r_h">Register</h4>
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
                                                <label > <b> First Name</b></label>
                                                <input type="text" class="form-control" id="" placeholder="First Name *">
                                            </div>
                                            <div class="mb-3">
                                                <label > <b> Last Name</b></label>
                                                <input type="text" class="form-control" id="" placeholder="Last Name *">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-10">
                                            <div class="mb-3">
                                                <label > <b> Password</b></label>
                                                <input type="password" class="form-control" id="" placeholder="Password *">
                                            </div>
                                            <div class="mb-3">
                                                <label > <b> Confirm Password</b></label>
                                                <input type="password" class="form-control" id="" placeholder="Confirm Password *">
                                            </div>
                                            <div class="mb-3">
                                                <label > <b> I am:</b></label>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="" checked="">
                                                    <label class="form-check-label">
                                                        Customer
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" >
                                                    <label class="form-check-label">
                                                        Vendor/Translator
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-2">
                                        <button type="submit" class="btn btn-primary btn__submit btn__red_border">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>

   @endsection
   