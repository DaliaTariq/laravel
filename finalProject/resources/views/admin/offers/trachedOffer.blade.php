
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
                                        @if (session()->has('success'))
                                        <div class="alert alert-success" role="alert">
                                            {{ session()->get('success') }}
                                        </div>
                                        @endif

                                        @if($offers->count()>0)
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
                                            @foreach($offers as $offer)
                                            <tr>
                                                <th scope="row">
                                                <img src="/{{$offer->image}}" alt="cat_image" style="width:50px;hight:50px;">
                                                </th>
                                                <td scope="row">{{$offer->name}}</td>
                                                <td scope="row">{{$offer->created_at}}</td>
                                                <td scope="row">{{$offer->deleted_at}}</td>
                                              
                                                <td> <a class="" href="{{route('restore_offer',['$id'=> $offer->id])}}">
                                                    <i class="fas fa-edit"></i>
                                                </a></td>
                                                <td>
                                                <a class="" href="{{route('hdelete_offer',['$id'=>$offer->id])}}">
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
