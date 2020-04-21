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
            <h1>Edit PENGADUAN </h1>

            <form action="{{url('petugas/editPost',@$tanggapan->id_pengaduan)}}" method="post" enctype="multipart/form-data">
    @csrf

      
        Tanggapi : <input type="text" name="tanggapan" id="tanggapan" value="{{old('tanggapan',@$tanggapan->tanggapan)}}"><br>
      <button type="submit" >Submit</button>
            </form>

        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection