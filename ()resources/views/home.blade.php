@extends('base')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>HACKER MODE</h1>
            <p>Hallo , {{Session::get('nama_petugas')}}. Apakabar?</p>

            <h2>* Id kamu : {{Session::get('id_petugas')}}</h2>
            <h2>* Nama kamu : {{Session::get('nama_petugas')}}</h2>
            <h2>* Username kamu : {{Session::get('username')}}</h2>
            <h2>* Password kamu : {{Session::get('password')}}</h2>
            <h2>* Telp kamu : {{Session::get('telp')}}</h2>
            <h2>* Level kamu : {{Session::get('level')}}</h2>
            <h2>* Status Login : {{Session::get('login')}}</h2>
            <a href="{{ url('/logout') }}" class="btn btn-primary btn-lg">Logout</a>

        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection