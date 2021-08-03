@extends('layouts.app')

@section('content')


    <section class="banner page__banner_top" id="multilingual_voice_over__section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xl-12">
                    <div class="block">
                        <h1 class="mb-3 mt-3 baner_top_words">Multilingual Voice Over</h1>
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
                            <h4 class="translation__h">1. Enter your search criteria </h4>
                        </div>
                        <div class="col-lg-12 mb-10">
                            <div class="row search_criteria_table">
                                <table class="table ">
                                    <thead>
                                        <tr>
                                            <th>Age</th>
                                            <th>Gender</th>
                                            <th>Choose Language </th>
                                            <th>Choose Dialect </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><input type="checkbox" id="" name="" value="dd">
                                            <label> <b> Child</b> </label>
                                            </td>
                                            <td>
                                                <input type="checkbox" id="" name="" value="dd">
                                                <label> <b> Male</b> </label>
                                            </td>
                                            <td>
                                                <select name="" id="" class="form-control">
                                                    <option value="language">language</option>
                                                    <option value="language">language</option>
                                                </select>
                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" id="" name="" value="dd">
                                            <label> <b> Teen</b> </label>
                                            </td>
                                            <td>
                                                <input type="checkbox" id="" name="" value="dd">
                                                <label> <b> Female</b> </label>
                                            </td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" id="" name="" value="dd">
                                            <label> <b> Young Adult</b> </label>
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" id="" name="" value="dd">
                                            <label> <b> Middle Aged</b> </label>
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" id="" name="" value="dd">
                                            <label> <b> Senior</b> </label>
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 mb-10">
                        <div class="row">
                                <h4 class="translation__h">2. Review demos and add to favorites </h4>
                        </div>

                        <div class="row">
                            <div class="table-responsive">
                                <table class="table table-striped table__favorites">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Commercial</th>
                                            <th>Informative</th>
                                            <th>Character</th>
                                            <th>Video</th>
                                            <th>Add to list</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Ilari H</td>
                                            <td><a href="#"><i class="fa fa-play-circle"></i></a></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><a href="#"><i class="fa fa-star"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>Ricky S</td>
                                            <td></td>
                                            <td><a href="#"><i class="fa fa-play-circle"></i></a></td>
                                            <td><a href="#"><i class="fa fa-play-circle"></i></a></td>
                                            <td></td>
                                            <td><a href="#"><i class="fa fa-star"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>Caroline B</td>
                                            <td><a href="#"><i class="fa fa-play-circle"></i></a></td>
                                            <td><a href="#"><i class="fa fa-play-circle"></i></a></td>
                                            <td></td>
                                            <td></td>
                                            <td><a href="#"><i class="fa fa-star"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>Juliette G</td>
                                            <td><a href="#"><i class="fa fa-play-circle"></i></a></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><a href="#"><i class="fa fa-star"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>Debbie L</td>
                                            <td><a href="#"><i class="fa fa-play-circle"></i></a></td>
                                            <td><a href="#"><i class="fa fa-play-circle"></i></a></td>
                                            <td><a href="#"><i class="fa fa-play-circle"></i></a></td>
                                            <td><a href="#"><i class="fa fa-play-circle"></i></a></td>
                                            <td><a href="#"><i class="fa fa-star"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>James C</td>
                                            <td><a href="#"><i class="fa fa-play-circle"></i></a></td>
                                            <td><a href="#"><i class="fa fa-play-circle"></i></a></td>
                                            <td><a href="#"><i class="fa fa-play-circle"></i></a></td>
                                            <td><a href="#"><i class="fa fa-play-circle"></i></a></td>
                                            <td><a href="#"><i class="fa fa-star"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>Liz A</td>
                                            <td><a href="#"><i class="fa fa-play-circle"></i></a></td>
                                            <td><a href="#"><i class="fa fa-play-circle"></i></a></td>
                                            <td><a href="#"><i class="fa fa-play-circle"></i></a></td>
                                            <td><a href="#"><i class="fa fa-play-circle"></i></a></td>
                                            <td><a href="#"><i class="fa fa-star"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>Daniel D</td>
                                            <td><a href="#"><i class="fa fa-play-circle"></i></a></td>
                                            <td><a href="#"><i class="fa fa-play-circle"></i></a></td>
                                            <td><a href="#"><i class="fa fa-play-circle"></i></a></td>
                                            <td><a href="#"><i class="fa fa-play-circle"></i></a></td>
                                            <td><a href="#"><i class="fa fa-star"></i></a></td>
                                        </tr>

                                       
                                    </tbody>
                                </table>
                            </div>
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

  