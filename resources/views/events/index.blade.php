@extends('layouts.frontend')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            @if (flash()->message)
                <div class="alert {{ flash()->class }}">
                    {{ flash()->message }}
                </div>
            @endif
        </div>
    </div>
</div>

<div class="container">

    <div class="row">

        @foreach ($events as $event)

            <div class="col-md-4 revealFadeIn">
                <h3>{{ $event->date }}</h3>
                <img src="{{ $event->getFirstMediaUrl('images') }}" class="img-fluid" alt="">
                <h4>{{ $event->venue->name }}</h4>
                <h4>${{ money($event->ticket_price) }} - ${{ money($event->vip_price) }}</h4>
            </div>

        @endforeach


    </div>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
                <div id="slick-slider">
                    @foreach ($events as $event)
                    <div>
                        <img src="{{ $event->getFirstMediaUrl('images') }}" class="img-fluid" alt="">
                    </div>
                    @endforeach
                </div>
        </div>
    </div>
</div>

@endsection

