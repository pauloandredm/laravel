@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')

<div id="search-container" class="col-md-12">
    <h1>busque um evento</h1>
    <form action="/" method="GET">
        <input type="text" id="search" name="search" class="form-control" placeholder="procurando evento...">
    </form>
</div>

<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>

<div id="events-container" class="col-md-12">

    @if($search)
    <h2>buscando por: {{ $search }}</h2>
    @else
    <h2>proximos eventos</h2>
    @endif

    @foreach($events as $event)
    <div class="card col-md-3">
        <div class="card-body">
            <p>titulo: {{ $event->title }}</p>
            <p>descrição: {{ $event->description }}</p>
            <a href="/events/{{ $event->id }}" class="btn btn-primary">saber mais</a>
        </div>
    </div>
    @endforeach
</div>


@endsection
