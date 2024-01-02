<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{url ('public/admin/dist/img/logo pbll4.jpg')}}" alt="Pos Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">KasirBersama</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{url ('public/admin/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ auth()->user()->nama }}</a>
        </div>
      </div> -->

      <!-- SidebarSearch Form -->
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item treeview">
            <a href="" class="nav-link  ">
              <i class="fas fa-th"></i>
              <p>
                Dashboard
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
          <li class="nav-item menu-open">
            <a href="{{url ('admin/dashboard')}}" class="nav-link active">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Master Data
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url ('admin/kategori')}}" class="nav-link ">
                  <i class="fas fa-list nav-icon"></i>
                  <p>Kategori</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url ('admin/satuan')}}" class="nav-link ">
                  <i class="fas fa-box nav-icon"></i>
                  <p>Satuan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url ('admin/barang')}}" class="nav-link">
                  <i class="far fa-bookmark nav-icon"></i>
                  <p>barang</p>
                </a>
              </li>
              <!-- <li class="nav-item">
                <a href="{{url ('admin/gudang')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Gudang</p>
                </a>
              </li> -->
              <li class="nav-item">
                <a href="{{url('admin/customer')}}" class="nav-link">
                  <i class="fa fa-users nav-icon"></i>  
                  <p>Customer</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('admin/sales')}}" class="nav-link">
                <i class="fas fa-cart-plus nav-icon"></i>
                  <p>Sales</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('admin/supplier')}}" class="nav-link ">
                  <i class="fas fa-truck nav-icon"></i>
                  <p>Supplier</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Data Stok
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link ">
                  <i class="fas fa-th nav-icon"></i>
                  <p>Semua Stok</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url ('admin/gudang')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Gudang</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Barang Masuk</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Barang Keluar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Laporan</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
                <a href="{{url ('admin/user')}}" class="nav-link">
                  <i class="far fa-user "></i>
                  <p>user</p>
                </a>
              </li>
          <!-- <x-Layout.sidebar.menu-item url="admin/user" label="User" icon="fas fa-user" /> -->
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>