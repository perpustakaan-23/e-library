<!doctype html>
<html lang="en">

<head>
  <title>Admin</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="/asset/style/styleumum.css">
    <!-- BOX ICON -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <!--SIDE BAR NAV -->
    <nav class="sidebar close">
      <header>
          <div class="image-text">
              <span class="bx bx-star icon">
                  <!--<img src="logo.png" alt="">-->
              </span>
              <div class="text logo-text">
                  <span class="namasekolah">Nama Sekolah</span>
                  <span class="profession">Administrator</span>
              </div>
          </div>
          <i class='bx bx-chevron-right toggle'></i>
      </header>
      <div class="menu-bar">
          <div class="menu">
              <li class="search-box">
                  <i class='bx bx-search icon'></i>
                  <input type="text" placeholder="Search...">
              </li>
             
                  <li class="nav-link">
                      <a href="../../view/dashboard/index.html">
                          <i class='bx bx-home-alt icon' ></i>
                          <span class="text nav-text">Dashboard</span>
                      </a>
                  </li>
                  <li class="nav-link">
                      <a href="../katalog/siswa.html">
                          <i class='bx bx-user icon' ></i>
                          <span class="text nav-text">Data Siswa</span>
                      </a>
                  </li>

                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class='bx bx-book icon'></i>
                      <span class="text nav-text">Data Buku</span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <li><a class="dropdown-item" href="../katalog/buku.html">Buku</a></li>
                      <li><a class="dropdown-item" href="../katalog/penerbitbuku.html">Penerbit Buku</a></li>
                    </ul>
                  </li>

                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class='bx bx-pie-chart-alt icon' ></i>
                      <span class="text nav-text">Pinjam/Kembali</span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <li><a class="dropdown-item" href="../katalog/pinjam.html">Pinjam</a></li>
                      <li><a class="dropdown-item" href="../katalog/kembali.html">Kembali</a></li>
                    </ul>
                  </li>

                  <li class="nav-link">
                    <a href="../laporan.html">
                        <i class='bx bx-spreadsheet icon' ></i>
                        <span class="text nav-text">Laporan</span>
                    </a>
                </li>
              </ul>
          </div>
          <div class="bottom-content">
            <li>
                <a href="../profile.html">
                    <i class='bx bx-pen icon'></i>
                    <span class="text nav-text">Edit Profile</span>
                </a>
            </li>
            <li data-bs-toggle="modal" data-bs-target="#exampleModal">
                <a href="#">
                    <i class='bx bx-log-out icon' ></i>
                    <span class="text nav-text">Logout</span>
                </a>
            </li>
              <li class="mode">
                  <div class="sun-moon">
                      <i class='bx bx-moon icon moon'></i>
                      <i class='bx bx-sun icon sun'></i>
                  </div>
                  <span class="mode-text text">Dark mode</span>
                  <div class="toggle-switch">
                      <span class="switch"></span>
                  </div>
              </li>
              
          </div>
      </div>
  </nav>
    <section class="home">
        <div class="text" style="color: white;"><h1>E-PERPUS</h1></div>
    </section>
    <script src="../../asset/js/nav.js">
    </script>
    <!-- DATA TABEL -->
    <div class="container mt-5" style="margin-left: 100px;">
        <div class="row">
          <div class="col-md-12">
            <!-- Data Siswa -->
            <div class="dasis card shadow mb-4 mt-4">
              <div class="card-body">
                <h4 class="mb-4"><b>Data Peminjaman</b></h4>
                <form class="d-flex">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th scope="col">NAMA</th>
                      <th scope="col">NIS</th>
                      <th scope="col">TANGGAL PINJAM</th>
                      <th scope="col">NAMA BUKU</th>
                      <th scope="col">KODE SERI BUKU</th>
                      <th scope="col">Aksi</th>
                      <th scope="col">Keterangan</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($siswa as $s) : ?>
                      <tr>
                        <td><?= $s['namasiswa'] ?></td>
                        <td><?= $s['nis'] ?></td>
                        <td><?= $s['tanggal_pinjam'] ?></td>
                        <td><?= $s['namabuku'] ?></td>
                        <td><?= $s['kodeseribuku'] ?></td>
                        <td>
                            <a class="btn btn-info" href="../katalog/pinjam.html">Ajukan<br>Kembali</a>
                        </td>
                        <td>
                            <input type="radio" class="btn-check" name="options" id="option3" autocomplete="off" disabled>
                            <a class="btn btn-danger" for="option3">Ditolak</a>
                        </td>
              
                      </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- MODAL -->
      <!-- LOGOUT MODAL -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">logout</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
          Apakah anda yakin ingin keluar?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            <button type="button" class="btn btn-primary">YA</button>
          </div>
        </div>
      </div>
    </div>     
      

    <!-- FOOTER -->
  <footer>
    <!-- place footer here -->
  </footer>




  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>