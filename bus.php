<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="pembayaran.php" method="post">
    <h1 align="center"><br><br>MASUKKAN DATA</h1>
    <h1 align="center">========================</h1>
	<table align="center" border="0">
            <tr>
                <td colspan="2" align="center">
                </td>
            </tr>
            <tr>
                <td>First name <span class="required">*</span></td>
                <td>last name</td>
            </tr>
                <tr>
                    <td>
                        <input type="text" name="field1" class="field-divided" placeholder="First" required="required" />
                    </td>
                    <td>
                    <input type="text" name="field2" class="field-divided" placeholder="Last" required="required" >
                    </td>
                </tr>
            <tr>
                 <td>No. KTP <span class="required">*</span></td>
                 <td><input type="text" name="field3" class="field-long" required="required"></td>
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
                            for ($t=0; $t< $jlh_tjn; $t+=1) { 
                                echo "<option value=$tujuan[$t]>$tujuan[$t]</option>";
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
                </td>
            </tr>
            <tr>
                <td>
                    Member
                </td>
                <td>
                    <input type="checkbox" name="member">
                </td>
            </tr>
            <tr>
                <td>
                    <input align="center" type="submit" name="submit" value="Submit">
                    <a href="pembayaran.php"><button>Input</button></a>
                </td>
                <td>
                    <input align="center" type="reset" name="reset">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>