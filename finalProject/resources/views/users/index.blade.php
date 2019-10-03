@extends('front_layout.app')
@section('content')
<section id="hero">
    <h1>كل ما تبحث عنه ستجده في طرحة </h1>
    <div class="clearfix"></div>
    <p>طرحة الموقع العربي الأول من نوعه الذي يجمع لك كل ما تحتاجه ليكون زفافك مميز بتفاصيله</p>
    <div class="clearfix"></div>
    <form class="form-inline my-2 my-lg-0">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">ابحث</button>
        <input class="form-control mr-sm-2" type="search" placeholder="ما الذي تبحث عنه" aria-label="Search">

    </form>
    <div class="clearfix"></div>
</section>
<!-------------------------------------->
<section id='categories'>
    <div class="container">
        <div class="section_title">
            <div class="row">
                <div class="col-12">
                    <div class="title_image">
                        <img class="" src="{{ asset('front/img/section.png') }}" alt="section_image">
                    </div>
                    <h2>أقسام الموقغ</h2>
                   
                </div>
            </div>
        </div>
       <div class="row justify-content-center">
           @foreach ($categories as $category)
                
           <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                <a href="{{route('service_page',['$id'=> $category->id])}}" class="category wow fadeInRight animated animated"
                    style="visibility: visible;-webkit-animation-delay: 1.2s; -moz-animation-delay: 1.2s; animation-delay: 1.2s;"
                    data-wow-delay="1.2s">
                    <div class="opacity">
                        <sapn> المعرض</sapn>
                    </div>
                    <div class="single_col">
        
                        <div class="category_image">
                            <img class="" src="/{{$category->image}}" alt="drum">
                        </div>
                    <h3>{{$category->name}}</h3>
        
                    </div>
                </a>
            </div>

               
           @endforeach
       </div>
      
    </div>

</section>
<section id="abou_Us">
    <div class="container">
        <div class="row">
            <div class="abot">
                <div class="section_title">
                    <div class="row">
                        <div class="col-12">
                            <div class="title_image">
                                <img class="" src=" {{ asset('front/img/Group 8.png ') }}" alt="section_image">
                            </div>
                            <h2>من نحن</h2>
                        </div>
                    </div>
                </div>

                <div class="content">
                    <p>طرحة شركة تجمع لك كل الأماكن والمحلات التي تحتاجها لتحصل على يومك المميز بتفاصيل دقيقة وتسهل
                        عليك البحث </p>
                    <p>مع طرحة لن تضطر للتعرض لمشقة التجهيز فمن خلال الموقع سيكون كل شيء تحت تحكمك</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="offers">
    <div class="container">
        <div class="section_title">
            <div class="row">
                <div class="col-12">
                    <div class="title_image">
                        <img class="" src=" {{ asset('front/img/offer.png ') }}" alt="offer">
                    </div>
                    <h2>عروض مميزة</h2>
                </div>
            </div>
        </div>

        <div class="offer">
            <div class="row justify-content-center">
                @foreach ($offers as $offer)
                <div class="col-12 col-sm-6 col-md-4">
                        <div class="offer_Box">
    
                            <div class="offer_image">
                            <img src="/{{$offer->image}}" alt="offer1">
                                </a>
                                <div class="details">
                                <h3 class="offer_title">{{$offer->name}}</h3>
                                    <p class="descriptin">
                                        {{$offer->description}}
                                    </p>
                                    <a class="read_more" href="#">المزيد</a>
                                    <div class="clearfix"></div>
    
                                </div>
    
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{ $offers->links() }}
        </div>
    </div>

    <!--------Pagination-------->

   

</section>

<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-9 col-md-9 col-lg-8" style="margin: 0 auto;">
                <div class="contact_us">
                    <div class="section_title">
                        <div class="row">
                            <div class="col-12">
                                <div class="title_image">
                                    <img class="" src=" {{ asset('front/img/network.png  ') }}" alt="section_image">
                                </div>
                                <h2>تواصل معنا</h2>
                            </div>
                        </div>
                    </div>
                    <form action="{{route('dosend')}}" method="Post">
                        {{ csrf_field()}}
                        <div class="form-row">
                            @if (session()->has('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session()->get('success') }}
                            </div>
                            @endif
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">الاسم</label>
                                <input type="text" class="form-control" id="inputEmail4" name="name">
                                @error('name')
                                <div class="alert alert-danger">
                                <span>Please Enter the your Name</span>
                                </div>
                               @enderror
                            </div>

                         
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">رقم الهاف</label>
                                <input type="text" class="form-control"  name="mobile"  placeholder="">
                                @error('mobile')
                                <div class="alert alert-danger">
                                <span>Please Enter the your mobile number</span>
                                </div>
                               @enderror
                            </div>

                     
                        </div>
                        <div class="form-group">
                            <label for="inputAddress"> البريد الالكتروني</label>
                            <input type="text" class="form-control" id="email" placeholder="" name="email">
                            @error('email')
                            <div class="alert alert-danger">
                            <span>Please Enter the your Email</span>
                            </div>
                           @enderror
                        </div>

                       

                        <div class="form-row">
                            <div class="form-group col-12">
                                <label for="inputCity">الرسالة</label>
                                <textarea name="content" class="form-control" rows="5">
                                    اترك وصفا للخدمة التي تريد 
                                </textarea>

                                @error('content')
                                <div class="alert alert-danger">
                                <span>Please Enter the your message</span>
                                </div>
                               @enderror
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">إرسال</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        <div class="social">
            <ul class="left">
                <li class="social_item">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </li>
                <li class="social_item">
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </li>
                <li class="social_item">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                </li>

            </ul>
            <ul class="right">
                <li class="social_item">
                    <a href="#"><i class="fas fa-map-marker-alt"></i></a>
                </li>
                <li class="social_item">
                    <a href="#"><i class="fas fa-envelope"></i></a>
                </li>

                <li class="social_item">
                    <a href="#"><i class="fas fa-envelope"></i></a>
                </li>


            </ul>
        </div>
    </div>
</section>
@endsection