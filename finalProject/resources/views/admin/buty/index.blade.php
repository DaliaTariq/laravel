
@extends('layouts.app')
@section('content')
<div class="row">
        <div class="col-3">
                @include('includes.sidebar') 
        </div>

        <div class="col-9">
                <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-12 m-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h2>Display all Buty Centers
                                                <a class="btn btn-primary float-right mx-2" href="{{route('create_buty')}}">Add Storage</a>
                                                 
                                                 </h2>
                                                
                                    </div>
                                    <div class="clearfix"></div>
                    
                                    
                                    <div class="card-body">

                                            @if (session()->has('success'))
                                            <div class="alert alert-success" role="alert">
                                                {{ session()->get('success') }}
                                            </div>
                                            @endif

                                            @if($centers->count()>0)
                                        <table class="table table-striped table-bordered dtable">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Buty center Name</th>
                                                    <th scope="col">Created at</th>
                                                    <th scope="col">Edit</th>
                                                    <th scope="col">Delete</th>
                                              
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($centers as $center)
                                                <tr>
                                                    <th scope="row">
                                                    {{$i++}}
                                                    </th>
                                                    <td scope="row">{{$center->name}}</td>
                                                    <td scope="row">{{$center->created_at->diffForHumans()}}</td>
                                                  
                                                    <td> <a class="" href="{{--route('edit_buty',['$id'=>$bueaty->id])--}}">
                                                        <i class="fas fa-edit"></i>
                                                    </a></td>
                                                    <td>
                                                    <a class="" href="{{--route('destroy_storage',['$id'=>$storage->id])--}}">
                                                    <i class="fas fa-trash-alt"></i>
                                                    </a>
                                                    </td>
                                                 
                                                </tr>
                                                @endforeach
                    
                                                @else
                                                <p class="text-center">
                                                        No Buty Center to view Yet
                                                <br>
                                                        
                                                 </p>
                                                @endif
                                            </tbody>
                                        </table>
                    
                    
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
