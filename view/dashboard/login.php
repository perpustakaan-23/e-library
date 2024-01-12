<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../asset/style/style login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>E - PERPUS</title>
</head>

<body>

    <div class="judul">
        <div class="container">
            <form>
                <div class="row">
                    <div class="col-2">
                        <img src="/asset/img/logo photo 1.png" img-responsive" alt="...">
                    </div>
                    <div class="col">
                        <div class="card-body">
                            <h class="card-title" style="color: #FFF;
                            text-align: center;
                            text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25), 0px 2px 4px rgba(0, 0, 0, 0.25);
                            font-family: Inknut Antiqua;
                            font-size: 40px;
                            font-style: normal;
                            font-weight: 500;
                            line-height: normal;">E - PERPUS</h><br>

                            <p class="card-text" style="color: #FFF;
                            text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25), 0px 2px 1px rgba(0, 0, 0, 0.25);
                            font-family: Inknut Antiqua;
                            font-size: 35px;
                            font-style: normal;
                            font-weight: 400;
                            line-height: normal;">NAMA SEKOLAH</p>

                            <p class="card-text" style="color: #F8F8F8;
                            font-family: Istok Web;
                            font-size: 15px;
                            font-style: normal;
                            font-weight: 400;
                            line-height: normal;"><small>Alamat Sekolah<br>Email - NPSN - No Telepon</small></p>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="loginform">
        <div class="container">
            <div class="row">
                <div class="col">

                    <form>
                        <div class="input-box" style="filter: drop-shadow(0px 6px 4px rgba(0, 0, 0, 0.25)); margin-top:12%; margin-bottom: 8%;">
                            <div class="logo-input">
                                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="38" viewBox="0 0 29 32" fill="none">
                                    <g filter="url(#filter0_d_6_28)">
                                        <path d="M14.5 2.16667C8.85311 2.16667 4.08331 7.12725 4.08331 13C4.08331 18.8727 8.85311 23.8333 14.5 23.8333C20.1469 23.8333 24.9166 18.8727 24.9166 13C24.9166 7.12725 20.1469 2.16667 14.5 2.16667ZM14.5 7.58333C16.2989 7.58333 17.625 8.96133 17.625 10.8333C17.625 12.7053 16.2989 14.0833 14.5 14.0833C12.7021 14.0833 11.375 12.7053 11.375 10.8333C11.375 8.96133 12.7021 7.58333 14.5 7.58333ZM9.18123 18.1697C10.1156 16.7397 11.6739 15.7863 13.4583 15.7863H15.5416C17.3271 15.7863 18.8844 16.7397 19.8187 18.1697C18.4875 19.6517 16.5989 20.5833 14.5 20.5833C12.401 20.5833 10.5125 19.6517 9.18123 18.1697Z" fill="black" />
                                    </g>
                                    <defs>
                                        <filter id="filter0_d_6_28" x="-2" y="0" width="36" height="38" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                            <feOffset dy="4" />
                                            <feGaussianBlur stdDeviation="2" />
                                            <feComposite in2="hardAlpha" operator="out" />
                                            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_6_28" />
                                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_6_28" result="shape" />
                                        </filter>
                                    </defs>
                                </svg>
                                <input type="text" class="form-control" placeholder="Username">
                            </div>
                        </div>

                        <div class="input-box" style="filter: drop-shadow(0px 6px 4px rgba(0, 0, 0, 0.25)); margin-top: 8%; margin-bottom: 6%;">
                            <div class="logo-input">
                                <img src="asset/kunci 1.png" alt="Lock Icon">
                                <input type="password" class="form-control" placeholder="Password">
                                <label for="show-password" class="password-toggle"></label>
                                <input type="checkbox" id="show-password">
                            </div>
                        </div>

                        <div class="form-check" style="margin-bottom: 10%;">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" style="position: fixed;">
                            <label class="form-check-label" for="exampleCheck1" style="color: #FFF;">Ingatkan Username dan Password</label><br><label style="color: #FFF;"> Lupa Password !</label>
                            <a href="#">Klik disini</a>
                        </div>

                        <a type="submit" class="btn item-center" style=" width: 150px;
                            height: 40px;
                            flex-shrink: 0; border-radius: 10px;
                            background: #FFF;
                            box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25) inset ;" id="action_button">MASUK</a>
                    </form>
                </div>

                <div class="col" style="margin-top: 15%; margin-bottom: 15%;">
                    <ul class="list-unstyled" style="color: aliceblue;">
                        <li>
                            <p class="h4">Belum Punya Akun ?</p>
                        </li>
                        <li><a href="register.html">Daftar disini</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#sample_form').on('submit', function(event) {
                event.preventDefault();

                var formData = {
                    'email': $('#email').val(),
                    'pass': $('#pass').val()
                }
                $.ajax({
                    url: "http://localhost/PERPUSTAKAAN23/api/auth/login.php",
                    method: "POST",
                    data: JSON.stringify(formData),
                    success: function(data) {
                        $('#action_button').attr('disabled', false);
                        window.location.href = 'http://localhost/PERPUSTAKAAN23/views/dashboard/';

                    },
                    error: function(err) {
                        console.log(err);
                        $('#message').html('<div class="alert alert-danger">' + err.responseJSON + '</div>');
                    }
                });
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>