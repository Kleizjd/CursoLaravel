@extends('Layouts.app')
@section('title', 'Trainers Create')
@section('content')
    <form class="form-group" method="POST" action="/trainers" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control">
        </div>
        <div class="form-group">
            <label for="avatar">Avatar</label>
            <input type="file" name="avatar" id="avatar" class="">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>   
@endsection
<!-- <html>
    <head>
        <title>Trainer</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
        

        <p>Hola Mundo este ese mi primer proyecto en larabel</p>
    </body>
</html> -->