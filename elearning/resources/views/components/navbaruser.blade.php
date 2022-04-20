 <!-- Navbar  -->
 <nav class="navbar navbar-light bg-light fixed-top">
    <div class="container-fluid d-flex">
      <!-- button sidebar -->
      <button
        class="navbar-toggler mx-3"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#sidebar"
        aria-expanded="false"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- logo usu-->
      <a class="navbar-brand me-auto d-none d-lg-block" href="#"
        ><img
          src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/90/Logo_of_North_Sumatra_University.svg/1200px-Logo_of_North_Sumatra_University.svg.png"
          alt=""
          width="40px"
        />
        Elearning USU
      </a>

      <!-- display jam -->
      <i class="far fa-clock me-2 d-none d-sm-block"></i>
      <div class="clock me-auto d-none d-sm-block">
        <div class="display"></div>
      </div>

      <!-- notif dan message -->
      <div class="d-flex">
        <a class="nav-link link-secondary" id="notif" href="#"><i class="fa-solid fa-bell"></i></a>
        <a class="nav-link link-secondary" id="message" href="#"><i class="fa-solid fa-comment"></i></a>
      </div>

      <!-- Navbar Menu -->
      <div class="btn-group">
        <button
          type="button"
          class="btn btn-lg-md bg-secondary bg-opacity-10 rounded-pill border-light text-success d-flex pb-0"
          id="dropdownMenu"
          data-bs-toggle="dropdown"
          aria-expanded="true"
        >
          <p class="px-2 d-none d-sm-block">211402000 John Doe</p>
          <img src="https://stkipamalbakti.ac.id/assets/img/berkas_dosen/012506880.png" alt="" width="30px" />
        </button>
        <ul
          class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start border-0 shadow mt-3 px-3"
          aria-labelledby="dropdownMenu"
        >
          <li>
            <button class="dropdown-item px-5 mt-2" type="button">
              <a class="text-decoration-none link-dark" href="/user/dashboard"><i class="fas fa-tachometer-fast"></i> Dashboard</a>
            </button>
          </li>
          <hr />
          <li>
            <button class="dropdown-item px-5" type="button"><a class="text-decoration-none link-dark" href="/user/profile"><i class="fa-solid fa-user"></i> Profile</a></button>
          </li>
          <li>
            <button class="dropdown-item px-5" type="button"><i class="fa-solid fa-table"></i> Grades</button>
          </li>
          <li>
            <button class="dropdown-item px-5" type="button"><i class="fa-solid fa-comment"></i> Messages</button>
          </li>
          <li>
            <button class="dropdown-item px-5" type="button"><i class="fa-solid fa-wrench"></i> Preferences</button>
          </li>
          <hr />
          <li>
            <button class="dropdown-item px-5 mb-2" type="button">
              <i class="fa-solid fa-right-from-bracket"></i> Log Out
            </button>
          </li>
        </ul>
      </div>
      <!-- End Navbar Menu-->
    </div>
  </nav>
  <!-- End Navbar -->