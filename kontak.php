<!doctype html>
<html lang="en">

<?php include "head.php";
$pages = "kontak"; ?>?>
<style>
    a {
        color: black;
    }

    table td {
        font-size: 15px;
    }
</style>
<?php $page = "kontak"; ?>

<body>
    <!-- NAVBAR -->
    <?php include "nav.php"; ?>

    <!-- kontak -->
    <section class="content" style="margin-top:60px">
        <div class="container">
            <div class="row">
                <div style="width: 3%"></div>
                <div id="rcorners4" class="col-md-8" style="margin-right:10px;margin-top:15px">
                    <div class="row">
                        <div class="col-md-12 center">
                            <h2 class="judulTeks" style="border-radius: 20px 20px 0px 0px;background-color: #c3c3c3;margin-right: -15px; margin-top: -15px;padding-top: 15px;padding-bottom: 15px;margin-left: -15px;">Hubungi Kami</h2>
                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="col-md-4">
                                    <h5 style="text-align: center;">Kontak Kami :</h5>
                                </div>
                                <div class="col-md-4">
                                    <h5 style="text-align: center;">Lokasi Kami :</h5>
                                </div>
                                <div class="col-md-1"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-5" id="rcorners5" style="margin-left: 25px;margin-right:10px;">
                                    <div class="container">
                                        <table style="text-align: left;">
                                            <tr>
                                                <td>Email</td>
                                                <td>:</td>
                                                <td>sakaiindo@gmail.com</td>
                                            </tr>
                                            <tr>
                                                <td>Nomor Telepon</td>
                                                <td>:</td>
                                                <td>+6281212345678</td>
                                            </tr>
                                            <tr>
                                                <td>Line</td>
                                                <td>:</td>
                                                <td>@as23a</td>
                                            </tr>
                                            <tr>
                                                <td>Instagram</td>
                                                <td>:</td>
                                                <td>@sakaiindo</td>
                                            </tr>
                                            <tr>
                                                <td>Facebook</td>
                                                <td>:</td>
                                                <td>PT. Sakai Indonesia</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-md-6" id="rcorners5" style="margin-right: -50px;background-color:#f8f9fa">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d248.88091604102618!2d98.66439641541231!3d3.5656838419155186!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30313026b394870d%3A0xe6c1abd3e74ad2b4!2sJl.%20Karya%20Sejati%20No.144%2C%20Polonia%2C%20Kec.%20Medan%20Polonia%2C%20Kota%20Medan%2C%20Sumatera%20Utara%2020157!5e0!3m2!1sid!2sid!4v1577977788579!5m2!1sid!2sid" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <p style="font-size: 0.9rem; text-align: center; margin:2rem 2rem;">
                                <b>Atau hubungi kami melalui fitur pengirim pesan berikut :</b>
                            </p>

                            <form style="font-size: 0.9rem;">
                                <div class="form-group" style="text-align:left;">
                                    <label>Nama</label>
                                    <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama">
                                </div>
                                <div class="form-group" style="text-align:left;">
                                    <label>Email</label>
                                    <input type="email" class="form-control" id="email" placeholder="email@email.com">
                                </div>
                                <div class="form-group" style="text-align:left;">
                                    <label>Nomor Telepon</label>
                                    <input type="tel" class="form-control" id="telepon" placeholder="081xxxxxxxxx">
                                </div>
                                <div class="form-group" style="text-align:left;">
                                    <label>Pesan</label>
                                    <textarea class="form-control" id="pesan" placeholder="Masukkan Pesan Anda"></textarea>
                                </div>
                                <button type="submit" class="btn" style="width: 100%; color:#FFF; background-color: #6CCD0D;">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Produk -->
                <?php include "produk.php" ?>
            </div>
        </div>
    </section>

    <?php include "footer.php" ?>

</body>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>

</html>