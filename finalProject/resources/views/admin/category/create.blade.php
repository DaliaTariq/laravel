
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2>Add Category  </h2>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
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
                                    <span>Please Enter the type of Category you need it</span>
                                    </div>
                            @enderror

                              <div class="form-group">
                                <label for="description">Desription</label>
                                <textarea class="form-control" name="description" rows="5"></textarea>
                            </div>
                            @error('description')
                            <div class="alert alert-danger">
                                <span> Please Enter the Description of your category service </span> </div>
                            @enderror

                            <div class="form-group">
                                <label for="image"> Image</label>
                                <input type="file" name="image" class="form-control-file">
                            </div>
                            @error('image')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            
                            
                              <button type="submit" class="btn btn-primary">Save</button>
                          </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
