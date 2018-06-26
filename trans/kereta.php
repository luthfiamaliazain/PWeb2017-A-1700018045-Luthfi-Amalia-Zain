<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="pembayaran.php" method="post">
	<table align="center" border="0">
            <tr>
                <td colspan="2" align="center">
                </td>
            </tr>
            <tr>
                <td>
                    Tujuan
                </td>
                <td>
                    <select name="tujuan">
                        <option selected="selected">Tujuan</option>
                        <?php
                            $tujuan = array("Yogyakarta - Jakarta","Yogyakarta - Surabaya","Yogyakarta - Bandung","Jakarta - Yogyakarta","Surabaya - Yogyakarta","Bandung - Yogyakarta");
                            $jlh_tjn=count($tujuan);
                            for ($t=0; $t< $jlh_fkls; $t+=1) { 
                                echo "<option value=$tujuan[$t]>$tujuan[$t]</option>";
                            }
                            if ($tujuan=="Yogyakarta-Jakarta") {
                                $harga = 800000;
                            }
                            elseif($tujuan=="Yogyakarta-Surabaya")
                            {
                                $harga = 400000;
                            }
                            elseif ($tujuan=="Yogyakarta - Bandung") {
                                $harga = 650000;
                            }
                            elseif ($tujuan=="Jakarta - Yogyakarta") {
                                $harga = 800000;
                            }
                            elseif ($tujuan == "Surabaya - Yogyakarta") {
                                $harga = 400000;
                            }
                            elseif ($tujuan == "Bandung - Yogyakarta") {
                                $harga = 650000;
                            }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    Jumlah tiket
                </td>
                <td>
                    <input type="number" name="jumlah">
                    <?php
                        $_POST['jumlah']=0;
                        $jml = $_POST['jumlah'];
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    Member
                </td>
                <td>
                    <input type="checkbox" name="member">
                    <?php  
                        if(isset($_POST['member'])){
                            $_POST['member']=10/100;
                            $diskon = $_POST['member'];
                            $diskon = $diskon*$jml;
                        }
                        else{
                            $_POST['member']=0;
                            $diskon=$_POST['member'];
                            $diskon=$diskon*$jml;
                        }
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    <input align="center" type="submit" name="submit" value="Submit">

                </td>
                <td>
                    <input align="center" type="reset" name="reset">
                </td>
            </tr>
        </table>
</form>
</body>
</html>