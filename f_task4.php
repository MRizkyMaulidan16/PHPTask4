<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        /* .table th{
            text-align: center; 
        }*/
        button{
            padding: 5px;
            background-color: blue;
            border-radius: 8px;
            color: white;
            border: none;
        }
    </style>
   
</head>
<body>
    <table class="table" >
        <thead>
            <tr>
            <th scope="col">Nama</th>
            <th scope="col">Umur</th>
            <th scope="col">Gender</th>
            <th scope="col">Pendidikan</th>
            <th scope="col">Hobi</th>
            </tr>
        </thead>
        <tbody>
            <?php  
            // echo "<pre/>"; print_r($_POST);
            // exit;
           
                $_nama = $_POST['nama_lengkap'];
                $_nim = $_POST['umur'];
                $_gender = $_POST['gender'];
                $_pendidikan = $_POST['pendidikan'];
                $_hobi1 = $_POST['hobi_1'];
                $_hobi2 = $_POST['hobi_2'];
                $_hobi3 = $_POST['hobi_3'];
                $_hobi4 = $_POST['hobi_4'];
                $_hobi5 = $_POST['hobi_5'];
                $_hobi6 = $_POST['hobi_6'];
               
                   
                 echo "<tr>
                    <th >" .$_nama."</th>
                    <td >".$_nim."</td>
                    <td>".$_gender."</td>
                    <td>$_pendidikan</td>


                 <td>".$_hobi1.$_hobi2.$_hobi3.$_hobi4.$_hobi5.$_hobi6."</td>
                    </tr>";
                
            ?>
        </tbody>
    </table> 
    
    <a href="index.php"><button>kembali</button></a>
</body>
</html>
    
