@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <posts-component :posts="{{ $posts }}"/>
        </div>
    </div>
</div>
@endsection