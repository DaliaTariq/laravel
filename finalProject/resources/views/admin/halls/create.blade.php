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
                            <h2>Add New Hall </h2>

                        </div>
                        <div class="clearfix"></div>


                        <div class="card-body">

                            <form action="{{route('store_hall')}}" method="POST" enctype="multipart/form-data">
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
                                    <label for="title">Hall Name</label>
                                    <input type="text" class="form-control" name="name">
                                </div>
                                @error('name')
                                <div class="alert alert-danger">
                                    <span>{{$errors->first('name')}}</span>
                                </div>
                                @enderror
                                <div class="form-group">
                                    <label for="content">Hall Description</label>
                                    <textarea class="form-control" name="description" rows="5"></textarea>
                                </div>

                                @error('description')
                                <div class="alert alert-danger">
                                    <span>{{$errors->first('description')}}</span>
                                </div>
                                @enderror



                                <div class="form-group">
                                    <label for="title">Vedio Link</label>
                                    <input type="text" class="form-control" name="vedio">
                                </div>
                                @error('vedio')
                                <div class="alert alert-danger">
                                    <span>{{$errors->first('vedio')}}</span>
                                </div>
                                @enderror



                                <div class="form-group">
                                    <label for="title">Hall address</label>
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
                                    <label for="image"> Image</label>
                                    <input type="file" name="image" class="form-control-file">
                                </div>
                                @error('image')
                                <div class="alert alert-danger">
                                        <span>{{$errors->first('image')}}</span>
                                    </div>
                                @enderror



                                <button type="submit" class="btn btn-primary">Add Hall</button>
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