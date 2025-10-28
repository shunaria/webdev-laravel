@extends('layouts.master')

@section('content')
<H1>Blog Page</H1>
@foreach ($blogs as $blog )
    <div class="card mb-3">
        <div class="card-body">
            <h3>{{ $blog->Judul }}</h3>
            <p>{{ $blog->Isi }}</p>
        </div>
    </div>
@endforeach


@endsection