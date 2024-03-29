@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-3">
            @include('includes.sidebar') 
    </div>
    <div class="col-9">
            <div class="row justify-content-center">
                    <div class="col-md-12 ">
                        <div class="card m-4">
                            <div class="card-header">
                                <h2>Add Category  </h2>
                            </div>
                            <div class="card-body">
                                @if (session()->has('success'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session()->get('success') }}
                                    </div>
                                @endif
            
                                
                                <form action="{{route('store_category')}}" method="POST" enctype="multipart/form-data" >
                                    {{ csrf_field()}}
                                          <div class="form-group">
                                              <label for="name">Name</label>
                                              <input type="text" class="form-control" name="name">
                                          </div>
            
            
                                          @error('name')
                                            <div class="alert alert-danger">
                                            <span>{{$errors->first('name')}}</span>
                                                </div>
                                           @enderror
            
                                          <div class="form-group">
                                            <label for="description">Desription</label>
                                            <textarea class="form-control" name="description" rows="5"></textarea>
                                        </div>
                                        @error('description')
                                        <div class="alert alert-danger">
                                            <span> {{$errors->first('description')}} </span> </div>
                                        @enderror
            
                                        <div class="form-group">
                                            <label for="image"> Image</label>
                                            <input type="file" name="image" class="form-control-file">
                                        </div>
                                        @error('image')
                                        <div class="alert alert-danger">
                                            <span>{{$errors->first('image')}}</span>
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

@endsection