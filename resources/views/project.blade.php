
@extends('layouts.master')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Projects</h1>
    <div class="row g-4">
        @foreach ($projects as $project)
            <div class="col-md-6 mb-4">
                <div class="card h-100 shadow-sm bg-white mx-2">
                    <div class="card-body p-4">
                        <h3 class="card-title text-primary">{{ $project->judul }}</h3>
                        <div class="d-flex justify-content-between mb-3">
                            <span class="badge bg-success">Start: {{ \Carbon\Carbon::parse($project->{'tanggal mulai'})->format('d M Y') }}</span>
                            <span class="badge bg-info">End: {{ \Carbon\Carbon::parse($project->{'tanggal selesai'})->format('d M Y') }}</span>
                        </div>
                        <p class="card-text text-dark">{{ $project->informasi }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

<style>
.container {
    padding: 0 30px;
}

.row {
    margin: 0 -15px;
}

.card {
    transition: transform 0.2s;
    border: none;
    border-radius: 15px;
    background-color: #ffffff !important;
    margin: 15px;
}

.card:hover {
    transform: translateY(-5px);
    box-shadow: 0 4px 15px rgba(0,0,0,0.1) !important;
}

.card-body {
    padding: 1.5rem !important;
}

.card-title {
    font-size: 1.4rem;
    font-weight: 600;
    margin-bottom: 1rem;
    color: #2c3e50;
}

.badge {
    padding: 8px 12px;
    font-weight: 500;
    font-size: 0.8rem;
}

.card-text {
    color: #2c3e50;
    line-height: 1.6;
}

.bg-white {
    background-color: #ffffff !important;
}

.col-md-6 {
    padding: 15px;
}

@media (min-width: 768px) {
    .row {
        margin: 0 -20px;
    }
    .col-md-6 {
        padding: 20px;
    }
}
</style>
@endsection