
<?php
include "koneksi.php";
$qry = mysql_query( " select c_array_hari from table_1 ");
$data = mysql_fetch_array($qry);
$kumpulan_hari = $data['c_array_hari'];
$kumpulan_hari_explode = explode (" ", $kumpulan_hari);

$a = $kumpulan_hari_explode[0];
$b = $kumpulan_hari_explode[1];
$c = $kumpulan_hari_explode[2];
$d = $kumpulan_hari_explode[3];
$e = $kumpulan_hari_explode[4];
$f = $kumpulan_hari_explode[5];
$g = $kumpulan_hari_explode[6];
$h = $kumpulan_hari_explode[5];


?>
<!DOCTYPE html>
<!--  -->
<html>
    <head>
        <title>Belajar Web2</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>

        <!-- combobox & button ya -->
        
        <div class="content" style="margin: 5%; float:  left; ">
            <select name="" id="" style=" margin-right: 10px; border-radius: 10px; width:150px;">
                <option value = "1"><?php echo ucwords($a); ?></option>
                <option value = "2"><?php echo ucwords($b); ?></option>
                <option value = "3"><?php echo ucwords($c); ?></option>
                <option value = "4"><?php echo ucwords($d); ?></option>
                <option value = "5"><?php echo ucwords($e); ?></option>
                <option value = "6"><?php echo ucwords($f); ?></option>
                <option value = "7"><?php echo ucwords($g); ?></option>  
                				
            </select>                   
            <input type="submit" value="Ya" style=" border-radius: 10px; width: 60px;  background-color:  darkslategrey; color: white;">
        </div>
                <!-- end of combobox & button ya-->
                
                <!-- line -->
                <div style=" height: 300px; width: 1px; background-color: black; float: left; "></div>
        
        <!-- format tanggal -->
        <div style="  float: left  ; margin: 5%;">
       
		
		<?php
        
        include 'koneksi.php';
        $date_now   = date('Y-m-d');
        $date_now2 = date('y/m/d');
        
        $day = date('d');
        $mount_in_indo =(date('Y-m-d'));
        $years = date('y');
        
        echo "Format default : ".$date_now."<br>" ;        
        echo "Format 1  &emsp;&emsp;  : ".$day." ".$mount_in_indo." ".$years."<br>" ;        
        echo "Format 2  &emsp;&emsp;  : ".$date_now2."<br>" ;        
                
                ?>
        </div>
        <p style=" clear: both; margin:20%; margin-left: 10px; " >
            <em>
                 by_Hani Puti Raissa 12151879
            </em> 
        </p>
    </body>
</html>