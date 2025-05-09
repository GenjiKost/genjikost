@extends('admin.layout.app')

@section('contents')
<div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Dashboard Admin</h1>
    </div>
    
  <br>
   <!-- Content Row -->
   <div class="row">

   

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Kamar Terisi</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{$kamar_terisi}}</div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-door-closed fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                        Kamar Kosong</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{$kamar_kosong}}</div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-door-open fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Penyewa
                    </div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{$penyewa}}</div>
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-user-friends fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                        Pemasukan</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">Rp. {{ number_format($total_pemasukan, 0, ',', '.') }}</div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<!-- Content Row -->

<div class="row">

<!-- Area Chart -->
<div class="col-xl-8 col-lg-7">
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div
            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Penghuni Jatuh Tempo</h6>
            <div class="dropdown no-arrow">
                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                    aria-labelledby="dropdownMenuLink">
                    <div class="dropdown-header">Dropdown Header:</div>
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </div>
        </div>
        <!-- Card Body -->
        <div class="card-body">
        @if($jatuh_tempo->count() > 0)
        @foreach ($jatuh_tempo as $jt)
                        <div class="list-item">
                            <div class="text-truncate">
                                <a href=""
                                    class="text-body d-block">Nama : {{ $jt->user?->name }}</a>
                            </div>
                            <div class="text-truncate">
                                <a href=""
                                    class="text-body d-block">Kamar : {{ $jt->kamar?->nama }}</a>
                            </div>
                            <div class="text-truncate">
                                <a href=""
                                    class="text-body d-block">Jatuh Tempo : {{ $jt->batas }}</a>
                            </div>
                        </div>
                    @endforeach
                    @else
                <tr>
                    <td class="text-center" colspan="5">Tidak ada penghuni yang jatuh tempo</td>
                </tr>
            @endif
        </div>
    </div>
</div>

<!-- Area Chart -->
<div class="col-xl-8 col-lg-7">
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div
            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Pemberitahuan Pembayaran</h6>
            <div class="dropdown no-arrow">
                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                    aria-labelledby="dropdownMenuLink">
                    <div class="dropdown-header">Dropdown Header:</div>
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </div>
        </div>
        <!-- Card Body -->
        <div class="card-body">
        @if($pembayarans->count() > 0)
        @foreach ($pembayarans as $p)
                        <div class="list-item">
                            <div class="text-truncate">
                                <a href=""
                                    class="text-body d-block">{{ $p->user?->name }} melakukan pembayaran pada {{ $p->created_at }}</a>
                            </div>
                        </div>
                    @endforeach
                    @else
                <tr>
                    <td class="text-center" colspan="5">Tidak ada pemberitahuan</td>
                </tr>
            @endif
        </div>
    </div>
</div>
</div>

@endsection