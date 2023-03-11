<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>

    <h1 class="text-center">Información De Animales</h1>


    <div class="p-5 ">
        <table class="table table-striped position-sticky">

            <div class="justify-content-right">
                <a class="btn btn-outline-secondary" href="{{ route('pet.create') }}">Crear animal</a>
            </div>


            <thead>
                <tr>
                    <th class="text-center">Tipo</th>
                    <th class="text-center">Nombre</th>
                    <th class="text-center">Identificador</th>
                    <th class="text-center">Eliminar</th>
                    <th class="text-center">Actualizar</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($pets as $pet)
                <tr>

                    <td class="text-center align-middle">{{ $pet->tipo }}</td>
                    <td class="text-center align-middle">{{ $pet->nombre }}</td>
                    <td class="text-center align-middle">{{ $pet->identificador }}</td>

                    <td class="text-center">
                    <form action="{{ route('pet.destroy', $pet) }}" method="POST">

                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger" href="">Eliminar</button>

                    </form>

                    </td>

                    <td class="text-center"><a class="btn btn-outline-primary"
                            href="{{ route('pet.edit', $pet) }}">Actualizar</a></td>

                </tr>
                @endforeach
            </tbody>
        </table>

    </div>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>
