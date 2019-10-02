@extends('front_layout.app')
@section('content')
<main id="hall">
    <div class="hall">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="hall_image">
                    <img src="{{asset('front/images/Group 8.png')}}">
                    </div>
                    <h3 style="margin-left:40px; color:#737272;">اسم القاعة</h3>
                </div>
            </div>

            <div class="video">
                <div class="row">
                    <div class="col-12">
                        <iframe src="https://www.youtube.com/embed/4AeuJ6bqWUM" frameborder="0" allowfullscreen>
                        </iframe>
                    </div>
                </div>
            </div>

            <div class="page_content">
                <div class="row">
                        <div class="col-12 col-sm-5 col-md-4">
                            <div class="discription">
                                <h5>
                                        <i class="fas fa-envelope"></i>
                                        اسم القاعة
                                </h5>
                                <h5>
                                        <i class="fas fa-envelope"></i>
                                        الموقع
                                </h5>
                                <h5>
                                        <i class="fas fa-envelope"></i>
                                        خدمات إضافية
                                </h5>

                                <p>
                                        هذا النص هو مثال لنص ممكن أن يستبدل في نفس المساحة . لقد تم توليد هذا النص من مولد النص 
                                </p>

                               <div class="contact_info">
                                    <h4> 
                                        <i class="fas fa-envelope"></i> 
                                        معلومات الاتصال
                                    </h4>
                                    <ul>
                                          
                                            <li> <a href=""> <i class="fas fa-envelope"></i></a></li>
                                            <li> <a href=""> <i class="fas fa-envelope"></i></a></li>
                                            <li> <a href=""> <i class="fas fa-envelope"></i></a></li>
                                        </ul>
                               </div>
                            </div>
                        </div>
                    <div class="col-12 col-sm-7 col-md-8">
                        <div class="content_image">
                        <img src="{{asset('front/images/hall.jpg')}}" style="width:100%;">
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</main>
@include('front_includes.footer') 
@endsection