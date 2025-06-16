<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Purple Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="assets\Form\vendors\iconfonts\mdi\css\materialdesignicons.min.css">
  <link rel="stylesheet" href="assets\Form\vendors\css\vendor.bundle.base.css">
  <!-- endinject -->
  <!-- inject:css -->
  <link rel="stylesheet" href="assets\Form\css\style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="assets\Form\images\favicon.png" />
  <link rel="shortcut icon" href="assets\Form\images\favicon.png" />
  <style>
  .main-panel {
  display: flex;
  flex-direction: column;
  min-height: 100vh;
}

.content-wrapper {
  flex-grow: 1;
}
</style>

</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="../../index.html"><img src="assets\Form\images\logo.svg" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="../../index.html"><img src="assets\Form\images\logo-mini.svg" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-stretch">
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <div class="nav-profile-img">
                <img src="assets\Form\images\faces\face2.jpg" alt="image">
                <span class="availability-status online"></span>             
              </div>
              <div class="nav-profile-text">
                <p class="mb-1 text-black">David Greymaax</p>
              </div>
            </a>
            <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item" href="#">
                <i class="mdi mdi-cached mr-2 text-success"></i>
                Activity Log
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">
                <i class="mdi mdi-logout mr-2 text-primary"></i>
                Signout
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
              <div class="nav-profile-image">
                <img src="assets\Form\images\faces\face2.jpg" alt="profile">
                <span class="login-status online"></span> <!--change to offline or busy as needed-->              
              </div>
              <div class="nav-profile-text d-flex flex-column">
                <span class="font-weight-bold mb-2">David Grey. H</span>
                <span class="text-secondary text-small">Project Manager</span>
              </div>
              <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../pages/forms/basic_elements.html">
              <span class="menu-title">Biodata</span>
              <i class="mdi mdi-contacts menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../pages/forms/kontak.html">
              <span class="menu-title">Contact</span>
              <i class="mdi mdi-format-list-bulleted menu-icon"></i>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              Forms
            </h3>
          </div>
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Horizontal Two column</h4>
                  <form class="form-sample" action="proses.php" method="post" enctype="multipart/form-data">
                    <p class="card-description">
                      Personal info
                    </p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">First Name</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="nama_depan" id="nama_depan"/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Last Name</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="nama_belakang" id="nama_belakang"/>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">About</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="About me" name="tentang" id="tentang"/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Profession</label>
                          <div class="col-sm-9">
                            <input class="form-control" name="profesi" id="profesi"/>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Profession Description</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="deskripsi_profesi" id="deskripsi_profesi"/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Date of Birth</label>
                          <div class="col-sm-9">
                            <input type="date" class="form-control" placeholder="dd/mm/yyyy" name="tgl_lahir" id="tgl_lahir">
                        </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Website</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="website" id="website"/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Major</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="gelar" id="gelar"/>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Phone Number</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="hp" id="hp"/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Email</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="email" id="email"/>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">City</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="kota" id="kota"/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Freelance</label>
                          <div class="col-sm-9">
                            <input class="form-control" type="text" name="freelance" id="freelance">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Information About</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="keterangan_about" id="keterangan_about"/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Information Skill</label>
                          <div class="col-sm-9">
                            <input class="form-control" type="text" name="keterangan_skill" id="keterangan_skill">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Skill</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name = "skill" id="skill"/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Hero Image</label>
                          <div class="form-group">  
                            <input type="file" name="url_hero" class="file-upload-default">
                            <div class="input-group col-xs-12">
                              <input type="text" class="form-control file-upload-info" id="url_hero" readonly>
                              <span class="input-group-append">
                                <button class="file-upload-browse btn btn-gradient-primary" type="button">Upload</button>
                              </span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div> 
                    <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Photo</label>
                          <div class="form-group">  
                            <input type="file" name="url_foto" class="file-upload-default">
                            <div class="input-group col-xs-12">
                                <input type="text" class="form-control file-upload-info" id="url_foto" readonly>
                              <span class="input-group-append">
                                <button class="file-upload-browse btn btn-gradient-primary" type="button">Upload</button>
                              </span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <span class="justify-content-start">
                                <button class="btn btn-gradient-primary order-first" type="button">Cancel</button>
                                <input class="btn btn-gradient-primary justify-content-end" type="submit"></input>
                      </span>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <!-- partial -->
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>

  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="assets\Form\vendors\js\vendor.bundle.base.js"></script>
  <script src="assets\Form\vendors\js\vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="assets\Form\js\off-canvas.js"></script>
  <script src="assets\Form\js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="assets\Form\js\file-upload.js"></script>
  <!-- End custom js for this page-->
</body>

</html>

