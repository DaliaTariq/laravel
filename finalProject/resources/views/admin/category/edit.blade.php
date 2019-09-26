
@extends('layouts.app')

@section('content')
  <div class="row">
        <div class="col-3">
                @include('includes.sidebar') 
        </div>
        <div class="col-9">
            <div class="card">
                <div class="card-header">
                    <h2>Edit Category {{$category->name}} </h2>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    <form action="{{route('update_category',['id'=> $category->id])}}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field()}}



           <!--------------------------------------------------------------------------->
           <div class="form-group">
            <label for="">Categories Name</label>
            <select class="form-control" id="category" name="name" >
              @foreach ($categories as $cat)
              @if($category->id ==$cat->id )
              <option value="{{$category->id}}" selected style="color:blue !important;">{{$category->name}}</option>
              @else
              <option value="{{$cat->id}}">{{$cat->name}}</option>
              @endif
              @endforeach


            </select>
            </div>
           <!--------------------------------------------------------------------------->

         <!--  <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" value=" {{--$category->name--}}">
        </div>-->




                            <div class="form-group">
                                <label for="content">Description</label>
                                <textarea class="form-control" name="description" rows="5" >
                                {{$category->description}}
                                </textarea>
                            </div>
                            @error('description')
                            <div class="alert alert-danger">
                                <span> Please Enter the Description of your category service </span> </div>
                            @enderror
                            <div class="form-group">
                                <label for="image">post Image:</label>
                                <input type="file" name="image" class="form-control-file">
                            </div>

                            <button type="submit" class="btn btn-primary">update</button>
                        </form>
                </div>
            </div>
                        <div class="row justify-content-center">
                            <div class="col-md-12">
                                <div class="card m-4">
                                    <div class="card-header">
                                        <h2>Edit Category {{$category->name}} </h2>
                                    </div>
                    
                                    <div class="card-body">
                                        @if (session('status'))
                                            <div class="alert alert-success" role="alert">
                                                {{ session('status') }}
                                            </div>
                                        @endif
                    
                                       
                                        <form action="{{route('update_category',['$id'=> $category->id])}}" method="POST" enctype="multipart/form-data">
                                                {{ csrf_field()}}
                        
                                           
                        
                               <!--------------------------------------------------------
                               <div class="form-group">
                                <label for="">Categories Name</label>
                                <select class="form-control" id="category" name="name" >
                                  {{--@foreach ($categories as $cat)
                                  @if($category->id ==$cat->id )
                                  <option value="{{$category->id}}" selected style="color:blue !important;">{{$category->name}}</option>
                                  @else 
                                  <option value="{{$cat->id}}">{{$cat->name}}</option>
                                  @endif
                                  @endforeach--}}
                                 
                                   
                                </select>
                                </div>
                            ------------------------------------------------->
                    
                              <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="name" value=" {{$category->name}}">
                              </div>
                    
                    
                          
                    
                                                <div class="form-group">
                                                    <label for="content">Description</label>
                                                    <textarea class="form-control" name="content" rows="5" >
                                                    {{$category->description}}
                                                    </textarea>
                                                </div>
                                                @error('description')
                                                <div class="alert alert-danger">
                                                    <span> Please Enter the Description of your category service </span> </div>
                                                @enderror
                                                <div class="form-group">
                                                    <label for="image">post Image:</label>
                                                    <input type="file" name="image" class="form-control-file">
                                                </div>
                    
                                                <button type="submit" class="btn btn-primary">update</button>
                                            </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
        
  </div>
@endsection
