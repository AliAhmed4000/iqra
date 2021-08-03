@extends('layouts.app')

@section('content')

    <section class="banner page__banner_top" id="request_a_quote__banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xl-12">
                    <div class="block">
                        <h1 class="mb-3 mt-3 baner_top_words">Request A Quote</h1>
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
                            
                            <div class="col-lg-5 offset-lg-4 mb-10">
                                <form id="" class="form__clr_setting">

                                    <div class="row">
                                        <div class="col-lg-6 mb-10">
                                            <div class="mb-3">
                                                <label > <b> First Name: *</b></label>
                                                <input type="text" class="form-control" id="" placeholder="First Name" required="required">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-10">
                                            <div class="mb-3">
                                                <label > <b> Company Name</b></label>
                                                <input type="text" class="form-control" id="" placeholder="Company Name">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-10">
                                            <div class="mb-3">
                                                <label > <b> Email: *</b></label>
                                                <input type="email" class="form-control" id="" placeholder="Email" required="">
                                            </div>
                                        </div>

                                        <div class="col-lg-6 mb-10">
                                            <div class="mb-3">
                                                <label > <b> Phone Number: *</b></label>
                                                <input type="text" class="form-control" id="" placeholder="Phone Number" required="">
                                            </div>
                                        </div>

                                        <div class="col-lg-6 mb-10">
                                            <div class="mb-3">
                                                <label > <b> Directline:</b></label>
                                                <input type="text" class="form-control" id="" placeholder="Directline">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-10">
                                            <div class="mb-3">
                                                <label > <b> Source Language: *</b></label>
                                                <input type="text" class="form-control" id="" placeholder="Source Language" required="">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 mb-10">
                                            <div class="mb-3">
                                                <label > <b> Target Language: *</b></label>
                                                <input type="text" class="form-control" id="" placeholder="Target Language" required="">
                                            </div>
                                        </div>

                                    </div>
                                    
                                    <div class="mb-2">
                                        <button type="submit" class="btn btn-primary btn__submit btn__red_border">Submit</button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-lg-7 mb-10">
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>

   @endsection
   