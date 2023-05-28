@extends('auth.layouts')

@section('content')

<form id="form" action="{{ route('update',$variable->id) }}" method="post">
    @csrf
    <div class="row">
    <div class="mt-3">
    <h3>Updated Here!</h3>
    <div class="form-group">
        <label for="name" class="md-3">Name<span class="text-danger">*</span></label>
        <br />
        <div class="input-group">
            <div class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></div>
            <input type="text" id="name" name="name" value="{{ $variable->name }}"/>
        </div>
    </div>
    <div class="form-group">
        <label for="email" class="md-3 mt-1">Email<span class="text-danger">*</span></label>
        <br />
        <div class="input-group">
            <div class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
            <input type="email" id="email" name="email" value="{{ $variable->email }}"/>
        </div>
    </div>
    <div class="form-group">
        <label for="mobile" class="md-3 mt-1">Mobile<span class="text-danger">*</span></label>
        <br />
        <div class="input-group">
            <div class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
            <input type="mobile" id="mobile" maxlength="10" name="mobile" value="{{ $variable->mobile }}"/>
        </div>
    </div>
    <div class="form-group">
        <label for="dob" class="md-3 mt-1">Date of Birth<span class="text-danger">*</span></label>
        <br />
        <div class="input-group">
            <div class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
            <input type="date" id="dob" name="dob" value="{{ $variable->dob }}"/>
        </div>
    </div>
    <div class="form-group">
        <label for="address" class="md-3 mt-1">Address<span class="text-danger">*</span></label>
        <br />
        <div class="input-group">
            <div class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
            <input type="address" id="address" name="address" value="{{ $variable->address }}"/>
        </div>
    </div>
    </div>
    <div class="mt-2">
    <input type="submit" class="col-md-3 btn btn-primary mt-2" name="save" value="Update">
    </div>
    </div>
</div>  
 </form>

@endsection