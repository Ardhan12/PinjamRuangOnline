@extends('layouts.main')

@section('title','PJ Dashboard')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      PJ Dashboard
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
            <div class="form-group">
              <label>Gedung</label>
              <select class="form-control select2" style="width: 100%;">
                <option selected="selected">Silakan Pilih Gedung</option>
                <option>A</option>
                <option>B</option>
                <option>C</option>
                <option>D</option>
                <option>E</option>
                <option>F</option>
              </select>
            </div>
            <!-- /.form-group -->
            <div class="form-group">
              <label>Ruangan</label>
              <select class="form-control select2" style="width: 100%;">
                <option selected="selected">Silakan Pilih Ruangan</option>
                <option>A</option>
                <option>B</option>
                <option>C</option>
                <option>D</option>
                <option>E</option>
                <option>F</option>
              </select>
            </div>
            <!-- /.form-group -->
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
                <th>Tanggal/Waktu Pinjam</th>
                <th>Surat Izin</th>
                <th>KTM</th>
                <th>Peminjam</th>
                <th>No. HP</th>
                <th>Organisasi</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
              <tr>
                <td>00/00/0000</td>
                <td>00/00/0000 00:00 AM - 00/00/0000 00:00 AM</td>
                <td></td>
                <td></td>
                <td>Justin</td>
                <td>000000000000</td>
                <td>BEMF</td>
                <td><span class="label label-success">Approved</span></td>
                <td>
                <button type="submit" class="btn btn-default">Accept</button>
                <button type="submit" class="btn btn-default">Decline</button>
                </td>
              </tr>
              <tr>
                <td>00/00/0000</td>
                <td>00/00/0000 00:00 AM - 00/00/0000 00:00 AM</td>
                <td></td>
                <td></td>
                <td>Justin</td>
                <td>000000000000</td>
                <td>BEMF</td>
                <td><span class="label label-warning">Pending</span></td>
                <td>
                <button type="submit" class="btn btn-default">Accept</button>
                <button type="submit" class="btn btn-default">Decline</button>
                </td>
              </tr>
              <tr>
                <td>00/00/0000</td>
                <td>00/00/0000 00:00 AM - 00/00/0000 00:00 AM</td>
                <td></td>
                <td></td>
                <td>Justin</td>
                <td>000000000000</td>
                <td>BEMF</td>
                <td><span class="label label-danger">Denied</span></td>
                <td>
                <button type="submit" class="btn btn-default">Accept</button>
                <button type="submit" class="btn btn-default">Decline</button>
                </td>
              </tr>
              <tr>
                <td>00/00/0000</td>
                <td>00/00/0000 00:00 AM - 00/00/0000 00:00 AM</td>
                <td></td>
                <td></td>
                <td>Justin</td>
                <td>000000000000</td>
                <td>BEMF</td>
                <td><span class="label label-success">Approved</span></td>
                <td>
                <button type="submit" class="btn btn-default">Accept</button>
                <button type="submit" class="btn btn-default">Decline</button>
                </td>
              </tr>
              <tr>
                <td>00/00/0000</td>
                <td>00/00/0000 00:00 AM - 00/00/0000 00:00 AM</td>
                <td></td>
                <td></td>
                <td>Justin</td>
                <td>000000000000</td>
                <td>BEMF</td>
                <td><span class="label label-success">Approved</span></td>
                <td>
                <button type="submit" class="btn btn-default">Accept</button>
                <button type="submit" class="btn btn-default">Decline</button>
                </td>
              </tr>
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