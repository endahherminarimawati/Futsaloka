<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <?php echo base_url(); ?>
    <form action="<?= base_url('Home/CekJadwal'); ?>" method="POST">
        <input type="date" name="date">
        <br>
        <input type="submit" value="submit">
    </form>
</body>

</html>