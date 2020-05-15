@extends('layouts.main')

@section('title','Booking Ruangan')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Booking Ruangan
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
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="name_organisasi">Nama Organisasi</label>
                  <input type="text" class="form-control" id="name_organisasi" placeholder="Enter Nama Organisasi">
                </div>
                <div class="form-group">
                  <label for="nama_gedung">Gedung</label>
                  <select class="form-control">
                    <option selected="selected">Silakan Pilih Gedung</option>
                    <option value="option1">option 1</option>
                    <option value="option2">option 2</option>
                    <option value="option3">option 3</option>
                    <option value="option4">option 4</option>
                    <option value="option5">option 5</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="nama_ruang">Ruangan</label>
                  <select class="form-control">
                    <option selected="selected">Silakan Pilih Ruangan</option>
                    <option value="option1">option 1</option>
                    <option value="option2">option 2</option>
                    <option value="option3">option 3</option>
                    <option value="option4">option 4</option>
                    <option value="option5">option 5</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="npm">NPM</label>
                  <input type="text" class="form-control" id="npm" placeholder="Enter NPM">
                </div>
                <div class="form-group">
                  <label for="nama">Nama Peminjam</label>
                  <input type="text" class="form-control" id="nama" placeholder="Enter Nama Peminjam">
                </div>
                <div class="form-group">
                  <label for="foto_ktm">Upload Foto KTM</label>
                  <input type="file" id="foto_ktm">

                  <p class="help-block">*KTM harus sesuai dengan peminjam.</p>
                </div>
                <div class="form-group">
                  <label for="surat">Upload Surat Izin</label>
                  <input type="file" id="surat">

                  <p class="help-block">*Surat izin harus sudah disetujui oleh Dekanat.</p>
                </div>
                <div class="form-group">
                  <label>Date and time range:</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-clock-o"></i>
                    </div>
                    <input type="text" class="form-control pull-right" id="reservationtime">
                  </div>
                </div>
                <div class="form-group">
                  <label for="cp_user">Nomor Handphone</label>
                  <input type="text" class="form-control" id="cp_user" placeholder="Enter Nomor Handphone">
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox"> Saya telah menyetujui semua peraturan peminjaman ruangan.
                  </label>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
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