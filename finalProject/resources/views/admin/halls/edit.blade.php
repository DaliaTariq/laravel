
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
                                        <h2>Add New hall </h2>
                                                
                                    </div>
                                    <div class="clearfix"></div>
                    
                                    
                                    <div class="card-body">
                                       
                                            <form action="{{url('hall/update/'.$hall->id)}}" method="POST" enctype="multipart/form-data">
                                                {{ csrf_field()}}
                        
                                                <div class="form-group">
                                                    <label for="exampleFormControlSelect1">Categories</label>
                                                    <select class="form-control" id="category" name="category_id" value="{{$hall->id}}">
                                                        @foreach($categories as $category)
                                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                                        @endforeach
                        
                                                    </select>
                                                </div>
                        
                        
                                                <div class="form-group">
                                                    <label for="title">Hall Name</label>
                                                    <input type="text" class="form-control" name="name" value="{{$hall->name}}">
                                                </div>
                                                @error('name')
                                                <div class="alert alert-danger">
                                                <span>Please Enter the Hall Name</span>
                                                </div>
                                            @enderror
                                                <div class="form-group">
                                                    <label for="content">Hall Description</label>
                                                    <textarea class="form-control" name="description" rows="5">
                                                        {{$hall->description}}
                                                    </textarea>
                                                </div>

                                            @error('description')
                                                <div class="alert alert-danger">
                                                    <span>Please Enter the Hall description</span>
                                                    </div>
                                            @enderror

                                            <div class="form-group">
                                                    <label for="title">vidio link</label>
                                                    <input type="url" class="form-control" name="vedio_link"  value="{{$hall->vedio_link}}">
                                                </div>
                                                @error('vedio_link')
                                                <div class="alert alert-danger">
                                                <span>Please Enter the link</span>
                                                </div>
                                            @enderror


                                            <div class="form-group">
                                                    <label for="title">Hall address</label>
                                                    <input type="text" class="form-control" name="address" value="{{$hall->address}}">
                                                </div>
                                             @error('address')
                                                <div class="alert alert-danger">
                                                <span>Please Enter the address</span>
                                                </div>
                                            @enderror

                                            <div class="form-group">
                                                    <label for="title">Mobile Number</label>
                                                    <input type="text" class="form-control" name="mobile" value="{{$hall->mobile}}">
                                                </div>
                                             @error('mobile')
                                                <div class="alert alert-danger">
                                                <span>Please Enter the Mobile Number</span>
                                                </div>
                                            @enderror

                                            <div class="form-group">
                                                    <label for="title">Watts  App</label>
                                                    <input type="text" class="form-control" name="watts" value="{{$hall->watts}}">
                                                </div>
                                             @error('watts')
                                                <div class="alert alert-danger">
                                                <span>Please Enter the Mobile Number</span>
                                                </div>
                                            @enderror


                                            <div class="form-group">
                                                    <label for="title">Facebbok link</label>
                                                    <input type="url" class="form-control" name="facebook" value="{{$hall->facebook}}">
                                                </div>
                                             @error('facebook')
                                                <div class="alert alert-danger">
                                                <span>Please Enter the Facebbok link</span>
                                                </div>
                                            @enderror

                                            <div class="form-group">
                                                    <label for="title">Inestegram link</label>
                                                    <input type="url" class="form-control" name="enestegram" value="{{$hall->enestegram}}">
                                                </div>
                                             @error('enestegram')
                                                <div class="alert alert-danger">
                                                <span>Please Enter the Inestegram link</span>
                                                </div>
                                            @enderror

                                            <div class="form-group">
                                                <label for="image"> Image</label>
                                                <input type="file" name="image" class="form-control-file">
                                            </div>
                                            @error('image')
                                            <div class="alert alert-danger">
                                                <span> Please Select Image</span>
                                            </div>
                                            @enderror

                                               
                                                <button type="submit" class="btn btn-primary">Save</button>
                                            </form>
                    
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
