
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>PAGE ADMINISTRATOR </h1>
            <p>Hallo ADMINISTRATOR, {{Session::get('nama_petugas')}}. Apakabar?</p>

            <h2>* Username kamu : {{Session::get('username')}}</h2>
            <h2>* Status Login : {{Session::get('login')}}</h2>
            <a href="{{ url('admin/logout') }}" class="btn btn-primary btn-lg">Logout</a>

        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
