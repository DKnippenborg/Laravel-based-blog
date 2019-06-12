@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            @foreach($comments as $comment)
                <div class="card">
                    <div class="card-header">{{ $comment->user->name }}</div>
                        <div class="card-body">
                            {{ $comment->comment }}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection