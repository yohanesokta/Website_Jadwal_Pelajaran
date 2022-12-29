<?php 
 $db = mysqli_connect("sql213.byethost9.com","b9_32530314","yohanes72","b9_32530314_db_jadwal");
 $result = mysqli_query($db,"SELECT * FROM  t_mapel");
 $dn = date('l', time() + 43200) ;
 if($dn == "Monday"){$d = "Senin";}
 if($dn == "Thuesday"){$d = "Selasa";}
 if($dn == "Wednesday"){$d = "Rabu";}
 if($dn == "Thursday"){$d = "Kamis";}
 if($dn == "Friday"){$d = "Jumat";}

 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal | XI - MM</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Jadwal Pelajaran</h1>
    <div class="table">
        <div class="table-con">
    <table cellpadding="10px" cellspacing="10px"> 
        <tr class="day">
            <td>Hari</td>
			<td>Pertama</td>
			<td>Kedua</td>
			<td>Ketiga</td>
			<td>Keempat</td>
			<td>Edit</td>
        </tr>
        <?php while($data = mysqli_fetch_assoc($result)){?>
        <tr class="menu">
            <td class="menu-l"><?php echo $data["Day"] ?></td>
            <td class="menu-l <?php if($d == $data["Day"]){echo "menu-y";}?>"><?php echo $data["M1"]; ?></td>
            <td class="menu-l <?php if($d == $data["Day"]){echo "menu-y";}?>"><?php echo $data["M2"]; ?></td>
            <td class="menu-l <?php if($d == $data["Day"]){echo "menu-y";}?>"><?php echo $data["M3"]; ?></td>
            <td class="menu-l <?php if($d == $data["Day"]){echo "menu-y";}?>"><?php echo $data["M4"]; ?></td>
            <td class="menu-e"><a href="edit.php?id=<?php echo $data["no"]; ?>">Edit</a></td>
            </tr>
        <?php }?>
        </table>
    </div>
    </div>
    <p>Sekarang <?php echo $dn;?> </p>
    <h2>Yohanes Oktanio</h2>
</body>
</html>