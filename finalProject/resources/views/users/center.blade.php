@extends('front_layout.app',['categories'=>$forNav])
@section('content')
<main id="hall">
    <div class="hall">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="hero_image">
                    <div class="overlay">
                   
                    </div>
                    <img src="{{asset('front/images/salon1.jpg')}}">
                    </div>
                   
                </div>
            </div>

         

            <div class="page_content">
                <div class="row">
                        <div class="col-12 col-sm-5 col-md-4">
                            <div class="discription">
                                <h5>
                                        <i class="fas fa-file-signature"></i>
                                        {{$center->name}}
                                </h5>
                                <h5>
                                        <i class="fas fa-map-marker-alt"></i>
                                        {{$center->address}}                               </h5>
                                <h5>
                                        <i class="fas fa-mobile-alt"></i>
                                        {{$center->mobile}}
                                </h5>
                                <h5>
                                        <i class="fab fa-whatsapp"></i>
                                        {{$center->watts}}
                                    </h5>
                                <h5>
                                        <i class="fas fa-envelope"></i>
                                        خدمات إضافية
                                </h5>

                                <p>
                                       {{$center->description}} 
                                </p>

                               <div class="contact_info">
                                   
                                    <ul>
                                          
                                            <li> <a href=" {{$center->facebook}} "> <i class="fab fa-facebook-f"></i></a></li>
                                            <li> <a href=" {{$center->enestegram}} "> <i class="fab fa-instagram"></i></a></li>
                                            <li> <a href=" {{$center->snapChat}} "> <i class="fab fa-snapchat-ghost"></i></a></li>
                                        </ul>
                               </div>
                            </div>
                        </div>
                    <div class="col-12 col-sm-7 col-md-8">
                        <div class="content_image">
                        <img src="/{{$center->image}}" style="width:100%;">
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</main>
@include('front_includes.footer') 
@endsection