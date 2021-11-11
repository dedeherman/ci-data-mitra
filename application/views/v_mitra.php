<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mitra</title>
</head>

<body>
    <table border="1px solid black">
        <tr>
            <th>Nama Mitra</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>Nomor HP</th>
            <th colspan="2">Action</th>
        </tr>

        <?php foreach ($mitra as $mtr) : ?>
            <tr>
                <td><?php echo $mtr['nama']; ?></td>
                <td><?php echo $mtr['jenkel']; ?></td>
                <td><?php echo $mtr['alamat']; ?></td>
                <td><?php echo $mtr['nohp']; ?></td>
                <td><a href="delete.php">Delete</a> | <a href="update.php"><a href="delete.php">Update</a></a></td>
            </tr>
        <?php endforeach ?>
    </table>
</body>

</html>