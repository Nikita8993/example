@extends('admin.layouts.layouts')

@section('content')
    <div class="container mt-2">
        <div class="row">
            <div class="col-16">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="list-unstyled">
                            @foreach ($errors->all() as $error)
                                <li>{{error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if (session()->has('success'))
                    <div class="alert alert-success">
                        {{ session('success')}}
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection