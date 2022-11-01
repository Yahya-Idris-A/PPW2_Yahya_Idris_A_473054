@extends('layouts.base')

@section('content')
<div class="row justify-content-center">
    <h3 class="text-center my-2">QUEUE LARAVEL</h3>
    <div class="col-md-4 p-4">
        {{-- send email --}}
        @if (session('status'))
        <div class="alert alert-primary" role="alert">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('post-email') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Nama</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Nama">
            </div>
            <div class="form-group my-3">
                <label for="email">Email Tujuan</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Email Tujuan">
            </div>
            <div class="form-group my-3">
                <label for="name">Deskripsi</label>
                <textarea name="body" id="" cols="30" rows="10" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <button class="btn btn-primary">Kirim Email</button>
            </div>
        </form>
    </div>
</div>
@endsection
