@extends('backend.layout.app')
@section('title', 'Dashboard | Home')
@section('content')
    <nav class="navbar px-0">
        <div class="container-fluid">

            <a href="{{ route('dashboard.home') }}" class="nav-link align-middle px-0">
                <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline"></span>
            </a>
            <div class="float-right h-auto d-flex">

                <a href="{{ route('logout') }}" class="nav-link align-middle px-0">Logout  <i class="bi bi-power"
                        style="font-size:18px"></i> </a>
            </div>

        </div>
    </nav>

    <div class="card px-5 py-5  min-vh-100">
        <h4>Hello, {{ auth()->user()->name }}</h4>
    </div>

@endsection
