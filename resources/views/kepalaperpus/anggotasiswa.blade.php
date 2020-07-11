@extends('kepalaperpus.layouts.master')
@section('title','anggotasiswa')

@section('content')
<!-- Isi File siswa.php-->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Siswa SMK N 1 Sambi
      </h1>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <!-- box -->
          <div class="box">
            <div class="box-header">
              
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>NISN</th>
                    <th>Nama</th>
                    <th>Jurusan</th>
                    <th>Kelas</th>
                    <th>Alamat</th>
                    <th>foto</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>6256524364</td>
                    <td>Heni</td>
                    <td>TKJ</td>
                    <td>XI IPA 4</td>
                    <td>Surakarta Surakarta Surakarta Surakarta Surakarta</td>
                    <td>ipon.jpg</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>121123232</td>
                    <td>Syakur</td>
                    <td>Tataboga</td>
                    <td>XII IPA 1</td>
                    <td>Maluku Maluku Maluku Maluku Maluku</td>
                    <td>syakur.jpg</td>
                  </tr>
                </tbody>
                <tfoot>
                  <tr>
                    <th>No</th>
                    <th>NISN</th>
                    <th>Nama</th>
                    <th>Jurusan</th>
                    <th>Kelas</th>
                    <th>Alamat</th>
                    <th>foto</th>
                  </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
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