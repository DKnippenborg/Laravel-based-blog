@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <form method="POST" action="/posts/store">
                @csrf
                <div class="form-group">
                    <label for="titleInput">Title</label>
                    <input type="text" class="form-control" id="titleInput" placeholder="Enter post title" name="title">
                </div>
                <div class="form-group">
                    <label for="bodyInput">Body</label>
                    <textarea class="form-control" name="body"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection