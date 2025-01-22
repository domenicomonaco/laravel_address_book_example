@extends('layouts.app')

@section('title', 'List')

@section('content')



    <div class="row g-5">
        <div class="text-center">
            <div class="d-flex justify-content-center">
                <a class="btn btn-primary" href='{{ route('contacts.create') }}'>New Address</a>
            </div>
        </div>

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
@endsection
