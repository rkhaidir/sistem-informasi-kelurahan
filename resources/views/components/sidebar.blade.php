<div class="main-sidebar sidebar-style-2">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="index.html">SIKEL</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="index.html">SIK</a>
    </div>
    <ul class="sidebar-menu">
      <li class="menu-header">{{ __('Beranda') }}</li>
      <li class="{{ Request::is('admin/home') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin.home') }}"><i class="fa-solid fa-fire"></i><span>{{ __('Beranda') }}</span></a></li>
      <li class="menu-header">{{ __('Kependudukan') }}</li>
      <li class="dropdown {{ Request::is('admin/wilayah*') ? 'active' : '' }}">
        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fa-solid fa-map"></i> <span>Wilayah</span></a>
        <ul class="dropdown-menu">
          <li class="{{ Request::is('admin/wilayah/rw*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin.wilayah.rw.index') }}">RW</a></li>
          <li class="{{ Request::is('admin/wilayah/rt*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin.wilayah.rt.index') }}">RT</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a href="#" class="nav-link has-dropdown"><i class="fa-solid fa-users"></i> <span>Kependudukan</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="bootstrap-alert.html">Keluarga</a></li>
          <li><a class="nav-link" href="bootstrap-badge.html">Penduduk</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a href="#" class="nav-link has-dropdown"><i class="fa-solid fa-calendar-days"></i> <span>Peristiwa</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="bootstrap-alert.html">Kelahiran</a></li>
          <li><a class="nav-link" href="bootstrap-badge.html">Kematian</a></li>
          <li><a class="nav-link" href="bootstrap-badge.html">Mutasi</a></li>
        </ul>
      </li>
      <li class="menu-header">Surat</li>
      <li class="menu-header">Kepegawaian</li>
      <li><a class="nav-link" href="blank.html"><i class="fa-solid fa-user-group"></i> <span>Pegawai</span></a></li>
      <li><a class="nav-link" href="blank.html"><i class="fa-solid fa-user-check"></i> <span>Jabatan</span></a></li>
      <li class="menu-header">Web</li>
      <li class="dropdown">
        <a href="#" class="nav-link has-dropdown"><i class="fa-solid fa-newspaper"></i> <span>Blog</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="bootstrap-alert.html">Artikel</a></li>
          <li><a class="nav-link" href="bootstrap-badge.html">Kategori</a></li>
        </ul>
      </li>
    </ul>
    </div>        
  </aside>
</div>