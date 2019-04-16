@extends('layouts.admin.template')


@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Add New Image</h1>
    </div>
</div>
<div class="row">
	@include('includes.admin.alerts')
    <div class="col-md-12">
        {{Form::open(['url' => url('admin/album'), 'method' => 'POST', 'files'=>true, 'enctype'=>'multipart/form-data'])}}
        {{ csrf_field() }}
        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
            {{Form::label('title', 'Album Name*')}}
            {{Form::text("title", null, array("class"=>"form-control","id"=>"title"))}}
            @if ($errors->has('title'))
                <span class="help-block">
                        <strong>{{ $errors->first('title') }}</strong>
                </span>
            @endif
        </div>
        
        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
            {{Form::label('description', 'Short Description*')}}
            {{Form::text("description", null, array("class"=>"form-control","id"=>"image_desc"))}}
            @if ($errors->has('description'))
                <span class="help-block">
                        <strong>{{ $errors->first('description') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
            <label for="image">Image: </label>
            <input type="file" name="image" id="image" class="form-control" value="{{old('image')}}">
            @if ($errors->has('image'))
                <span class="help-block">
                        <strong>{{ $errors->first('image') }}</strong>
                </span>
            @endif
        </div>

                <div class="form-group text-center">
            <input type="submit" class="btn btn-primary" value="Save">
        </div>
        {{Form::close()}}
    </div>

</div>

@endsection

