@extends('layouts.notconnected')
@section('content')
<div class="d-flex justify-content-center align-items-center" style="height:100px;">
    <div class="container h-100">
        <div class="justify-content-center">
          <!-- jquery validation -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Se connecter </h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" id="quickForm"  method="POST" action="/rpiauth">
              {{ csrf_field() }} 
              <div class="card-body">
                <div class="form-group">
                  <label for="inputRPI">RPI</label>
                  <input type="text" name="rpi" class="form-control" id="inputRPI" placeholder="Introduire RPI" required>
                </div>
                <div class="form-group">
                  <label for="inputPassword">Mot de passe</label>
                  <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Mot de passe" required>
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Se connecter</button>
              </div>
            </form>
          </div>
          <!-- /.card -->
          </div>
    </div><!-- /.container-fluid -->
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

  @endsection