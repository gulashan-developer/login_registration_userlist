@extends('auth.layouts')

@section('content')

<form id="form" action="{{ route('authenticate') }}" method="post">
    @csrf
    <div class="row">
    <div class="mb-3 mt-3">
    <h3>Login Here!</h3>
    <div class="form-group">
        <label for="email" class="mb-1">Email<span class="text-danger">*</span></label>
        <br />
        <div class="input-group">
            <div class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
            <input type="email" id="email" @error('email') is-invalid @enderror" placeholder="Enter Your Email" name="email" value="{{ old('email') }}"/>
            @if ($errors->has('email'))
            <span class="text-danger">{{ $errors->first('email') }}</span>
            @endif
        </div>
    </div>
    <div class="form-group mt-2">
        <label for="password" class="mb-1">Password<span class="text-danger">*</span></label>
        <br />
        <div class="input-group">
            <div class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
            <input type="password" id="password" @error('password') is-invalid @enderror" placeholder="Enter Your password" name="password" value="{{ old('password') }}"/>
            @if ($errors->has('password'))
            <span class="text-danger">{{ $errors->first('password') }}</span>
            @endif
        </div>
    </div>
    </div>
    <div class="mt-2">
    <input type="submit" class="col-md-3 btn btn-primary" value="Login">
    </div>
    </div>
</div>  
 </form>
@endsection