<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link  rel="stylesheet"href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="">
<link  rel="stylesheet"href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js">
    <title>Document</title>
</head>
<body>

<section class="container">
    <article class="row">
       <div class="form-group">
            <label>Nombre</label>
            <input type="text" name="name" id="name" class="form-control">
            </div>
            <div class="form-control">
                <button type="submit"class="btn btn-default">buscar</button>

                <a href={{route('movie.index')}} class="btn btn-primary">todos</a>
                <a href={{route('movie.create')}} class="btn btn-primary">crear</a>


       <div class=""></div>     </div>
    </article>
    <article class="col-md-12">
        <table class="table table-condensed table-striped table-borderd">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Nombre</th>
                    <th>descripcion</th>
                    <th>fecha lanzamiento</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($movie as $m )
                   <tr>
                    <td>{{$m->id}}</td>
                    <td>{{$m->name}}</td>
                    <td>{{$m->descriptions}}</td>
                    <td>{{$m->fch_lunch}}</td>
                    </tr>


                    @endforeach

                    </tbody>
            </table>
        </article>

</section>
</body>
</html>

