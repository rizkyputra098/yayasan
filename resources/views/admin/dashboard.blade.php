@extends('admin.layout.reusable')

@section('content')
    <h1 class="mt-4">Dashboard</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{asset ('css/card.css')}}" rel="stylesheet">
    <div class="row">
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-blue order-card position-relative shadow-sm rounded">
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-circle bg-danger"
                      style="width: 28px; height: 28px; font-size: 14px; z-index: 1;">
                    3
                </span>
                <div class="card-block p-3 text-white">
                    <h6 class="mb-3">Kegiatan</h6>
                    <h2 class="d-flex justify-content-between align-items-center mb-3">
                        <i class="fa fa-tasks fs-3 me-2"></i>
                        <span class="fs-4 fw-bold">486</span>
                    </h2>
                    <p class="d-flex justify-content-between m-0">
                        <span>Disetujui</span>
                        <span class="fw-semibold">351</span>
                    </p>
                </div>
            </div>
        </div>
        
        
        
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-green order-card shadow-sm rounded">
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-circle bg-danger"
                style="width: 28px; height: 28px; font-size: 14px; z-index: 1;">
              3
          </span>
                <div class="card-block p-3">
                    <h6 class="mb-3 text-white">Kunjungan</h6>
        
                    <h2 class="d-flex justify-content-between align-items-center text-white mb-3">
                        <i class="fa fa-user fs-3 me-2"></i>
                        <span class="fs-4 fw-bold">486</span>
                    </h2>
        
                    <p class="d-flex justify-content-between text-white m-0">
                        <span>Disetujui</span>
                        <span class="fw-semibold">351</span>
                    </p>
                </div>
            </div>
        </div>
        
   
	</div>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-chart-area me-1"></i>
            Data Setiap Bulan
        </div>
        <div class="card-body"><canvas id="myAreaChart" width="100%" height="30"></canvas></div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="{{ asset('js/chart-area-demo.js') }}"></script>
@endsection


