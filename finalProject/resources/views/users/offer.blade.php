@extends('front_layout.app',['categories'=>$forNav])
@section('content')
<main id="hall">
    <div class="hall">



        <div class="container">
            <div class="page_content">
                <div class="row">
                    <div class="col-12 col-sm-5 col-md-4">
                        <div class="discription">
                            <h5>
                                <i class="fas fa-file-signature"></i>
                                {{$offer->name}}
                            </h5>
                            <h5>
                                <i class="fas fa-map-marker-alt"></i>
                                {{$offer->address}} </h5>
                            <h5>
                                <i class="fas fa-mobile-alt"></i>
                                {{$offer->mobile}}
                            </h5>
                            <h5>
                                <i class="fab fa-whatsapp"></i>
                                {{$offer->watts}}
                            </h5>
                            <h5>
                                <i class="fas fa-envelope"></i>
                                خدمات إضافية
                            </h5>

                            <p>
                                {{$offer->description}}
                            </p>

                            <div class="contact_info">

                                <ul>

                                    <li> <a href=" {{$offer->facebook}} "> <i class="fab fa-facebook-f"></i></a></li>
                                    <li> <a href=" {{$offer->enestegram}} "> <i class="fab fa-instagram"></i></a></li>
                                    <li> <a href=" {{$offer->enestegram}} "> <i class="fab fa-snapchat-ghost"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-7 col-md-8">
                        <div class="content_image">
                            <img src="/{{$offer->image}}" style="width:100%;">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</main>
@include('front_includes.footer')
@endsection