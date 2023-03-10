<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>

    <h1 class="text-center">Crear Usuario</h1>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">


<form method="POST" action="{{ route('users.store') }}">

    @csrf
    <div class="mb-3 row">
        <label for="documento" class="form-label">Documento</label>

        <div class="col-sm-10">
          <input type="documento" class="form-control" id="documento">
        </div>
      </div>


      <div class="mb-3 row">
        <label for="nombre" class="form-label">Nombre</label>

        <div class="col-sm-10">
          <input type="nombre" class="form-control" id="nombre">
        </div>

      </div>


      <div class="mb-3 row">
        <label for="celular" class="form-label">Celular</label>

        <div class="col-sm-10">
          <input type="celular" class="form-control" id="celular">
        </div>

      </div>



      <div class="mb-3 row">
        <label for="email" class="form-label">Email</label>

        <div class="col-sm-10">
          <input type="email" class="form-control" id="email">
        </div>

      </div>


      <div class="form-group row">
        <div class="col-md-6 offset-md-1">
            <button type="submit" class="btn btn-primary">

                Create

            </button>
        </div>
      </div>

    </form>

    </div>
    </div>

</div>






















    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
