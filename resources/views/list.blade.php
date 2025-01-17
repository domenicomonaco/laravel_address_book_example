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
                <a class="btn btn-primary" href="/">Nuovo</a>
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
                            <th scope="col">Telefono</th>
                            <th scope="col">Età</th>
                            <th scope="col">OPT</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Domenico</td>
                            <td>Monaco</td>
                            <td>Via Salvo d'Acquisto 39, Cisternino (BR)</td>
                            <td>+39 339 5457151</td>
                            <td>Mark</td>
                            <td>
                                <a class="btn btn-sm btn-warning" href="/">Modifica</a>
                                <a class="btn  btn-sm btn-danger" href="/">Elimina</a>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>




    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <script>
        $(document).ready(function () {
            console.log('Jquery');
        });
    </script>
</body>

</html>