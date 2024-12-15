<nav class="pc-sidebar">
  <div class="navbar-wrapper">
    <div class="m-header">
      <a href="../dashboard/index.html" class="b-brand text-primary">
        <!-- ========   Change your logo from here   ============ -->
        {{-- <img src="../assets/images/logo-dark.svg" class="img-fluid logo-lg" alt="logo" /> --}}
        <h3 class="text-success fw-bolder">Hotel Logistic</h3>
        {{-- <span class="badge bg-light-success rounded-pill ms-2 theme-version">HOTEL LOGISTIC</span> --}}
      </a>
    </div>
    <div class="navbar-content">
      <div class="card pc-user-card">
        <div class="card-body">
          <div class="d-flex align-items-center">
            <div class="flex-shrink-0">
              <img src="../assets/images/user/avatar-1.jpg" alt="user-image" class="user-avtar wid-45 rounded-circle" />
            </div>
            <div class="flex-grow-1 ms-3 me-2">
              <h6 class="mb-0">{{ Auth::user()->name }}</h6>
              <small>Administrator</small>
            </div>
            <a class="btn btn-icon btn-link-secondary avtar" data-bs-toggle="collapse" href="#pc_sidebar_userlink">
              <svg class="pc-icon text-success">
                <use xlink:href="#custom-sort-outline"></use>
              </svg>
            </a>
          </div>
          <div class="collapse pc-user-links" id="pc_sidebar_userlink">
            <div class="pt-3">
              <a href="#!">
                <i class="ti ti-user"></i>
                <span>My Account</span>
              </a>
              <a href="#!">
                <i class="ti ti-settings"></i>
                <span>Settings</span>
              </a>
              <a href="#!">
                <i class="ti ti-lock"></i>
                <span>Lock Screen</span>
              </a>
                <a href="#!" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="ti ti-power"></i>
                    <span>Logout</span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
          </div>
        </div>
      </div>

      <ul class="pc-navbar">
        <li class="pc-item pc-caption">
          <label>Logistic</label>
        </li>
        <li class="pc-item pc-hasmenu">
          <a href="#!" class="pc-link">
            <span class="pc-micon">
            <i class="fas fa-tachometer-alt text-success"></i>
            </span>
            <span class="pc-mtext">Dashboard</span>
            <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
            <span class="pc-badge">2</span>
          </a>
          <ul class="pc-submenu">
            <li class="pc-item"><a class="pc-link" href="#">Analytics</a></li>
            <li class="pc-item"><a class="pc-link" href="#">Predictive</a></li>
          </ul>
        </li>

        <li class="pc-item pc-hasmenu">
          <a href="#!" class="pc-link">
            <span class="pc-micon">
                <i class="fas fa-shopping-cart text-success"></i>
            </span>
            <span class="pc-mtext">Procurement</span>
            <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
          </a>
          <ul class="pc-submenu">
            <li class="pc-item"><a class="pc-link" href="#">Purchase Requisition</a></li>
            <li class="pc-item"><a class="pc-link" href="#">Budget Approval</a></li>
            <li class="pc-item"><a class="pc-link" href="#">Purchase Order</a></li>
            <li class="pc-item"><a class="pc-link" href="#">Request for Qoute</a></li>
            <li class="pc-item"><a class="pc-link" href="#">Contract Management</a></li>
            <li class="pc-item"><a class="pc-link" href="#">Invoice</a></li>
          </ul>
        </li>

        <li class="pc-item pc-hasmenu">
          <a href="#!" class="pc-link">
            <span class="pc-micon">
            <i class="fas fa-clipboard-list text-success"></i>
            </span>
            <span class="pc-mtext">Audit Management</span>
            <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
          </a>
          <ul class="pc-submenu">
            <li class="pc-item"><a class="pc-link" href="#">Audit Schedule</a></li>
            <li class="pc-item"><a class="pc-link" href="#">Audit Findings</a></li>
            <li class="pc-item"><a class="pc-link" href="#">Audit Logs</a></li>
            <li class="pc-item"><a class="pc-link" href="#">Audit History</a></li>
            <li class="pc-item"><a class="pc-link" href="#">Reports</a></li>
          </ul>
        </li>

        <li class="pc-item">
          <a href="#!" class="pc-link">
            <span class="pc-micon">
            <i class="fas fa-file-alt text-success"></i>
            </span>
            <span class="pc-mtext">Document Tracking</span>
          </a>
        </li>

        <li class="pc-item pc-hasmenu">
          <a href="#!" class="pc-link">
            <span class="pc-micon">
            <i class="fas fa-handshake text-success"></i>
            </span>
            <span class="pc-mtext">Vendor Portal</span>
            <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
          </a>
          <ul class="pc-submenu">
            <li class="pc-item"><a class="pc-link" href="#">Dashboard</a></li>
            <li class="pc-item"><a class="pc-link" href="#">Purchase Order</a></li>
            <li class="pc-item"><a class="pc-link" href="#">Reqeust for Qoute</a></li>
            <li class="pc-item"><a class="pc-link" href="#">Product Catalog</a></li>
            <li class="pc-item"><a class="pc-link" href="#">Invoice</a></li>
            <li class="pc-item"><a class="pc-link" href="#">Delivery & Shipment Updates</a></li>
            <li class="pc-item"><a class="pc-link" href="#">Help and Support</a></li>
          </ul>
        </li>

        <li class="pc-item pc-caption">
          <label>Setting</label>
        </li>
        <li class="pc-item">
          <a href="#!" class="pc-link">
            <span class="pc-micon">
            <i class="fas fa-user-cog text-success"></i>
            </span>
            <span class="pc-mtext">User Management</span>
          </a>
        </li>

  </div>
</nav>
