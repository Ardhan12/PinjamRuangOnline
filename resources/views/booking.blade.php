@extends('layouts.main')

@section('title','Booking Ruangan')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Booking Ruangan
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
            <form role="form" method="post" action="booking">
            @csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="name_organisasi">Nama Organisasi</label>
                  <p class="mt-2">{{ Auth::user()->name }}</p>
                </div>
                <div class="form-group">
                  <label for="namagedung">Gedung</label>
                  <select class="form-control" id="nama_gedung" name="nama_gedung" required>
                    @foreach (App\gedung::all() as $gedung)
                      <option value="{{$gedung->nama_gedung}}">{{$gedung->nama_gedung}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="nama_ruang">Ruangan</label>
                  <select class="form-control" id="nama_ruang" name="nama_ruang" required>
                    @foreach (App\ruangan::all() as $r)
                      <option value="{{$r->nama_ruangan}}">{{$r->nama_ruangan}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="npm">NPM</label>
                  <input type="text" class="form-control" id="npm" name="npm" placeholder="Enter NPM">
                </div>
                <div class="form-group">
                  <label for="nama_peminjam">Nama Peminjam</label>
                  <input type="text" class="form-control" id="nama_peminjam" name="nama_peminjam" placeholder="Enter Nama Peminjam">
                </div>
                <div class="form-group">
                  <label for="foto_ktm">Upload Foto KTM</label>
                  <input type="file" id="foto_ktm" name="foto_ktm">

                  <p class="help-block">*KTM harus sesuai dengan peminjam.</p>
                </div>
                <div class="form-group">
                  <label for="surat">Upload Surat Izin</label>
                  <input type="file" id="surat" name="surat">

                  <p class="help-block">*Surat izin harus sudah disetujui oleh Dekanat.</p>
                </div>
                <div class="form-group">
                  <label>Tanggal Pinjam</label>
                  <div class="input-group date">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                  <input type="text" class="form-control pull-right" id="datepicker" name="tanggal_pinjam">
                  </div>
                </div>
                <div class="form-group">
                  <label for="cp_user">Nomor Handphone</label>
                  <input type="text" class="form-control" id="cp_user" name="cp_user" placeholder="Enter Nomor Handphone">
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