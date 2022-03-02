@extends('layouts.app')

@section('content')
<a href="{{ route('categories.create') }}" class="btn btn-success">Add Category</a>
<div class="card card-default">
    <div class="card-header">All Categories</div>
    <div class="card-body">no categories yet</div>
</div>
@endsection