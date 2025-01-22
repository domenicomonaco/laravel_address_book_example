@extends('layouts.app')

@section('title', 'New Address')

@section('content')

    <div class="row g-5">

        <div class="text-center">
            <div class="d-flex justify-content-center">
                <a class="btn btn-primary" href='{{ route('contacts.list') }}'>Back to list</a>
            </div>
        </div>

        <div class="col-12">
            <div>
                @if ($errors->create->any())
                    {!! implode('', $errors->create->all('<div class="alert alert-danger">:message</div>')) !!}
                @endif
            </div>
            <h4 class="mb-3">Address item</h4>
            <form action="{{ route('contacts.store') }}" method="post">
                @csrf
                <div class="row g-3">
                    <div class="col-sm-6">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" id="name" placeholder="" value="{{ old('name') }}"
                            required="" @class([
                                'form-control' => true,
                                'is-invalid' => $errors->create->has('name'),
                            ])>

                        @error('name', 'create')
                            <div id="validationFeedbackName" class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-sm-6">
                        <label for="second_name" class="form-label">Second name</label>
                        <input type="text" class="form-control" name="second_name" id="second_name" placeholder=""
                            value="{{ old('second_name') }}" required="">
                    </div>

                    <div class="col-sm-12">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" name="address" id="address" placeholder=""
                            value="{{ old('address') }}" required="">
                    </div>

                    <div class="col-sm-5">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" name="email" id="email" placeholder=""
                            value="{{ old('email') }}" required="">
                    </div>

                    <div class="col-sm-5">
                        <label for="phonenumber" class="form-label">Phone</label>
                        <input type="text" class="form-control" name="phonenumber" id="phonenumber" placeholder=""
                            value="{{ old('phonenumber') }}" required="">

                    </div>

                    <div class="col-sm-2">
                        <label for="years" class="form-label">Years</label>
                        <input type="number" class="form-control" name="years" id="years" placeholder=""
                            value="{{ old('years') }}" required="">

                    </div>

                </div>

                <hr class="my-4">

                <button class="w-100 btn btn-primary btn-lg" type="submit">Save</button>
            </form>
        </div>
    </div>
@endsection
