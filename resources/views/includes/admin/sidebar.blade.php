<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('dashboard')}}">
      <div class="sidebar-brand-icon rotate-n-15">
        
      </div>
      <div class="sidebar-brand-text mx-3">
          AskBuz Admin
      </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
      <a class="nav-link" href="{{route('dashboard')}}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

   

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-cog"></i>
        <span>Landing Page</span>
      </a>
      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Setting Landing Page</h6>
          <a class="collapse-item" href="{{route('home-packages.index')}}">Home</a>
          <a class="collapse-item" href="{{route('about-packages.index')}}">About</a>
          <a class="collapse-item" href="{{route('article-packages.index')}}">Article</a>
          <a class="collapse-item" href="{{route('contact-packages.index')}}">Contact BA</a>
          <a class="collapse-item" href="{{route('contactui-packages.index')}}">Contact UI/UX</a>
          <a class="collapse-item" href="{{route('contactit-packages.index')}}">Contact IT Dev</a>
        </div>
      </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-fw fa-wrench"></i>
        <span>Halaman Percontact</span>
      </a>
      <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">List Contact Team</h6>
          <a class="collapse-item" href="{{route('bussines-analysis.index')}}">Bussines Analysis</a>
          <a class="collapse-item" href="{{route('uiux-design.index')}}">Ui Ux Design</a>
          <a class="collapse-item" href="{{route('it-development.index')}}">IT Development</a>
          
        </div>
      </div>
    </li>

    <li class="nav-item ">
      <a class="nav-link" href="{{route('aboutus-packages.index')}}">
        <i class="fas fa fa-university"></i>
        <span>About AskBuz</span></a>
    </li>

    

    
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

  </ul>
  <!-- End of Sidebar -->