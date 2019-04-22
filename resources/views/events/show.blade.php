@extends('layouts.frontend')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>{{ $event->artist }}</h1>
            <p class="lead">{!! clean($event->description) !!}</p>
        </div>
    </div>
</div>

@endsection

