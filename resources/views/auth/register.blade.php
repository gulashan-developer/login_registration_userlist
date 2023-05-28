@extends('auth.layouts')

@section('content')

<form id="form" action="{{ route('store') }}" method="post">
    @csrf
    <div class="row">
    <div class="mt-3">
    <h3>Register Here!</h3>
    <div class="form-group">
        <label for="name" class="md-3">Name<span class="text-danger">*</span></label>
        <br />
        <div class="input-group">
            <div class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></div>
            <input type="text" id="name" @error('name') is-invalid @enderror" placeholder="Enter Your Name" name="name" value="{{ old('name') }}"/>
            @if ($errors->has('name'))
            <span class="text-danger">{{ $errors->first('name') }}</span>
            @endif
        </div>
    </div>
    <div class="form-group">
        <label for="email" class="md-3 mt-1">Email<span class="text-danger">*</span></label>
        <br />
        <div class="input-group">
            <div class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
            <input type="email" id="email" @error('email') is-invalid @enderror" placeholder="Enter Your Email" name="email" value="{{ old('email') }}"/>
            @if ($errors->has('email'))
            <span class="text-danger">{{ $errors->first('email') }}</span>
            @endif
        </div>
    </div>
    <div class="form-group">
        <label for="mobile" class="md-3 mt-1">Mobile<span class="text-danger">*</span></label>
        <br />
        <div class="input-group">
            <div class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
            <input type="mobile" id="mobile" @error('mobile') is-invalid @enderror" placeholder="Enter Your mobile" maxlength="10" name="mobile" value="{{ old('mobile') }}"/>
            @if ($errors->has('mobile'))
            <span class="text-danger">{{ $errors->first('mobile') }}</span>
            @endif
        </div>
    </div>
    <div class="form-group">
        <label for="dob" class="md-3 mt-1">Date of Birth<span class="text-danger">*</span></label>
        <br />
        <div class="input-group">
            <div class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
            <input type="date" id="dob" @error('dob') is-invalid @enderror" placeholder="dd/mm/yyyy" name="dob" value="{{ old('dob') }}"/>
            @if ($errors->has('dob'))
            <span class="text-danger">{{ $errors->first('dob') }}</span>
            @endif
        </div>
    </div>
    <div class="form-group">
        <label for="address" class="md-3 mt-1">Address<span class="text-danger">*</span></label>
        <br />
        <div class="input-group">
            <div class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
            <input type="text" id="address" @error('address') is-invalid @enderror" placeholder="Enter Your address" name="address" value="{{ old('address') }}"/>
            @if ($errors->has('address'))
            <span class="text-danger">{{ $errors->first('address') }}</span>
            @endif
        </div>
    </div>
    <div class="form-group">
        <label for="password" class="md-3 mt-1">Password<span class="text-danger">*</span></label>
        <br />
        <div class="input-group">
            <div class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
            <input type="password" id="password" @error('password') is-invalid @enderror" placeholder="Enter Your password" name="password" value="{{ old('password') }}"/>
            @if ($errors->has('password'))
            <span class="text-danger">{{ $errors->first('password') }}</span>
            @endif
        </div>
    </div>
    <div class="form-group">
        <label for="password_confirmation" class="md-3 mt-1">Confirm Password<span class="text-danger">*</span></label>
        <br />
        <div class="input-group">
            <div class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
            <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Enter Your Confirm Password">
        </div>
    </div>
    </div>
    <div class="mt-2">
    <input type="submit" class="col-md-3 btn btn-primary mt-2" value="Register">
    </div>
    </div>
</div>  
 </form>

@endsection