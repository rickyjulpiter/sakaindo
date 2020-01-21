<!doctype html>
<html lang="en">

<?php include "head.php";
$pages = "layanan";
?>
<style>
    a {
        color: black;
    }
</style>
<?php var_dump($page) ?>

<body>
    <!-- NAVBAR -->
    <?php include "nav.php" ?>

    <!-- layanan -->
    <section class="content" style="margin-top:15px">
        <div class="container">
            <div class="row">
                <div id="rcorners4" class="col-md-8" style="margin-right:15px;margin-top:15px">
                    <h2 class="judulTeks" style="border-radius: 20px 20px 0px 0px;background-color: #c3c3c3;margin-right: -15px; margin-top: -15px;padding-top: 15px;padding-bottom: 15px;margin-left: -15px;">Layanan Kami</h2>
                    <p style="text-align:center;margin-top:20px;">Bagi kami pelayanan kepada anda adalah hal utama, oleh karena
                        itu kami memiliki beberapa layanan bagi anda seperti</p>
                    <div class="row">
                        <div class="col-md-4">
                            <img src="../sakaindo/assets/SAKAI/Slideshow/2.jpg" class="d-block gambarLayanan center" alt="..." style="border-radius: 50%;width:150px;margin:auto;">
                            <h4 style="text-align: center;">Layanan 1</h4>
                            <p style="text-align: center;">deskripsi layanan</p>
                        </div>
                        <div class="col-md-4">
                            <img src="../sakaindo/assets/SAKAI/Slideshow/3.jpg" class="d-block gambarLayanan center" alt="..." style="border-radius: 50%;width:150px;margin:auto;">
                            <h4 style="text-align: center;">Layanan 2</h4>
                            <p style="text-align: center;">deskripsi layanan</p>
                        </div>
                        <div class="col-md-4">
                            <img src="../sakaindo/assets/SAKAI/Slideshow/7.jpg" class="d-block gambarLayanan center" alt="..." style="border-radius: 50%;width:150px;margin:auto;">
                            <h4 style="text-align: center;">Layanan 3</h4>
                            <p style="text-align: center;">deskripsi layanan</p>
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