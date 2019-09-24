
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
                                        <h2>Display all Hallls
                                                <a class="btn btn-primary float-right mx-2" href="{{route('create_hall') }}">Add Hall</a>
                                                 
                                                 </h2>
                                                
                                    </div>
                                    <div class="clearfix"></div>
                    
                                    
                                    <div class="card-body">
                                            @if($halls->count()>0)
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Hall Name</th>
                                                    <th scope="col">Created at</th>
                                                    <th scope="col">Edit</th>
                                                    <th scope="col">Delete</th>
                                              
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($halls as $hall)
                                                <tr>
                                                    <th scope="row">
                                                    {{$i++}}
                                                    </th>
                                                    <td scope="row">{{$hall->name}}</td>
                                                    <td scope="row">{{$hall->created_at}}</td>
                                                  
                                                    <td> <a class="" href="{{route('edit_hall',['$id'=>$hall->id])}}">
                                                        <i class="fas fa-edit"></i>
                                                    </a></td>
                                                    <td>
                                                    <a class="" href="{{route('destroy_hall',['$id'=>$hall->id])}}">
                                                    <i class="fas fa-trash-alt"></i>
                                                    </a>
                                                    </td>
                                                 
                                                </tr>
                                                @endforeach
                    
                                                @else
                                                <p class="text-center">
                                                        No Halls to view Yet
                                                <br>
                                                        <a class="btn btn-primary" href="{{route('create_hall') }}">Add Hall</a>
                                                
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
