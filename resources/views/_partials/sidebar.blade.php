<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-text mx-3">Kasir</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item {{ active('/') }}">

    <a class="nav-link" href="{{ route('admin.home') }}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
    Tema
  </div>

  <!-- Nav Item - Dashboard -->
  <li class="nav-item {{ active('admin/navbar') }}">

    <a class="nav-link" href="{{ route('admin.navbar') }}">
      <i class="fas fa-fw fa-bars"></i>
      <span>Navbar</span></a>
  </li>

  <!-- Nav Item - Dashboard -->
  <li class="nav-item {{ active('admin/banner') }}">

    <a class="nav-link" href="{{ route('admin.banner') }}">
      <i class="fas fa-fw fa-flag"></i>
      <span>Banner</span></a>
  </li>

  <!-- Nav Item - Dashboard -->
  <li class="nav-item {{ active('admin/countdown') }}">

    <a class="nav-link" href="{{ route('admin.countdown') }}">
      <i class="fas fa-fw fa-clock"></i>
      <span>Countdown</span></a>
  </li>

  <!-- Nav Item - Dashboard -->
  <li class="nav-item {{ active('admin/quote') }}">

    <a class="nav-link" href="{{ route('admin.quote') }}">
      <i class="fas fa-fw fa-file-alt"></i>
      <span>Quotes</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
    Menu
  </div>

  <!-- Nav Item - Dashboard -->
  <li class="nav-item {{ active('admin/about') }}">

    <a class="nav-link" href="{{ route('admin.about') }}">
      <i class="fas fa-fw fa-address-book"></i>
      <span>Tentang Pasangan</span></a>
  </li>

  <!-- Nav Item - Dashboard -->
  <li class="nav-item {{ active('admin/story', 'active', 'group') }}">

    <a class="nav-link" href="{{ route('admin.story.index') }}">
      <i class="fas fa-fw fa-book"></i>
      <span>Cerita Pasangan</span></a>
  </li>

  <!-- Nav Item - Dashboard -->
  <li class="nav-item {{ active('admin/wedding') }}">

    <a class="nav-link" href="{{ route('admin.wedding') }}">
      <i class="fas fa-fw fa-folder"></i>
      <span>Data Pernikahan</span></a>
  </li>

  <!-- Nav Item - Dashboard -->
  <li class="nav-item {{ active('admin/event', 'active', 'group') }}">

    <a class="nav-link" href="{{ route('admin.event.index') }}">
      <i class="fas fa-fw fa-calendar"></i>
      <span>Acara</span></a>
  </li>

  <!-- Nav Item - Dashboard -->
  <li class="nav-item {{ active('admin/gallery', 'active', 'group') }}">

    <a class="nav-link" href="{{ route('admin.gallery.index') }}">
      <i class="fas fa-fw fa-image"></i>
      <span>Galeri</span></a>
  </li>

  <!-- Nav Item - Dashboard -->
  <li class="nav-item {{ active('admin/location') }}">

    <a class="nav-link" href="{{ route('admin.location') }}">
      <i class="fas fa-fw fa-map"></i>
      <span>Lokasi</span></a>
  </li>

  <!-- Nav Item - Dashboard -->
  <li class="nav-item {{ active('admin/rsvp') }}">

    <a class="nav-link" href="{{ route('admin.rsvp') }}">
      <i class="fas fa-fw fa-envelope"></i>
      <span>RSVP</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>