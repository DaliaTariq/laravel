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
                            <h2>Add New Buty Center </h2>

                        </div>
                        <div class="clearfix"></div>


                        <div class="card-body">

                                @if (session()->has('success'))
                                <div class="alert alert-success" role="alert">
                                    {{ session()->get('success') }}
                                </div>
                               @endif

                            <form action="{{route('store_buty')}}" method="POST" enctype="multipart/form-data">
                                {{ csrf_field()}}

                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Categories</label>
                                    <select class="form-control" id="category" name="category_id">
                                        @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach

                                    </select>
                                </div>


                                <div class="form-group">
                                    <label for="title">Buty Center Name</label>
                                    <input type="text" class="form-control" name="name">
                                </div>
                                @error('name')
                                <div class="alert alert-danger">
                                    <span>{{$errors->first('name')}}</span>
                                </div>
                                @enderror
                                <div class="form-group">
                                    <label for="content">Buty Center Description</label>
                                    <textarea class="form-control" name="description" rows="5"></textarea>
                                </div>

                                @error('description')
                                <div class="alert alert-danger">
                                    <span>{{$errors->first('description')}}</span>
                                </div>
                                @enderror



                                <div class="form-group">
                                    <label for="title">Buty Center address</label>
                                    <input type="text" class="form-control" name="address">
                                </div>
                                @error('address')
                                <div class="alert alert-danger">
                                    <span>{{$errors->first('address')}}</span>
                                </div>
                                @enderror

                                <div class="form-group">
                                    <label for="title">Mobile Number</label>
                                    <input type="text" class="form-control" name="mobile">
                                </div>
                                @error('mobile')
                                <div class="alert alert-danger">
                                    <span>{{$errors->first('mobile')}}</span>
                                </div>
                                @enderror

                                <div class="form-group">
                                    <label for="title">Watts App</label>
                                    <input type="text" class="form-control" name="watts">
                                </div>
                                @error('watts')
                                <div class="alert alert-danger">
                                    <span>{{$errors->first('watts')}}</span>
                                </div>
                                @enderror


                                <div class="form-group">
                                    <label for="title">Facebbok link</label>
                                    <input type="url" class="form-control" name="facebook">
                                </div>
                                @error('facebook')
                                <div class="alert alert-danger">
                                    <span>{{$errors->first('watts')}}</span>
                                </div>
                                @enderror

                                <div class="form-group">
                                    <label for="title">Inestegram link</label>
                                    <input type="url" class="form-control" name="enestegram">
                                </div>
                                @error('enestegram')
                                <div class="alert alert-danger">
                                    <span>{{$errors->first('enestegram')}}</span>
                                </div>
                                @enderror


                                <div class="form-group">
                                    <label for="title">Inestegram link</label>
                                    <input type="url" class="form-control" name="snapChat">
                                </div>
                                @error('snapChat')
                                <div class="alert alert-danger">
                                    <span>{{$errors->first('snapChat')}}</span>
                                </div>
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
</div>
</div>
</div>

@endsection