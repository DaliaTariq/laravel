
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
                                       
                                    <form action="{{url('storage/update/'. $storage->id)}}" method="POST" enctype="multipart/form-data">
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
                                                    <label for="title">Storage Name</label>
                                                    <input type="text" class="form-control" name="name" value={{$bueaty->name}}>
                                                </div>
                                                @error('name')
                                                <div class="alert alert-danger">
                                                        <span>{{$errors->first('name')}}</span>
                                                </div>
                                               @enderror
                                                <div class="form-group">
                                                    <label for="content">Storage Description</label>
                                                    <textarea class="form-control" name="description" rows="5">
                                                        {{$bueaty->description}}
                                                    </textarea>
                                                </div>

                                            @error('description')
                                                <div class="alert alert-danger">
                                                        <span>{{$errors->first('description')}}</span>
                                                    </div>
                                            @enderror

                                     

                                            <div class="form-group">
                                                    <label for="title">Storage address</label>
                                                    <input type="text" class="form-control" name="address" value={{$bueaty->address}}>
                                                </div>
                                             @error('address')
                                                <div class="alert alert-danger">
                                                        <span>{{$errors->first('address')}}</span>
                                                </div>
                                            @enderror

                                            <div class="form-group">
                                                    <label for="title">Mobile Number</label>
                                                    <input type="text" class="form-control" name="mobile" value={{$bueaty->mobile}}>
                                                </div>
                                             @error('mobile')
                                                <div class="alert alert-danger">
                                                        <span>{{$errors->first('mobile')}}</span>
                                                </div>
                                            @enderror

                                            <div class="form-group">
                                                    <label for="title">Watts  App</label>
                                                    <input type="text" class="form-control" name="watts" value={{$bueaty->watts}}>
                                                </div>
                                             @error('watts')
                                                <div class="alert alert-danger">
                                                        <span>{{$errors->first('watts')}}</span>
                                                </div>
                                            @enderror


                                            <div class="form-group">
                                                    <label for="title">Facebbok link</label>
                                                    <input type="url" class="form-control" name="facebook" value={{$bueaty->facebook}}>
                                                </div>
                                             @error('facebook')
                                                <div class="alert alert-danger">
                                                        <span>{{$errors->first('facebook')}}</span>
                                                </div>
                                            @enderror

                                            <div class="form-group">
                                                    <label for="title">Inestegram link</label>
                                                    <input type="url" class="form-control" name="enestegram" value={{$bueaty->enestegram}}>
                                                </div>
                                             @error('enestegram')
                                                <div class="alert alert-danger">
                                                        <span>{{$errors->first('enestegram')}}</span>
                                                </div>
                                            @enderror




                                            <div class="form-group">
                                                <label for="image"> Image</label>
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
        </div>
</div>

@endsection
