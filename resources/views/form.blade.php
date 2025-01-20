<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Address Book Example</title>

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

                <a class="btn btn-secondary" href='{{ route('contacts.list') }}'>Torna alla lista</a>
            </div>
        </div>

        <div class="row g-5">

            <div class="col-12">
                <h4 class="mb-3">Address item</h4>
                <form action="{{ route('contacts.store') }}" method="post">
                    @csrf
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="" value=""
                                required="">
                        </div>

                        <div class="col-sm-6">
                            <label for="second_name" class="form-label">Second name</label>
                            <input type="text" class="form-control" name="second_name" id="second_name" placeholder="" value=""
                                required="">
                        </div>

                        <div class="col-sm-12">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control" name="address" id="address" placeholder="" value=""
                                required="">
                        </div>

                        <div class="col-sm-5">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" id="email" placeholder="" value=""
                                required="">

                        </div>

                        <div class="col-sm-5">
                            <label for="phonenumber" class="form-label">Phone</label>
                            <input type="text" class="form-control" id="phonenumber" placeholder="" value=""
                                required="">

                        </div>

                        <div class="col-sm-2">
                            <label for="years" class="form-label">Years</label>
                            <input type="number" class="form-control" id="years" placeholder="" value=""
                                required="">

                        </div>

                    </div>

                    <hr class="my-4">

                    <button class="w-100 btn btn-primary btn-lg" type="submit">Salva</button>
                </form>
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
