@extends('layouts.app')

{{--section('title', 'Index')--}}

@section('content')

    <div class="row g-5">

        <section class="jumbotron text-center">
            <div class="container">
                <h1>Laravel Address Book Example</h1>
                <p class="lead text-muted">Simple CRUD example about Addres Book</p>
                <p>
                    <a class="btn btn-secondary" href='{{ route('contacts.list') }}'>Address Book</a>
                </p>
            </div>
        </section>
        </main>
    </div>
@endsection
