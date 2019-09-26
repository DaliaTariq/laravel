
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
                                        <h2>Display all clothes Storages
                                                <a class="btn btn-primary float-right mx-2" href="{{route('create_storage')}}">Add Storage</a>
                                                 
                                                 </h2>
                                                
                                    </div>
                                    <div class="clearfix"></div>
                    
                                    
                                    <div class="card-body">
                                            @if($storages->count()>0)
                                        <table class="table table-striped table-bordered dtable">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Storage Name</th>
                                                    <th scope="col">Created at</th>
                                                    <th scope="col">Edit</th>
                                                    <th scope="col">Delete</th>
                                              
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($storages as $storage)
                                                <tr>
                                                    <th scope="row">
                                                    {{$i++}}
                                                    </th>
                                                    <td scope="row">{{$storage->name}}</td>
                                                    <td scope="row">{{$storage->created_at}}</td>
                                                  
                                                    <td> <a class="" href="{{route('edit_storage',['$id'=>$storage->id])}}">
                                                        <i class="fas fa-edit"></i>
                                                    </a></td>
                                                    <td>
                                                    <a class="" href="{{--route('destroy_hall',['$id'=>$hall->id])--}}">
                                                    <i class="fas fa-trash-alt"></i>
                                                    </a>
                                                    </td>
                                                 
                                                </tr>
                                                @endforeach
                    
                                                @else
                                                <p class="text-center">
                                                        No Storage to view Yet
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
