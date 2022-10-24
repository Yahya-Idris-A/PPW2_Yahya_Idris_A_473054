@extends('layouts.base')

@section('content')
<div class="content-header">
    <div class="container">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0"> {{ $title }} </small></h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/home">Home</a></li>
                    <li class="breadcrumb-item"><a href="/posts">Projects</a></li>
                    <li class="breadcrumb-item active">Detail project</li>
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
                        <h1>{{$posts->title}}</h1>
                        <span><i class="bi bi-person-circle"></i> Dewa Kucing</span>
                        <span><i class="bi bi-calendar"></i> {{$posts->created_at}}</span>
                        <p>{{$posts->description}}</p>
                        @if(Auth::user())
                            <a href="/posts/{{$posts->id}}/edit" class="btn btn-primary">Edit</a><br>
                            <form action="{{ route('posts.destroy', $posts->id) }}" method="POST">
                            @method('DELETE')
                            {{ csrf_field() }}
                            <input type="hidden" name="id" value="{{ $posts->id }}"> <br />
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Post akan dihapus')">Delete</button>
                            </form><br>
                        @endif
                        <a href="/posts">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection