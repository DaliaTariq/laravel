
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
                                       
                                    <form action="{{url('offers/update/'. $offer->id)}}" method="POST" enctype="multipart/form-data">
                                                <!--input type="hidden" name="_method" value="PUT"-->
                                                {{ csrf_field()}}
                        
                                             
                        
                        
                                                <div class="form-group">
                                                    <label for="title">Storage Name</label>
                                                    <input type="text" class="form-control" name="name" value={{ $offer->name}}>
                                                </div>
                                                @error('name')
                                                <div class="alert alert-danger">
                                                        <span>{{$errors->first('name')}}</span>
                                                </div>
                                               @enderror
                                                <div class="form-group">
                                                    <label for="content">Storage Description</label>
                                                    <textarea class="form-control" name="description" rows="5">
                                                        {{ $offer->description}}
                                                    </textarea>
                                                </div>

                                            @error('description')
                                                <div class="alert alert-danger">
                                                        <span>{{$errors->first('description')}}</span>
                                                    </div>
                                            @enderror

                                     

                                            <div class="form-group">
                                                    <label for="title">Storage address</label>
                                                    <input type="text" class="form-control" name="address" value={{$offer->address}}>
                                                </div>
                                             @error('address')
                                                <div class="alert alert-danger">
                                                        <span>{{$errors->first('address')}}</span>
                                                </div>
                                            @enderror

                                            <div class="form-group">
                                                    <label for="title">Mobile Number</label>
                                                    <input type="text" class="form-control" name="mobile" value={{ $offer->mobile}}>
                                                </div>
                                             @error('mobile')
                                                <div class="alert alert-danger">
                                                        <span>{{$errors->first('mobile')}}</span>
                                                </div>
                                            @enderror

                                            <div class="form-group">
                                                    <label for="title">Watts  App</label>
                                                    <input type="text" class="form-control" name="watts" value={{ $offer->watts}}>
                                                </div>
                                             @error('watts')
                                                <div class="alert alert-danger">
                                                        <span>{{$errors->first('watts')}}</span>
                                                </div>
                                            @enderror


                                            <div class="form-group">
                                                    <label for="title">Facebbok link</label>
                                                    <input type="url" class="form-control" name="facebook" value={{ $offer->facebook}}>
                                                </div>
                                             @error('facebook')
                                                <div class="alert alert-danger">
                                                        <span>{{$errors->first('facebook')}}</span>
                                                </div>
                                            @enderror

                                            <div class="form-group">
                                                    <label for="title">Inestegram link</label>
                                                    <input type="url" class="form-control" name="enestegram" value={{ $offer->enestegram}}>
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
