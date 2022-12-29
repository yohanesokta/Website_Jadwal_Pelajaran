<?php 
 $db = mysqli_connect("sql213.byethost9.com","b9_32530314","yohanes72","b9_32530314_db_jadwal");
 $id = $_GET["id"];
 $result = mysqli_query($db,"SELECT * FROM  t_mapel WHERE no = $id");
 $data = mysqli_fetch_assoc($result);

 $r = mysqli_query($db,"SELECT * FROM  user");
 $usr = mysqli_fetch_assoc($r);
 $pw = $usr["password"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/edit-style.css">
    <title>Edit | Jadwal</title>
</head>
<body>
    <h1><?php echo $data["Day"];?></h1>
    <form action="" method="post">
        <div class="form-input">
            <div class="d-center">
                <div class="for-c">
                    <label for="M-1">Jam Pertama</label>
                    <input type="text" name="M-1" id="M-1" value="<?php echo $data['M1']; ?>">
                </div>
            </div>

            <div class="d-center">
                <div class="for-c">
                    <label for="M-2">Jam Kedua</label>
                    <input type="text" name="M-2" id="M-2" value="<?php echo $data['M2']; ?>">
                </div>
            </div>

            <div class="d-center">
                <div class="for-c">
                    <label for="M-3">Jam Ketiga</label>
                    <input type="text" name="M-3" id="M-3" value="<?php echo $data['M3']; ?>">
                </div>
            </div>
        </div>

        <div class="d-center">
                <div class="for-c">
                    <label for="M-4">Jam Keempat</label>
                    <input type="text" name="M-4" id="M-4" value="<?php echo $data['M4']; ?>">
                </div>
            </div>
            <div class="d-center">
                <a href="/">Back</a>
                <button type="submit" name="submit"> Simpan </button>
            </div>
    </form>

    <?php
        if (isset($_POST["submit"])){
            $M1 = $_POST["M-1"];
            $M2 = $_POST["M-2"];
            $M3 = $_POST["M-3"];
            $M4 = $_POST["M-4"];
            $day = $data["Day"];
            $no = $data["no"];

            $query = "UPDATE `t_mapel` SET `M1` = '$M1 ', `M2` = '$M2', `M3` = '$M3', `M4` = '$M4' WHERE `t_mapel`.`no` = $no
			";

            mysqli_query($db,$query);
        ?>

        <script type="text/javascript">
			alert("Berhasil Diganti");
			document.location.href = "index.php";
		</script>
        <?php }else{ ?>

<script>
    let pas = prompt("Silahkan Massukan Sandi !")
    let pw = String("<?php echo $pw; ?>");
    if (pas != pw){
        alert("Password Salah");
        document.location.href = "index.php";
    }
</script>



            <?php }?>


</body>
</html>