@extends('layouts.main')

@section('content')

<!-- Judul Halaman -->
<h3 class="text-gray-800 mb-4 font-weight-bold">Dashboard Overview</h3>

<div class="row">

    <!-- Card User Aktif -->
    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">

                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            User Aktif</div>
                        <div class="h4 mb-0 font-weight-bold text-gray-800">
                            {{ $userAktif }}
                        </div>
                    </div>

                    <div class="col-auto">
                        <i class="fas fa-users fa-2x text-success"></i>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Card Admin -->
    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">

                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">

                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Jumlah Admin</div>
                        <div class="h4 mb-0 font-weight-bold text-gray-800">
                            {{ $jumlahAdmin }}
                        </div>

                    </div>

                    <div class="col-auto">
                        <i class="fas fa-user-shield fa-2x text-primary"></i>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Card Total User -->
    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">

                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            Total User</div>
                        <div class="h4 mb-0 font-weight-bold text-gray-800">
                            {{ \App\Models\User::count() }}
                        </div>

                    </div>

                    <div class="col-auto">
                        <i class="fas fa-user-friends fa-2x text-warning"></i>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>


<!-- Tabel User Terbaru -->
<div class="row">
    <div class="col-xl-12 col-lg-12">
        <div class="card shadow mb-4">

            <div class="card-header py-3 d-flex justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">5 User Terbaru</h6>
                <a href="{{ route('users.index') }}" class="btn btn-sm btn-primary">Lihat Semua</a>
            </div>

            <div class="card-body">

                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead class="bg-light">
                            <tr>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>Tanggal Daftar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($userTerbaru as $u)
                            <tr>
                                <td>{{ $u->name }}</td>
                                <td>{{ $u->email }}</td>
                                <td>
                                    @if($u->status == 'active')
                                        <span class="badge badge-success">Active</span>
                                    @else
                                        <span class="badge badge-danger">Suspended</span>
                                    @endif
                                </td>
                                <td>{{ $u->created_at->format('d M Y') }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>

        </div>
    </div>
</div>

@endsection
