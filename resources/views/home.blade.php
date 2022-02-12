@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="card">
                    <div class="card-header">{{ __('DATA INSERT') }}
                        <a href="{{ url('/home/user/all_data') }}" class="btn btn-primary">All Datas</a>
                    </div>

                    <div class="card-body">
                        <form action="{{ url('/home/user/data') }}" method="POST">
                            @csrf
                            <div class="col-md mb-3">
                                <input type="text" placeholder="Enter your name" name="name" class="form-control" value="{{ old('name') }}">
                                @error('name')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md mb-3">
                                <input type="text" placeholder="Enter your User name" name="uname" class="form-control" value="{{ old('uname') }}">
                                @error('uname')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md mb-3">
                                <input type="text" placeholder="Enter your Father name" name="fname" class="form-control" value="{{ old('fname') }}">
                                @error('fname')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md mb-3">
                                <input type="text" placeholder="Enter your mother name" name="mname" class="form-control" value="{{ old('mname') }}">
                                @error('mname')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md mb-3">
                                <input type="tel" placeholder="Enter your phone number" name="pnumber"
                                    class="form-control" value="{{ old('pnumber') }}">
                                @error('pnumber')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md mb-3">
                                <textarea name="address" id="" placeholder="Enter your address"
                                    class="form-control">{{ old('address') }}</textarea>
                                @error('address')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md mb-3">
                                <input type="submit" name="submit" class="form-control btn btn-primary" value="submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
