@extends('layouts.app')

@section('content')
<div class="container">
    <div class="container-fluid">
        <div class="card mb-4">
        <img src="https://i.ibb.co/C7s1W6H/banner.png" class="card-img-top" alt="banner">

            <div class="card-body">

                @yield('contenido')

            </div>
        </div>
    </div>
</div>
@endsection
