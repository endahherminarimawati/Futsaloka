<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <h1 class="text-center">Ini Adalah Halaman Pemesanan</h1>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form action="<?= base_url('Home/booking') ?>" method="POST">
                    <div class="form-group">
                        <label for=""></label>
                        <input type="hidden" class="form-control" name="id_waktu_main" id="id_waktu_main" value="<?= $jam_detil['id_waktu_main'] ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Nama Anda</label>
                        <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Anda...">
                    </div>
                    <div class="form-group">
                        <label for="">No. HP/WA</label>
                        <input type="text" class="form-control" name="hp" id="hp" placeholder="No. HP/WA Anda...">
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal</label>
                        <input type="text" class="form-control" name="tanggal" id="tanggal" value="<?= $date ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Waktu</label>
                        <input type="text" class="form-control" name="waktu" id="waktu" value="<?= $jam_detil['jam_main']; ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Tarif</label>
                        <input type="text" class="form-control" name="tarif" id="tarif" value="<?= $jam_detil['tarif'] ?>" readonly>
                    </div>

                    <button type="submit" class="btn btn-primary">Pesan</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>