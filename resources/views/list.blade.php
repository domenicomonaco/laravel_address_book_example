<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>

    <div class="container">

        <div class="py-5 text-center">
            <h2>Rubrica</h2>
            <p class="lead"></p>
        </div>

        <div class="py-5 text-center">
            <div class="d-flex justify-content-center">
                <a class="btn btn-primary"  href='{{ route('contacts.create') }}'>Nuovo</a>
            </div>
        </div>

        <div class="row g-5">

            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Congome</th>
                            <th scope="col">Indirizzo</th>
                            <th scope="col">Email</th>
                            <th scope="col">Telefono</th>
                            <th scope="col">Età</th>
                            <th scope="col">OPT</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($contactslist as $item)
                            <tr>
                                <th scope="row">1</th>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->second_name }}</td>
                                <td>{{ $item->address }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->phonenumber }}</td>
                                <td>{{ $item->years }}</td>
                                <td>
                                    <a class="btn btn-sm btn-warning" href="/">Modifica</a>

                                    <form action="{{ route('contacts.destroy', $item->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>




    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <script>
        $(document).ready(function() {
            console.log('Jquery');
        });
    </script>
</body>

</html>
