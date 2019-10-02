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
                @if (session()->has('success'))
                <div class="alert alert-success" role="alert">
                    {{ session()->get('success') }}
                </div>
                @endif


                <form action="{{url('category/update/'.$category->id)}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field()}}

                    <div class="form-group">
                        <label for="">Categories Name</label>
                        <input type="text" class="form-control" name="name" value=" {{$category->name}}">
                    </div>

                    @error('name')
                    <div class="alert alert-danger">
                        <span>{{$errors->first('name')}}</span>
                    </div>
                    @enderror
                    <!--------------------------------------------------------------------------->

                    <!--  <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" value=" {{--$category->name--}}">
        </div>-->




                    <div class="form-group">
                        <label for="content">Description</label>
                        <textarea class="form-control" name="description" rows="5">
                                {{$category->description}}
                                </textarea>
                    </div>
                    @error('description')
                    <div class="alert alert-danger">
                        <span> {{$errors->first('description')}} </span> </div>
                    @enderror
                    <div class="form-group">
                        <label for="image">post Image:</label>
                        <input type="file" name="image" class="form-control-file">
                    </div>


                    @error('image')
                    <div class="alert alert-danger">
                        <span>{{$errors->first('image')}}</span>
                    </div>
                    @enderror

                    <button type="submit" class="btn btn-primary">update</button>
                </form>
            </div>
        </div>

    </div>
</div>

</div>
@endsection