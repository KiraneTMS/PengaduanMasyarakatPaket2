@extends('admin.base')
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
            <h1 class="title" style="margin-top: 30px;margin-bottom: 20px">TAMBAH PENGADUAN </h1>

            <form action="{{url('admin/tanggapan',@$pengaduan->id_pengaduan)}}" method="post" enctype="multipart/form-data" style="margin-left: 70px">
    @csrf

      
        Tanggapi : <input type="text" name="tanggapan" id="tanggapan"><br>
      <button type="submit" class="pulse" style="width: 50%;margin-left: 30%" >Submit</button>
            </form>

        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection