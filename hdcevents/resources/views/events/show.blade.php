@extends('layouts.main')

@section('title', '$event->title')

@section('content')

    <div class="col-md-10 offset-md-1">
        <div clss="row">
            <div id="info-container" class="col-md-6">
                <h1>{{ $event->title }}</h1>
                <p class="event-city">cidade: {{ $event->city }}</p>
                <p class="event-city">organizador: {{ $eventOwner['name']}}</p>
            </div>
            <div class="col-md-12" id="description-container">
                <h3>sobre o evento:</h3>
                <p class="event-description">{{ $event->description }}</p>
            </div>
        </div>
    </div>




@endsection
