@extends('front_layout.app',['categories'=>$forNav])
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
                    <p>{{$category->description}}</p>
                </div>
            </div>
        </div>
    </div>

    <!-----------------------Page Content--------------------->







    <section class="offers-page">
        <div class="container">
            <!--Storage Display-->

            <div class="offer">
                <div class="row justify-content-center">
                    @foreach ($storage as $store)
                    @if ( $category->id == $store->category_id)
                    <div class="col-12 col-sm-6 col-md-4">
                        <div class="offer_Box">

                            <div class="offer_image">
                                <img src="/{{$store->image}}" alt="offer1" width="100%;">
                            </div>

                            <div class="details">
                                <h3 class="title">{{$store->name}}</h3>
                                <div class="rate">
                                    <img class="rate" src="{{asset('front/images/loc (3).png')}}">
                                </div>

                                <a class="read_more" href="{{route('clothes_page',['$id'=> $store->id])}}">المزيد</a>
                            </div>
                        </div>
                    </div>


                    @endif

                    @endforeach

                </div>
                @if ( $category->id == $store->category_id)
                {{ $storage->links() }}
                @endif

            </div>


            <!--Center display-->
            <div class="offer">
                <div class="row justify-content-center">
                    @foreach ($centers as $center)
                    @if ( $category->id == $center->category_id)
                    <div class="col-12 col-sm-6 col-md-4">
                        <div class="offer_Box">

                            <div class="offer_image">
                                <img src="/{{$center->image}}" alt="offer1" width="100%;">
                            </div>

                            <div class="details">
                                <h3 class="title">{{$center->name}}</h3>
                                <div class="rate">
                                    <img class="rate" src="{{asset('front/images/loc (3).png')}}">
                                </div>

                                <a class="read_more" href="{{route('center_page',['$id'=> $center->id])}}">المزيد</a>
                            </div>
                        </div>
                    </div>


                    @endif

                    @endforeach

                </div>
                @if ( $category->id == $center->category_id)
                {{ $centers->links() }}
                @endif

            </div>
        </div>

    </section>







</main>
@include('front_includes.footer')
@endsection