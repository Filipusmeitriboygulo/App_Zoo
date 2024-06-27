<?php include "partials/header.php" ?>

<body>


    <?php include "partials/navbar.php" ?>

    <!-- Header Berita -->
    <section class="container-fluid mt-4">
        <div id="berita">
            <div class="col-12 px-0">
                <div class="card">
                    <img src="assets/img/banner-berita.jpg" class="d-block w-lg-100 w-100" alt="..." height="500px">
                    <div class="container card-img-overlay d-flex align-items-center justify-content-star">
                        <h1 class="card-title text-light">PEMBELIAN TIKET</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Akhir Header Berita -->


    <!-- Menu Beli Tiket -->
    <section class="container-fluid bg-secondary p-2 text-dark bg-opacity-10  mt-5 d-flex justify-content-center position-relative">
        <div class="row row-cols-3">
            <div class="col-lg-4  d-flex flex-column align-items-center justify-content-center cursor-pointer">
                <h5 class="font-light fs-6 mb-1 uppercase text-primary-dark">Tiket</h5>
                <h6 class="font-bold fs-2 d-flex align-items-center justify-content-center text-gray-500 bg-gray-200 border border-primary rounded rounded-circle  w-75 h-75">1</h6>
            </div>
            <div class="col-lg-4  d-flex flex-column align-items-center justify-content-center cursor-pointer">
                <h5 class="font-light fs-6 mb-1 uppercase text-gray-500">Detail</h5>
                <h6 class="font-bold fs-2 d-flex align-items-center justify-content-center text-gray-500 bg-gray-200 border border-primary rounded rounded-circle  w-75 h-75">2</h6>
            </div>
            <div class=" col-lg-4 d-flex flex-column align-items-center justify-content-center cursor-pointer">
                <h5 class="font-light fs-6 mb-1 uppercase text-gray-500">Pembayaran</h5>
                <h6 class="font-bold fs-2 d-flex align-items-center justify-content-center text-gray-500 bg-gray-200 border border-primary rounded rounded-circle  w-75 h-75">3</h6>
            </div>
        </div>


    </section>

    <!-- Akhir Menu -->
    <!-- Kontak -->
    <div class=" container" style="margin-top: 100px;">
        <span class="text-center">
            <h1 class="fs-2">BERIKAN DETAIL KONTAK ANDA</h1>
        </span>
        <div class="row d-flex justify-content-center mt-5">
            <div class="w-50">
                <div class="mb-3 ">
                    <label for="username" class="form-label">Nama Anda :</label>
                    <input type="text" id="username" class="form-control " aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <div class="mb-3">
                    <label for="username" class="form-label">Pos-el/Email :</label>
                    <input type="text" id="username" class="form-control " aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <div class="mb-3">
                    <label for="username" class="form-label">No.Kontak :</label>
                    <input type="text" id="username" class="form-control " aria-label="Username" aria-describedby="basic-addon1">
                </div>
            </div>
        </div>
        <div class="submit d-flex justify-content-end" style="margin-top: 70px;">
            <button type="button" class="btn btn-outline-warning  me-5"><a href="tiket.php" class="text-decoration-none text-warning">Kembali</a></button>
            <button type="button" class="btn btn-outline-primary "><a href="pesanan.php" class="text-decoration-none text-primary">Selanjutnya</a></button>
        </div>
    </div>




    <!-- Akhir menu -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>


    <?php include "partials/footer.php"  ?>
</body>