@extends('masyarakat.base')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>PAGE MASYARAKAT </h1>
            <p>Hallo Masyarakat Jelata, {{Session::get('nama')}}. Apakabar?</p>

            <h2>* Username kamu : {{Session::get('username')}}</h2>

            <a href="{{url('masyarakat/tambah')}}">tambah</a>

            <table>
                <tr>
                    <th>Tanggal</th>
                    <th>Isi Laporan</th>
                    <th>Foto</th>
                    <th>action</th>
                </tr>
                    @foreach($pengaduan as $data)
                <tr>
                    <td>{{$data->tgl_pengaduan}}</td>
                    <td>{{$data->isi_laporan}}</td>
                    <td><img src="../../public/images/{{$data->foto}}"></td>
                    <td>
                        <a href="{{url('masyarakat/edit/'.$data->id_pengaduan)}}">edit</a>
              <form action="{{ url('masyarakat/hapus'.$data->id_pengaduan) }}" method="post">
                @method('DELETE')
                @csrf
                <button type="submit">Delete</button>
              </form>
                    </td>
                </tr>
                    @endforeach
            </table>

            <a href="{{ url('masyarakat/logout') }}" class="btn btn-primary btn-lg">Logout</a>

        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection