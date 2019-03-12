@extends('backend.layout.master')
@section('content')
    @if (count($siteConfig))

    @else
        <a href="{{route('admin.site.config.create')}}" class="btn btn-primary">Add Site Info</a>
    @endif
@endsection
