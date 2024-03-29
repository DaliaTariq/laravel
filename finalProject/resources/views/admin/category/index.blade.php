
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
                                        <h2>Display all Categris
                                                <a class="btn btn-primary float-right mx-2" href="{{route('create_category') }}">Add Category</a>
                                                 
                                                 </h2>
                                                
                                    </div>
                                    <div class="clearfix"></div>
                    
                                    
                                    <div class="card-body">

                                            @if (session()->has('success'))
                                            <div class="alert alert-success" role="alert">
                                                {{ session()->get('success') }}
                                            </div>
                                            @endif


                                            @if($categories->count()>0)
                                        <table  id="category" class="table table-striped table-bordered dtable" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Image</th>
                                                    <th scope="col">Category Name</th>
                                                    <th scope="col">Created at</th>
                                                    <th scope="col">Edit</th>
                                                    <th scope="col">Delete</th>
                                              
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($categories as $category)
                                                <tr>
                                                    <th scope="row ">
                                                    <img class="text-center d-block" src="/{{$category->image}}" alt="cat_image" style="width:40px;hight:40px;display:inline-block; margin:0 auto;">
                                                    </th>
                                                    <td scope="row">{{$category->name}}</td>
                                                    <td scope="row">{{$category->created_at->diffForHumans()}}</td>
                                                  
                                                    <td> <a class="" href="{{route('edit_category',['$id'=>$category->id])}}">
                                                        <!--i class="fas fa-edit"></i-->edit
                                                    </a></td>
                                                    <td>
                                                    <a class="" href="{{route('destroy_category',['$id'=>$category->id])}}">
                                                    <!--i class="fas fa-trash-alt"></i-->delete
                                                    </a>
                                                    </td>
                                                 
                                                </tr>
                                                @endforeach
                    
                                                @else
                                                <p class="text-center">
                                                        No categories to view Yet
                                                
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
