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

    <h1>Create teacher</h1>

    <div class="p-5 ">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col"># Documento</th>
                    <th scope="col">Nombre y Apellido</th>
                    <th scope="col">Numero Celular</th>
                    <th scope="col">Email</th>
                  </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <th scope="row">1</th>
                    <td>{{ $user->Documento }}</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>{{ $user->Nombre }}</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>{{ $user->Celular }}</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>{{ $user->Email }}</td>
                  </tr>
                  @endforeach
            </tbody>
          </table>

    </div>







      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
