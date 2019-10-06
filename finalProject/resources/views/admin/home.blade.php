@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-3">
        @include('includes.sidebar')
    </div>
    <div class="col-9">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 ">
                    <div class="card m-4">
                        <div class="card-header">
                            <h2>welcome back {{Auth::user()->name}}</h2>
                        </div>

                        <div class="card-body">
                            @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                            @endif

                            <div id="count">
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="card m-4">
                                            <div class="card-header">Category</div>
                                            <div class="card-body">
                                                <p>
                                                    <i class="fas fa-cogs"></i>
                                                    The number of services we offer:</p>
                                                <span>{{$category->count()}}</span>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <div class="card m-4">
                                            <div class="card-header">Offers</div>
                                            <div class="card-body">
                                                <p>
                                                    <i class="fas fa-cogs"></i>
                                                    The number offer:</p>
                                                <span>{{$offer->count()}}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="card m-4">
                                            <div class="card-header">Halls</div>
                                            <div class="card-body">
                                                <p>
                                                    <i class="fas fa-cogs"></i>
                                                    The number of halls we offer:</p>
                                                <span>{{$hall->count()}}</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <div class="card m-4">
                                            <div class="card-header">Storages</div>
                                            <div class="card-body">
                                                <p>
                                                    <i class="fas fa-cogs"></i>
                                                    The number of storage we offer:</p>
                                                <span>{{$storage->count()}}</span>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="col-12 col-md-6">
                                        <div class="card m-4">
                                            <div class="card-header">Buty Centers</div>
                                            <div class="card-body">
                                                <p>
                                                    <i class="fas fa-cogs"></i>
                                                    The number of services we offer:</p>
                                                <span>{{$centers->count()}}</span>

                                            </div>
                                        </div>
                                    </div>

                              
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection