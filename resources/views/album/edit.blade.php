@extends('layouts.admin.template')


@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Add New Image</h1>
    </div>
</div>
<div class="row">
	@include('includes.admin.alerts')
    {{Form::open(['url' => url('admin/album', $album->id), 'method' => 'POST', 'files'=>true])}}
    <div class="col-md-12">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
            {{Form::label('title', 'Album Name*')}}
            {{Form::text("title", $album->title, array("class"=>"form-control","id"=>"title"))}}
            @if ($errors->has('title'))
                <span class="help-block">
                    <strong>{{ $errors->first('title') }}</strong>
                </span>
            @endif
        </div>
        
        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
            {{Form::label('description', 'Short Description*')}}
            {{Form::text("description", $album->description, array("class"=>"form-control","id"=>"image_desc"))}}
            @if ($errors->has('description'))
                <span class="help-block">
                        <strong>{{ $errors->first('description') }}</strong>
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

