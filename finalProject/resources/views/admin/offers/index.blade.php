
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
                                        <h2>Offers
                                                <a class="btn btn-primary float-right mx-2" href="{{route('create_offer') }}">Add offer</a>
                                                 
                                                 </h2>
                                                
                                    </div>
                                    <div class="clearfix"></div>
                    
                                    
                                    <div class="card-body">

                                            @if (session()->has('success'))
                                            <div class="alert alert-success" role="alert">
                                                {{ session()->get('success') }}
                                            </div>
                                            @endif


                                            @if($offers->count()>0)
                                        <table  id="category" class="table table-striped table-bordered dtable" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Image</th>
                                                    <th scope="col">Offer Name</th>
                                                    <th scope="col">Created at</th>
                                                    <th scope="col">Edit</th>
                                                    <th scope="col">Delete</th>
                                              
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($offers as $offer)
                                                <tr>
                                                    <th scope="row ">
                                                    <img class="text-center d-block" src="/{{$offer->image}}" alt="cat_image" style="width:40px;hight:40px;display:inline-block; margin:0 auto;">
                                                    </th>
                                                    <td scope="row">{{$offer->name}}</td>
                                                    <td scope="row">{{$offer->created_at}}</td>
                                                  
                                                    <td> <a class="" href="{{route('edit_offer',['$id'=>$offer->id])}}">
                                                        <i class="fas fa-edit"></i>
                                                    </a></td>
                                                    <td>
                                                    <a class="" href="{{route('destroy_offer',['$id'=> $offer->id])}}">
                                                    <i class="fas fa-trash-alt"></i>
                                                    </a>
                                                    </td>
                                                 
                                                </tr>
                                                @endforeach
                    
                                                @else
                                                <p class="text-center">
                                                        No offers to view Yet
                                                
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
