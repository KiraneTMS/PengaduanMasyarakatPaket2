@extends('masyarakat.base')
@section('content')

    @if(session('error'))
      <div class="">
        {{ session('error') }}
      </div>
    @endif

    @if(count($errors)>0)
      <div class="">
          <strong>Perhatian</strong>
          <br>
            <ul>
              @foreach($errors->all() as $error)
                <li>{{$error}}</li>
              @endforeach
            </ul>
      </div>
    @endif

    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>TAMBAH PENGADUAN </h1>

            <form action="{{url('masyarakat',@$pengaduan->id_pengaduan)}}" method="post" enctype="multipart/form-data">

    @csrf
      @if(!empty($pengaduan))
        @method('PATCH')
      @endif
        isi_laporan : <input type="text" name="isi_laporan" id="isi_laporan" value="{{old('isi_laporan',@$pengaduan->isi_laporan)}}"><br>
        Foto : <input type="file" name="foto" id="foto" value="{{old('foto',@$pengaduan->foto)}}" {{old('foto',@$pengaduan->foto)}}><br>
      <button type="submit" >Submit</button>
            </form>

        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection