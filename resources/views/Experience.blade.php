@extends('layouts.master')

@section('title', 'Experience')

@section('content')
    <h1>Experience</h1>

    @if(isset($experiences) && $experiences->count())
        @foreach ($experiences as $experience)
            <div class="card content-card mb-4">
                <div class="card-body p-4">
                    <h3 class="card-title" style="margin-bottom: .75rem;">{{ $experience->Judul }}</h3>
                    <p class="card-text" style="margin-top: .5rem;">{{ $experience->Isi }}</p>
                </div>
            </div>
        @endforeach
    @else
        <div class="content-card">
            <p>No experiences available yet.</p>
        </div>
    @endif

@endsection