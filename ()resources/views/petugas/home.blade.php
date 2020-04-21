
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>PAGE PETUGAS </h1>
            <p>Hallo PETUGAS, {{Session::get('nama_petugas')}}. Apakabar?</p>

            <h2>* Username kamu : {{Session::get('username')}}</h2>
            <h2>* Status Login : {{Session::get('login')}}</h2>

            <a href="{{url('petugas/tanggapan')}}">tanggapan</a>

	       <table>
                <tr>
                    <th>Tanggal</th>
                    <th>Isi Laporan</th>
                    <th>Foto</th>
                    <th>action</th>
                </tr>
                    @foreach($tanggapan as $data)
                <tr>
                        <?php 
                            
                            $id = $data->id_pengaduan;  
                            $status = $data->status;
                            if ($status == '0') {                                                        

                        ?>
                    <td>{{$data->tgl_pengaduan}}</td>
                    <td>{{$data->isi_laporan}}</td>
                    <td><img src="../../public/images/{{$data->foto}}"></td>
                    <td>
                        <a href="{{url('petugas/proses/'.$data->id_pengaduan)}}">proses</a>                        
                    </td>

                        <?php }else if ($status == 'proses') { ?>
                            <td>{{$data->tgl_pengaduan}}</td>
                            <td>{{$data->isi_laporan}}</td>
                            <td><img src="../../public/images/{{$data->foto}}"></td>
                            <td><a href="{{url('petugas/tambah/'.$data->id_pengaduan)}}">tanggapi</a></td>
                        <?php } else { ?>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        <?php } ?>


                </tr>
                    @endforeach
            </table>

            <a href="{{ url('petugas/logout') }}" class="btn btn-primary btn-lg">Logout</a>

        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
