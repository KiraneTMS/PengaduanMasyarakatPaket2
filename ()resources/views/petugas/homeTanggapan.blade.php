
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>PAGE PETUGAS </h1>
            <p>Hallo PETUGAS, {{Session::get('nama_petugas')}}. Apakabar?</p>

            <h2>* Username kamu : {{Session::get('username')}}</h2>
            <h2>* Status Login : {{Session::get('login')}}</h2>

            <a href="{{url('petugas/home')}}">home</a>

	       <table>
                <tr>
                    <th>id pengaduan</th>
                    <th>nama pengadu</th>
                    <th>tanggal</th>
                    <th>tanggapan</th>
                    <th>petugas</th>
                    <th>Aksi</th>
                </tr>
                    @foreach($tanggapan1 as $row)
                <tr>

                        <td>{{$row->id_pengaduan}}</td>
                        <td>{{$row->pengaduan->masyarakat->nama}}</td>
                        <td>{{$row->tgl_tanggapan}}</td>    
                        <td>{{$row->tanggapan}}</td>    
                        <td>{{$row->petugas->nama_petugas}}</td>                                    

                    
                
                    <td>
                        <a href="{{url('petugas/edit/'.$row->id_pengaduan)}}">edit</a>
                        <form action="{{url('petugas/hapus'.$row->id_tanggapan)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit">delete</button>
                        </form>
                    </td>
                </tr>
                        @endforeach
            </table>

            <a href="{{ url('petugas/logout') }}" class="btn btn-primary btn-lg">Logout</a>

        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
