@extends('layouts.base')

@section('content')
<div class="col-md-8 articles" id="site-content">
    <article class="posts">
        <h1>Projects</h1>
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
            @endif
    </article>
</div>
@endsection
