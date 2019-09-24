
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
                                        <h2>Edit Storage </h2>
                                                
                                    </div>
                                    <div class="clearfix"></div>
                    
                                    
                                    <div class="card-body">
               
                                            <form action="{{route('update_storage',['$id'=> $storage->id])}}" method="POST" enctype="multipart/form-data">
                                                <!--input type="hidden" name="_method" value="PUT"-->
                                                {{ csrf_field()}}
                        
                                                <div class="form-group">
                                                    <label for="exampleFormControlSelect1">Categories</label>
                                                    <select class="form-control" id="category" name="category_id" >
                                                        @foreach($categories as $category)
                                                        <option value="{{$category->id}}" > {{$category->name}}</option>
                                                        @endforeach
                        
                                                    </select>
                                                </div>
                        
                        
                                                <div class="form-group">
                                                    <label for="title">Hall Name</label>
                                                    <input type="text" class="form-control" name="name" value={{$storage->name}}>
                                                </div>
                                                @error('name')
                                                <div class="alert alert-danger">
                                                <span>Please Enter the Hall Name</span>
                                                </div>
                                               @enderror
                                                <div class="form-group">
                                                    <label for="content">Hall Description</label>
                                                    <textarea class="form-control" name="description" rows="5">
                                                        {{$storage->name}}
                                                    </textarea>
                                                </div>

                                            @error('description')
                                                <div class="alert alert-danger">
                                                    <span>Please Enter the Hall description</span>
                                                    </div>
                                            @enderror

                                     

                                            <div class="form-group">
                                                    <label for="title">Hall address</label>
                                                    <input type="text" class="form-control" name="address" value={{$storage->address}}>
                                                </div>
                                             @error('address')
                                                <div class="alert alert-danger">
                                                <span>Please Enter the address</span>
                                                </div>
                                            @enderror

                                            <div class="form-group">
                                                    <label for="title">Mobile Number</label>
                                                    <input type="text" class="form-control" name="mobile" value={{$storage->mobile}}>
                                                </div>
                                             @error('mobile')
                                                <div class="alert alert-danger">
                                                <span>Please Enter the Mobile Number</span>
                                                </div>
                                            @enderror

                                            <div class="form-group">
                                                    <label for="title">Watts  App</label>
                                                    <input type="text" class="form-control" name="watts" value={{$storage->watts}}>
                                                </div>
                                             @error('watts')
                                                <div class="alert alert-danger">
                                                <span>Please Enter the Mobile Number</span>
                                                </div>
                                            @enderror


                                            <div class="form-group">
                                                    <label for="title">Facebbok link</label>
                                                    <input type="url" class="form-control" name="facebook" value={{$storage->facebook}}>
                                                </div>
                                             @error('facebook')
                                                <div class="alert alert-danger">
                                                <span>Please Enter the Facebbok link</span>
                                                </div>
                                            @enderror

                                            <div class="form-group">
                                                    <label for="title">Inestegram link</label>
                                                    <input type="url" class="form-control" name="enestegram" value={{$storage->enestegram}}>
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
