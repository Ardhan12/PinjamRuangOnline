@extends('layouts.main')

@section('title','Status')

@section('content')

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Status
      </h1>
    </section>
    <section class="content">
        <div class="box-body">
            <table class="table table-bordered text-center">
                <tr>
                    <td>
                    <button style="width: 200px" type="button" class="btn btn-block btn-danger btn-lg">PPBS</button>
                    </td>  
                </tr>
            </table>
        </div>
      <!-- /.box -->
      <div class="row">
        <div class="col-md-6">
          @foreach ($book as $book)
          <div class="box">
            <!--<div class="box-header with-border">
              <h3 class="box-title">Bordered Table</h3>
            </div>-->
            <!-- /.box-header -->

            <div class="box-body">
              <table class="table table-bordered">
                <tr>
                  <th style="width: 400px">Tanggal Booking</th>
                  <td style="width: 600px">{{$book->created_at}}</td>
                </tr>
                <tr>
                  <th style="width: 400px">Tanggal Pinjam</th>
                  <td>{{$book->tanggal_pinjam}}</td>
                </tr>
                <tr>
                  <th style="width: 400px">Ruangan</th>
                  <td>{{$book->nama_ruang}}</td>
                </tr>
                <tr>
                  <th style="width: 400px">Nama Peminjam</th>
                  <td>{{$book->nama_peminjam}}</td>
                </tr>
                <tr>
                  <th style="width: 400px">Status</th>
                  <td>Pending</td>
                </tr>
                <tr>
                  <th style="width: 400px">CP PJ</th>
                  <td>{{$book->cp_user}}</td>
                </tr>
              </table>
            </div>
            <!-- /.box-body -->
            <!-- <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
                <li><a href="#">&laquo;</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">&raquo;</a></li>
              </ul>
            </div>-->
          </div>
          @endforeach
        <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection