@extends('auth.layouts')

@section('content')
<div class="row justify-content-center mt-5">
    <div class="col-md-12">
        <div><h1>Welcome to Dashboard: Hello! {{ Auth::user()->name }}</h1></div>
    </div>
</div>
@endsection