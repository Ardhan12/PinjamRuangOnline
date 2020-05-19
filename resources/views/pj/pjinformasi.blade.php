@extends('layouts.mainpj')

@section('title','Informasi Ruangan')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Informasi Ruangan
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
                <th>Nama Gedung</th>
                <th>Kode Gedung</th>
                <th>Nama Ruangan</th>
                <th>Kode Ruangan</th>
                <th>Kapasitas</th>
                <th>Contact Person</th>
                <th>Action</th>
              </tr>
              <tr>
                <td>PPBS</td>
                <td>0000</td>
                <td>UABJ0101</td>
                <td>0000</td>
                <td>100</td>
                <td>000000000000</td>
                <td>
                <button type="submit" class="btn btn-default">Edit</button>
                <button type="submit" class="btn btn-default">Delete</button>
                </td>
              </tr>
              <tr>
              <td>PPBS</td>
                <td>0000</td>
                <td>UABJ0101</td>
                <td>0000</td>
                <td>100</td>
                <td>000000000000</td>
                <td>
                <button type="submit" class="btn btn-default">Edit</button>
                <button type="submit" class="btn btn-default">Delete</button>
                </td>
              </tr>
              <tr>
              <td>PPBS</td>
                <td>0000</td>
                <td>UABJ0101</td>
                <td>0000</td>
                <td>100</td>
                <td>000000000000</td>
                <td>
                <button type="submit" class="btn btn-default">Edit</button>
                <button type="submit" class="btn btn-default">Delete</button>
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