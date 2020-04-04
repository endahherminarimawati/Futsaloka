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

    <div class="container">
        <h1 class="text-center">Ini adalah halaman jam main</h1>
        <div class="row justify-content-center">

            <table class="table col-md-8">
                <thead>
                    <tr class="text-center">
                        <th>No</th>
                        <th>Jam Main</th>
                        <th>Tarif</th>
                        <th>Pesan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($jadwal as $wm) : ?>
                        <?php if (count($jadwal_pemesanan) == 0) { ?>
                            <tr class="text-center">
                                <td scope="row"> <?= $i; ?> </td>
                                <td> <?= $wm['jam_main'];  ?> </td>
                                <td> <?= $wm['tarif'];
                                        $i++;  ?>
                                </td>
                                <td>
                                    <a class="badge badge-primary text-light" href="<?= base_url('Home/Pemesanan/') . $wm['id_waktu_main'] . '/'; ?>">Pesan!</a>
                                </td>
                            </tr>
                        <?php } else { ?>
                            <?php foreach ($jadwal_pemesanan as $jp) : ?>
                                <?php if ($wm['id_waktu_main'] == $jp['id_waktu_main']) { ?>
                                    <tr class="text-center">
                                        <td scope="row"> <?= $i; ?> </td>
                                        <td> <?= $wm['jam_main'];  ?> </td>
                                        <td> <?= $wm['tarif'];
                                                $i++;  ?>
                                        </td>
                                        <td>
                                            <a class="badge badge-danger text-light">Terpesan!</a>
                                        </td>
                                    </tr>
                                <?php } else { ?>
                                    <tr class="text-center">
                                        <td scope="row"> <?= $i; ?> </td>
                                        <td> <?= $wm['jam_main'];  ?> </td>
                                        <td> <?= $wm['tarif'];
                                                $i++;  ?>
                                        </td>
                                        <td>
                                            <a class="badge badge-primary text-light" href="<?= base_url('Home/Pemesanan/') . $wm['id_waktu_main'] . '/'; ?>">Pesan!</a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            <?php endforeach; ?>
                        <?php } ?>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>