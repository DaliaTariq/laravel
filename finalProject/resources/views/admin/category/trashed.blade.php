
@extends('layouts.app')
@section('content')
   <div class="row">
       <div class="col-3">
            @include('includes.sidebar') 
       </div>
       <div class="col-9">
            <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="card m-4">
                                <div class="card-header">
                                    <h2>Display all Categris that trashed </h2>
                                </div>
                                <div class="clearfix"></div>
                
                                
                                <div class="card-body">
                                        @if($categories->count()>0)
                                    <table class="table table-striped table-bordered dtable">
                                        <thead>
                                            <tr>
                                                <th scope="col">Image</th>
                                                <th scope="col">Category Name</th>
                                                <th scope="col">Created at</th>
                                                <th scope="col">Deleted at</th>
                                                <th scope="col">restore</th>
                                                <th scope="col">Delete completly</th>
                                          
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($categories as $category)
                                            <tr>
                                                <th scope="row">
                                                <img src="/{{$category->image}}" alt="cat_image" style="width:50px;hight:50px;">
                                                </th>
                                                <td scope="row">{{$category->name}}</td>
                                                <td scope="row">{{$category->created_at}}</td>
                                                <td scope="row">{{$category->deleted_at}}</td>
                                              
                                                <td> <a class="" href="{{route('restore_category',['$id'=>$category->id])}}">
                                                    <i class="fas fa-edit"></i>
                                                </a></td>
                                                <td>
                                                <a class="" href="{{route('hdelete_category',['$id'=>$category->id])}}">
                                                <i class="fas fa-trash-alt"></i>
                                                </a>
                                                </td>
                                             
                                            </tr>
                                            @endforeach
                
                                            @else
                                            <p class="text-center">
                                                    No trashed categories to view Yet
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
