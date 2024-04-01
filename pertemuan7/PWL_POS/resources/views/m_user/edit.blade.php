
@extends('layout.app')

@section('subtitle', 'User')
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'Edit User')

@section('content')
<div class="container-fluid">
  <div class="row mt-5 mb-5">
    <div class="col-lg-12 margin-tb">
      <div class="float-left">
        <h2>Edit User</h2>
      </div>
      <div class="float-right">
        <a class="btn btn-secondary" href="{{ route('m_user.index') }}">
          Kembali</a>
      </div>
    </div>
  </div>
  @if ($errors->any())
  <div class="alert alert-danger">
    <strong>Ops!</strong> Error <br><br>
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif
  <form action="{{ route('m_user.update', $useri->user_id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
          <strong>User_id:</strong>
          <input type="text" name="userid" value="{{ $useri->user_id }}" class="form-control"
            placeholder="Masukkan user id">
        </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
          <strong>Level_id:</strong>
          <input type="text" name="level_id" value="{{ $useri->level_id }}"
            class="form-control @error('level_id') is-invalid @enderror" placeholder="Masukkan level">
          @error('level_id')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
          <strong>Username:</strong>
          <input type="text" value="{{ $useri->username }}"
            class="form-control  @error('username') is-invalid @enderror" name="username"
            placeholder="Masukkan Nomor username">
          @error('username')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
      </div>
      <div class=" col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
          <strong>nama:</strong>
          <input type="text" value="{{ $useri->nama }}" name="nama"
            class="form-control @error('nama') is-invalid @enderror" placeholder="Masukkan nama"></input>
          @error('nama')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
          <strong>Password:</strong>
          <input type="password" value="{{ $useri->password
          }}" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Masukkan 
          password"></input>
          @error('password')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Update</button>
      </div>
    </div>
  </form>
</div>
@endsection
