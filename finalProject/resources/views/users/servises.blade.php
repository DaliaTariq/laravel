@extends('front_layout.app')
@section('content')
<main id="hall">

    <div class="hall">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                           <div class="hall_image">
                           <img src="/{{$category->image}}" style="display:inline-block; width:auto; margin-bottom:5px;">
                           </div>
                        <h3 style="margin-left:40px; color:#737272;">{{$category->name}}</h3>
                    </div>
                </div>
            </div>
     </div>

<!-----------------------Page Content--------------------->

 
   


<section class="offers-page">
    <div class="container">

        <div class="offer">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="offer_Box">

                        <div class="offer_image">
                        <img src="{{asset('front/images/light.jpg')}}" alt="offer1">
                            </a>
                            <div class="details">
                              <p >

                              </p>
                                <h3 class="title">قاعات مميزة</h3>
                                <div class="rate">
                                <img class="rate" src="{{asset('front/images/loc (3).png')}}">
                                </div>

                                <a class="read_more">المزيد</a>
                                

                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="offer_Box">

                       <div class="offer_image">
                            <img src="{{asset('front/images/light.jpg')}}" alt="offer1">
                            </a>
                            <div class="details">
                              <p ></p>
                                <h3 class="title">قاعات مميزة</h3>
                                <div class="rate">
                                    <img class="rate" src="{{asset('front/images/loc (3).png')}}">
                                </div>

                                <a class="read_more">المزيد</a>
                                

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="offer_Box">

                        <div class="offer_image">
                            <img src="{{asset('front/images/light.jpg')}}" alt="offer1">
                            </a>
                            <div class="details">
                              <p ></p>
                                <h3 class="title">قاعات مميزة</h3>
                                <div class="rate">
                                    <img class="{{asset('front/images/loc (3).png')}}">
                                </div>

                                <a class="read_more">المزيد</a>
                              

                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="offer_Box">

                        <div class="offer_image">
                            <img src="{{asset('front/images/light.jpg')}}" alt="offer1">
                            </a>
                            <div class="details">
                              <p ></p>
                                <h3 class="title">قاعات مميزة</h3>
                                <div class="rate">
                                    <img class="rate" src="{{asset('front/images/loc (3).png')}}">
                                </div>

                                <a class="read_more">المزيد</a>
                            

                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="offer_Box">

                       <div class="offer_image">
                            <img src="{{asset('front/images/light.jpg')}}" alt="offer1">
                            </a>
                            <div class="details">
                              <p ></p>
                                <h3 class="title">قاعات مميزة</h3>
                                <div class="rate">
                                    <img class="rate" src="{{asset('front/images/loc (3).png')}}">
                                </div>

                                <a class="read_more">المزيد</a>
                      

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="offer_Box">

                        <div class="offer_image">
                            <img src="{{asset('front/images/light.jpg')}}" alt="offer1">
                            </a>
                            <div class="details">
                              <p ></p>
                                <h3 class="title">قاعات مميزة</h3>
                                <div class="rate">
                                    <img class="rate" src="{{asset('front/images/loc (3).png')}}">
                                </div>

                                <a class="read_more">المزيد</a>
                   

                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </section>
    <nav>
        <ul class="pagination justify-content-center">
            <li class="page-item"><a class="page-link active" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">التالي</a></li>
        </ul>
    </nav>

</main>
@include('front_includes.footer') 
@endsection