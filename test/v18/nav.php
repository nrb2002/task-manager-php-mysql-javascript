
  <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark" aria-label="Main navigation">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Welcome back,<br><i><?php echo $active_user; ?></i> !</a>
        <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="welcome">Dashboard</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="profile">User Profile</a>
            </li>
            
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Actions</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="task-manager/members/">Members</a></li>
                <li><a class="dropdown-item" href="task-manager/assignments/">Assignments</a></li>
                <li><a class="dropdown-item" href="#">Reports</a></li>
              </ul>
            </li>
            <li class="nav-item text-nowrap">
              <a href="logout" class="nav-link px-3">Sign out</a>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav> 
  