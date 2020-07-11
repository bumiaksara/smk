@extends('kepalaperpus.layouts.master')
@section('title','buku')

@section('content')
<!-- Isi File siswa.php-->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Buku SMK N 1 Sambi
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
                    <th>Inventaris</th>
                    <th>Tahun</th>
                    <th>Callnumber</th>
                    <th>Judul</th>
                    <th>Pengarang</th>
                    <th>Penerbit</th>
                    <th>Semester</th>
                    
                    
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>6256524364</td>
                    <td>2020</td>
                    <td>N2133</td>
                    <td>Lusi Lindri</td>
                    <td>Y.B Mangunwijaya</td>
                    <td>Bentang Pustaka</td>
                    <td>-</td>
                    
                  </tr>
                  
                </tbody>
                <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Inventaris</th>
                    <th>Tahun</th>
                    <th>Callnumber</th>
                    <th>Judul</th>
                    <th>Pengarang</th>
                    <th>Penerbit</th>
                    <th>Semester</th>
                    
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
