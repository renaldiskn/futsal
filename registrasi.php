<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Registrasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
    <!-- <link href="css/style.css" rel="stylesheet"> -->
</head>
<body>
    <section class="vh-100 p-5">
    <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-12 col-xl-11">
            <div class="card text-black" style="border-radius: 25px;">
            <div class="card-body p-md-5">
                <div class="row justify-content-center">
                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Daftar akun tim futsal anda Disini!</p>

                    <form method="POST" action="proses_registrasi.php" enctype='multipart/form-data' class="mt-4 mx-1 mx-md-4">

                    <div class="d-flex flex-row align-items-center mb-4">
                        <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                        <div class="form-outline flex-fill mb-0">
                            <label class="form-label" for="form3Example1c">Username</label>
                        <input name="username" class="form-control" type="text" id="username" required>
                        </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                        <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                        <div class="form-outline flex-fill mb-0">
                            <label class="form-label" for="form3Example1c">Password</label>
                        <input name="password" class="form-control" type="password" id="password" maxlength="80" required>
                        </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                        <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                        <div class="form-outline flex-fill mb-0">
                            <label class="form-label" for="form3Example1c">Nama Lengkap</label>
                        <input name="nama" class="form-control" type="text" id="nama" maxlength="100" onKeyUp="return checkInput2(this);" required>
                        </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                        <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                        <div class="form-outline flex-fill mb-0">
                            <label class="form-label" for="form3Example1c">Nama Club</label>
                        <input name="nama_klub" class="form-control" type="text" id="nama_klub" maxlength="80" required>
                        </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                        <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                        <div class="form-outline flex-fill mb-0">
                            <label class="form-label" for="form3Example3c">Email</label>
                        <input name="email" class="form-control" type="email" id="email" maxlength="80" required>
                        </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                        <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                        <div class="form-outline flex-fill mb-0">
                            <label class="form-label" for="form3Example1c">Alamat</label>
                        <textarea name="alamat" class="form-control" id="alamat" required></textarea>
                        </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                        <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                        <div class="form-outline flex-fill mb-0">
                            <label class="form-label" for="form3Example1c">No. Telepon</label>
                        <input name="no_telpon" class="form-control" type="tel" id="no_telpon" maxlength="15" onKeyUp="return checkInput(this);" required>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                        <button type="reset" class="btn btn-danger btn-lg">Reset</button>
                        <button type="submit" class="btn btn-primary btn-lg mx-2">Register</button>
                    </div>

                    </form>

                </div>
                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                    <img src="Gambar/registrasi.jpg"
                    class="img-fluid" alt="Sample image">

                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </section>
</body>
</html>


