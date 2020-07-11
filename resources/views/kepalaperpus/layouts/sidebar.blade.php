
<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('assets/dist/img/tutwurihandayani.png') }}" class="img-circle" alt="Logo">
        </div>
        <div class="pull-left info">
          <p>SMK Negeri 1 Sambi</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">LAPORAN</li>
        <li class="active treeview menu-open">
          <a href="/kpdashboard">
            <i class="fa fa-dashboard"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i>
            <span>Anggota</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/kpanggotasiswa"><i class="fa fa-circle-o"></i> Siswa</a></li>
            <li><a href="/kpanggotaguru"><i class="fa fa-circle-o"></i> Guru</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i> 
            <span>Buku</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/kpbuku"><i class="fa fa-circle-o"></i> Data Buku</a></li>
            <li><a href="/kpkategori"><i class="fa fa-circle-o"></i> Kategori</a></li>
          </ul>  
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-bookmark"></i>
            <span>Administrasi</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/kppeminjaman"><i class="fa fa-circle-o"></i>Peminjaman</a></li>
            <li><a href="/kppengembalian"><i class="fa fa-circle-o"></i>Pengembalian</a></li>
            <li><a href="/kpdenda"><i class="fa fa-circle-o"></i>Denda</a></li>
            </ul>
        </li>
        <li class="header">LABELS</li>
        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Pengunjung</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Laporn</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
  <!-- =============================================== -->