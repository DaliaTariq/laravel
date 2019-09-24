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
                                <div class="card-header">Dashboard</div>
                
                                <div class="card-body">
                                    @if (session('status'))
                                        <div class="alert alert-success" role="alert">
                                            {{ session('status') }}
                                        </div>
                                    @endif
                
                                    <h2>welcome back {{Auth::user()->name}}</h2>
                                     حعرض فيه احصائيات
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </div>
</div>
@endsection
