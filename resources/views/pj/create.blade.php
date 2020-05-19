@extends('layouts.mainpj')

@section('title','Input Ruangan')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Input Ruangan
      <small>it all starts here</small>
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
            <!-- form start -->
            <form role="form" method="post" action="create">
            @csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputNamaGedung">Nama Gedung</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Nama Gedung">
                </div>
                <div class="form-group">
                  <label for="exampleInputKodeGedung">Kode Gedung</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Kode Gedung">
                </div>
                <div class="form-group">
                  <label for="nama_ruangan">Nama Ruangan</label>
                  <input type="text" class="form-control" id="nama_ruangan" name="nama_ruangan" placeholder="Enter Nama Ruangan">
                </div>
                <div class="form-group">
                  <label for="exampleInputKodeRuangan">Kode Ruangan</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Kode Ruangan">
                </div>
                <div class="form-group">
                  <label for="kapasitas">Kapasitas Ruangan</label>
                  <input type="number" class="form-control" id="kapasitas" name="kapasitas" placeholder="Enter Kapasitas Ruangan">
                </div>
                <div class="form-group">
                  <label for="exampleInputContactPerson">Contact Person</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Contact Person">
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox"> Semua data ruangan benar dan sesuai.
                  </label>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
              </div>
            </form>
          </div>
        </div>
        <!-- /.row -->
      </div>
    </div>
    <!-- /.box -->
  </section>
  
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection