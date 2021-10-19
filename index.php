<?php include './conn.php' ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <center><h1>SISWA</h1>
    <p>AHAHAHAHAHA</p>
    <a href="./create-siswa.php" class="btn btn-primary">Tambah Siswa</a></center>

    <hr>

    <?php $sql ='select * from siswa';
        $result = mysqli_query($conn, $sql);

    ?>

    <table border ="1" class="table table-hover table-bordered">
        <thead>
            <tr><th>nama</th>
                <th>alamat</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            while($data = mysqli_fetch_assoc($result)){?>
            <tr>
                <td><?php echo $data['nama']; ?></td>
                <td><?php echo $data['alamat']; ?></td>
                <td><?php echo $data['kehadiran'] === date('Y-m-d')? '✅':'❎' ?></td>
                <td>
                
                <a href="check-in.php?id=<?php echo $data['id'] ?>" class="btn btn-primary">Check In</a>
                <a href="check-out.php?id=<?php echo $data['id'] ?>" class="btn btn-primary">Check Out</a>
                <a href="edit-siswa.php?id= <?php echo $data ['id'] ?>" class="btn btn-primary">Edit</a>
                <a href="delete-siswa.post.php?id= <?php echo $data ['id'] ?>" class="btn btn-primary">delete</a>    
            </td>
            
            </tr>
              
            
            <?php } ?>
            
        </tbody>
    </table>
</body>
</html>