<!doctype html>
<html lang="en">

<?php include "head.php";
$pages = "tentang" ?>
<style>
    a {
        color: black;
    }
</style>

<body>
    <!-- NAVBAR -->
    <?php include "nav.php";
    $pages = "tentang" ?>

    <!-- tentang -->
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-9" style="margin-top: 15px;">
                    <div class="bd-example">
                        <img src="../sakaindo/assets/SAKAI/bgBox.jpg" class="d-block w-100" alt="..." style="border-radius: 5%;" />
                        <h5 class="capGambar">Tentang Kami</h5>
                        <p class="desGambar">
                            Kami adalah yang terdepan dalam pengolahan besi, tembaga dan logam lainnya.
                            Berpengalaman selama 30 tahun dalam mengolah logam menjadikan kami yang terdepan
                            juga dalam mengolah sawit karena titik leleh sawit lebih rendah dibandingkan logam.
                        </p>
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