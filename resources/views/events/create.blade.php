@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-middle">
            <div class="col-md-6">
                {!! Form::open()->post()->route('events.store')->multipart() !!}
                    {!! Form::text('date', 'Date')->id('flatpickr') !!}
                    {!! Form::text('artist', 'Artist Name') !!}
                    {!! Form::text('support_artist', 'Supporting Artist') !!}
                    {!! Form::textarea('description', 'Description')->id('editor') !!}
                    <div class="wrap">
                        <div class="thumb">
                            <img class="img-fluid img-preview" id="img" src="http://calgarypma.ca/wp-content/uploads/2018/01/default-thumbnail.jpg" alt="">
                            {!! Form::file('image', 'Image Upload')->id('upload') !!}
                        </div>
                    </div>
                    {!! Form::text('ticket_price', 'Ticket Price') !!}
                    {!! Form::text('vip_price', 'VIP Ticket Price') !!}
                    {!! Form::text('ticket_url', 'Ticket Link') !!}
                    {!! Form::select('venue_id', 'Location', $venues, null ) !!}
                    {!! Form::submit('Add Event') !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection

