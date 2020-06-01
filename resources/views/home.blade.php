@extends('layouts.main')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Informasi Ruangan
      </h1>
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="box">
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Gedung</label>
                <select class="form-control select2" style="width: 100%;">
                  @foreach (App\gedung::all() as $gedung)
                    <option selected="selected" value="{{$gedung->gedung_id}}" id="gedung{{$gedung->gedung_id}}">{{$gedung->nama_gedung}}</option>
                  @endforeach
                </select>
              </div>
              <!-- /.form-group -->
              <div class="form-group">
                <label>Ruangan</label>
                <select class="form-control select2" style="width: 100%;">
                  @foreach (App\ruangan::all() as $r)
                   <option value="{{$r->ruang_id}}" id="r{{$r->ruang_id}}">{{$r->nama_ruangan}}</option>
                  @endforeach
                </select>
              </div>
              <!-- /.form-group -->
              <div class="form-group">
                <label>Date:</label>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="datepicker">
                </div>
              </div>
            </div>
          </div>
          <!-- /.row -->
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Ruangan</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>Tanggal Booking</th>
                  <th>Tanggal Pinjam</th>
                  <th>Gedung</th>
                  <th>Ruangan</th>
                  <th>Nama Peminjam</th>
                  <th>Status</th>
                </tr>
                @foreach ($book as $book)
                <tr>
                  <td>{{$book->created_at}}</td>
                  <td>{{$book->tanggal_pinjam}}</td>
                  <td>{{$book->nama_gedung}}</td>
                  <td>{{$book->nama_ruang}}</td>
                  <td>{{$book->nama_peminjam}}</td>
                  <td><span class="label label-warning">Pending</span></td>
                </tr>
                @endforeach
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
      <!-- /.box -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
