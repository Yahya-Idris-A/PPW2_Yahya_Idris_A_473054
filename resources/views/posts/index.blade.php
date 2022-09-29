@extends('layouts.base')

@section('content')
    <div class="content-header">
        <div class="container">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"> {{ $title }} </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/home">Home</a></li>
                        <li class="breadcrumb-item active">Projects</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body color_post">
                            @if (\Session::has('success'))
                                <div class="alert alert-success">
                                    {!! \Session::get('success') !!}
                                </div>
                            @endif
                                <h1>Blog Posts</h1>
                                <a href="/posts/create">Create New Projects</a>
                                @if(count($posts)>0)
                                    @foreach ($posts as $post)
                                        <div class="well">
                                            <h3><a href="/posts/{{$post->id}}">
                                            {{$post->title}}</a></h3>
                                            <small>
                                                Tanggal: {{$post->created_at}}
                                            </small>
                                        </div>
                                    @endforeach
                                @else
                                    <h3>Tidak ada data.</h3>
                                @endif <br>
                                Halaman : {{ $posts->currentPage() }} <br>
                                Jumlah Data : {{ $posts->total() }} <br>
                                Data Per Halaman : {{ $posts->perPage() }} <br>
                                <div class="d-flex">
                                    {{ $posts->links('pagination::bootstrap-4') }}
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection