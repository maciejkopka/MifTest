@extends('layouts.app')

@section('content')

<div class="container">


<div class="container">
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>MIFBanking - panel konta</title>

  </head>
  @if (Route::has('login'))
    @auth
          <!--Karty-->
          <div class="row">
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-primary h-100">
                <div class="card-body">
                    <div class="mr-5 float-center">Zarządzaj kontem</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="{{ url('manageac') }}">
                  <span class="float-center">Kliknij tutaj</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-warning o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-list"></i>
                  </div>
                  <div class="mr-5">Nowy przelew</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="{{ url('transfer') }}">
                  <span class="float-left">Kliknij tutaj</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-danger">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-list"></i>
                  </div>

                    <div class="mr-5">Stan konta:  </div>
 
                    </div>
                 </div>
            </div>

          <!-- Historia przelewów -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Historia przelewów</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Imie i nazwisko</th>
                      <th>Email</th>
                      <th>Username</th>
                      <th>Kwota</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($transferhistory as $key => $data)
                    <tr>    
                      <th>{{$data->ID}}</th>
                      <th>{{$data->ImieNazwisko}}</th>
                      <th>{{$data->email}}</th>
                      <th>{{$data->username}}</th> 
                      <th>{{$data->kwota}}</th>                 
                    </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
            </div>

        </div>
        <!-- Stopka -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © MIFBanking 2022</span>
            </div>
          </div>
        </footer>

      </div>
  </body>
  @endauth
@endif
</html>

@endsection
