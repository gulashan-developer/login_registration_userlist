@extends('auth.layouts')

@section('content')
<div class="bg-light mt-4 tbshow">
  @if (session()->has('success'))
    <div class="alert alert-warning alert-dismissible fade show">
      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
      <strong>Warning! </strong> {{ session('success') }}
    </div>
    @endif
  <h3 class="text-center hdr">-:Data Table Show:-</h3>      
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>S.No.</th>
        <th>Name</th>
        <th>Email</th>
        <th>Mobile</th>
        <th>Date of Birth</th>
        <th>Address</th>
        <th>Action</th> 
      </tr>
    </thead>
    <tbody>
        @foreach ($variable as $value)
      <tr>
        <td>{{ $loop->index+1 }}</td>
        <td>{{ $value->name }}</td>
        <td>{{ $value->email }}</td>
        <td>{{ $value->mobile }}</td>
        <td>{{ $value->dob }}</td>
        <td>{{ $value->address }}</td>
        <td>
          <form action="{{ route('delete',$value->id) }}" method="post">
            <button class="btn btn-primary"><a class="text-white text-decoration-none" href="{{ route('edit',$value->id) }}">Edit</a></button>
            @csrf
            <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-danger">Delete<i class="fa fa-trash"></i></button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection
