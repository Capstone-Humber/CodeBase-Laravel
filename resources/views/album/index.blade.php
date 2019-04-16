@extends('layouts.admin.template')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Album</h1>
    </div>
</div>
<div class="row equal">
    <a href="{{url('admin/album/create')}} " class="btn btn-default">Create Album</a>
	@include('includes.admin.alerts')
@include('album.album-view')        

</div>

@endsection

