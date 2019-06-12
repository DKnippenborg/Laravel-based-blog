@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <form method="POST" action="/comments/store">
                @csrf
                <div class="form-group">
                    <label for="titleInput">Comment</label>
                    <input type="text" class="form-control" id="titleInput" placeholder="Enter comment" name="comment">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection