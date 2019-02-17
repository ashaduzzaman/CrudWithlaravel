@extends('products.master')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb" style="margin-top: 20px;">
            <div class="float-left">
                <h2>Add New Student</h2>
            </div>
            <div class="float-right">
                <a href="{{route('products.index')}}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>
    <form action="{{route('products.store')}}" method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group{{$errors->has('name')?' has-error':''}}">
                    <strong>Name:</strong>
                    <input type="text" name="name" class="form-control" placeholder="Name">
                    <span class="text-danger">{{$errors->first('name')}}</span>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group{{$errors->has('class')?' has-error':''}}">
                    <strong>Class:</strong>
                    <input type="text" name="class" class="form-control" placeholder="Class">
                    <span class="text-danger">{{$errors->first('class')}}</span>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group{{$errors->has('roll')?' has-error':''}}">
                    <strong>Roll:</strong>
                    <input type="text" name="roll" class="form-control" placeholder="Roll">
                    <span class="text-danger">{{$errors->first('roll')}}</span>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group{{$errors->has('contact')?' has-error':''}}">
                    <strong>Contact:</strong>
                    <input type="text" name="contact" class="form-control" placeholder="Contact Number">
                    <span class="text-danger">{{$errors->first('contact')}}</span>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <button type="submit" class="btn btn-primary">Add</button>
            </div>
        </div>
    </form>
@endsection