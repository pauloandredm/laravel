@extends('layouts.main')

@section('title', 'Criar evento')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Crie evento</h1>
    <form action="/events" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">evento:</label>
            <input type="text" class="form-control" id="title" name="title" palcehplder="nome do evento">
        </div>
        <div class="form-group">
            <label for="title">cidade:</label>
            <input type="text" class="form-control" id="city" name="city" palcehplder="local do evento">
        </div>
        <div class="form-group">
            <label for="title">privado?:</label>
            <select name="private" id="private" class="form-control">
                <option value="0">não</option>
                <option value="1">sim</option>
            </select>
        </div>
        <div class="form-group">
            <label for="title">descrição:</label>
            <textarea name="description" id="description" class="form-control" placeholder="decrição"></textarea>
        </div>
        <input type="submit" class="btn btn-primary" value="criar evento">
    </form>



</div>


@endsection
