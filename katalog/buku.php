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
    <link rel="stylesheet" href="../../asset/style/styleumum.css">
    <!-- BOX ICON -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
      <!-- Tambahkan instascan.js melalui CDN -->
      <script src="https://cdn.rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
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
    <section class="home mb-4">
        <div class="text" style="color: white;"><h1>E-PERPUS</h1></div>
    </section>
    <script src="../../asset/js/nav.js">
    </script>
    <!-- DATA TABEL -->
    <div class="container mt-5" style="margin-left: 100px;">
    <div class="row">
        <div class="col-md-12">
          <!-- Data Buku -->
          <div class="daku card shadow mb-4 mt-4">
            <div class="card-body">
              <h4 class="mb-4"><b>Data Buku</b></h4>
              <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
                <button class="btn btn-success" id="openPopup">Tambah</button>

                <!-- The overlay and popup form -->
                  <div class="overlay" id="overlay"></div>
                  <div class="popup" id="popup">
                      <h2>Input Buku</h2>
                      <form>
                          <label for="namabuku">Nama Buku</label>
                          <input type="text" id="namabuku" name="namabuku" required>
                          <br><br>
                          <label for="kurikulum">Kurikulum</label>
                          <input type="text" id="kurikulum" name="kurikulum" required>
                          <br><br>
                          <label for="kompetensi">Kompetensi</label>
                          <input type="text" id="kompetensi" name="kompetensi" required>
                          <br><br>
                          <label for="kelas">Kelas</label>
                          <input type="text" id="kelas" name="kelas" required>
                          <br><br>
                          <label for="gambar">Gambar</label>
                          <input type="file" id="inputGroupFile02">
                          <br><br>
                          <input type="submit" value="Simpan">
                      </form>
                      <button id="closePopup">Keluar</button>
                  </div>

                  <script>
                      // JavaScript to control the popup
                      const openPopupButton = document.getElementById("openPopup");
                      const closePopupButton = document.getElementById("closePopup");
                      const overlay = document.getElementById("overlay");
                      const popup = document.getElementById("popup");

                      openPopupButton.addEventListener("click", () => {
                          overlay.style.display = "block";
                          popup.style.display = "block";
                      });

                      closePopupButton.addEventListener("click", () => {
                          overlay.style.display = "none";
                          popup.style.display = "none";
                      });
                  </script>

              </form>
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">NAMA BUKU</th>
                    <th scope="col">KURIKULUM</th>
                    <th scope="col">KOMPETENSI</th>
                    <th scope="col">KELAS</th>
                    <th scope="col">GAMBAR</th>
                    <th scope="col">SCAN QR</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 1; ?>
                  <?php foreach ($buku as $b) : ?>
                    <tr>
                      <th scope="row"><?= $no++; ?></th>
                      <td><?= $b['namabuku'] ?></td>
                      <td><?= $b['kurikulum'] ?></td>
                      <td><?= $b['kompetensi'] ?></td>
                      <td><?= $b['kelas'] ?></td>
                      <td>
                        <img src="<?= $b['gambar'] ?>" alt="Gambar Buku" width="100">
                      </td>
                      <td>
                        <button id="scanBtn d-flex" 
                        style="width: 57px;
                        align-items: center;
                        justify-content: center;
                        height: 53px;
                        flex-shrink: 0; 
                        background: #FFF;
                        box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);">Scan QR</button>
                        <div id="scanResult"></div>
                      
                        <script>
                          // Logika pemindaian QR code
                          const scanBtn = document.getElementById('scanBtn');
                          const scanResult = document.getElementById('scanResult');
                      
                          scanBtn.addEventListener('click', function () {
                            // Buat objek Instascan
                            const scanner = new Instascan.Scanner({ video: document.getElementById('scanResult') });
                      
                            // Tangkap hasil pemindaian
                            scanner.addListener('scan', function (content) {
                              alert('QR Code terdeteksi! Isi: ' + content);
                            });
                      
                            // Mulai pemindaian
                            Instascan.Camera.getCameras().then(function (cameras) {
                              if (cameras.length > 0) {
                                scanner.start(cameras[0]);
                              } else {
                                alert('Tidak ada kamera yang ditemukan pada perangkat ini!');
                              }
                            }).catch(function (e) {
                              console.error(e);
                              alert('Terjadi kesalahan saat mengakses kamera.');
                            });
                          });
                        </script>
                      </td>
                      <td>
                        <a class="btn btn-danger" href="<?= BASE_URL . 'process/process_delete.php?id=' . $b['id'] ?>">Delete</a>
                        <a class="btn btn-info" href="<?= BASE_URL . 'dashboard.php?page=edit&id=' . $b['id'] ?>">Edit</a>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>              
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