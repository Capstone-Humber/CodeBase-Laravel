@extends('layouts.admin.template');

@section('content')
<form method="post" action="/admin/photo-gallary" enctype="multipart/form-data">    
        <input type="hidden" value="{{$album_id}}" name="album_id">
        {{ csrf_field() }}
        <div class="form-group{{ $errors->has('image_title') ? ' has-error' : '' }}">
            <label for="image_title">Image Title: </label>
            <input type="text" name="image_title" id="image_title" class="form-control" value="{{old('image_title')}}">
            @if ($errors->has('image_title'))
                <span class="help-block">
                        <strong>{{ $errors->first('image_title') }}</strong>
                </span>
            @endif
            </div>
                    <div class="form-group{{ $errors->has('image_description') ? ' has-error' : '' }}">
                               <label for="image_description">Image description: </label>
                    <textarea type="text" name="image_description" id="image_description" class="form-control">{{old('image_description')}}</textarea>
                                @if ($errors->has('image_description'))
                                    <span class="help-block">
                                            <strong>{{ $errors->first('image_description') }}</strong>
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
                    <input type="submit" class="btn btn-primary" value="Save">
        </form>
@endsection