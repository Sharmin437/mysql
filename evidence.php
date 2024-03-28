<?php
$db =new mysqli('localhost','root','','company');
if(isset($_POST['btnsubmit'])){
    $mname =$_POST['mname'];
    $mcontact =$_POST['mcontact'];
    $db->query("call add_manufacture('$mname','$mcontact')");
}
if(isset($_POST['psubmit'])){
    $pname =$_POST['pname'];
    $pprice =$_POST['pprice'];
    $db->query("call add_product('$pname','$pprice')");
}
?>





<h3>Manufacture table</h3>
<form action="#" method="post">

<table>
    <tr>
        <td><label for="mname">Name</label></td>
        <td><input type="text" name=mname></label></td>
    </tr>
    <tr>
        <td><label for="mcontact">Contact</label></td>
        <td><input type="text" name=mcontact></label></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" name="btnsubmit" value="submit"></td>
    </tr>
</table>
</form>

<h3>Product table</h3>
<form action="#" method="post">

<table>
    <tr>
        <td><label for="pname">Name</label></td>
        <td><input type="text" name=pname></label></td>
    </tr>

    <tr>
        <td><label for="pprice">Price</label></td>
        <td><input type="text" name=pprice></label></td>
    </tr>
     <tr>
        <td><label for="manufac">Manufacture Name</label></td>
        <td>
            <select name="manufac" >
              <?php
                $manufac =$db->query("select * from  manufacture");
                while(list($_mid,$_mib)=$manufac->fetch_row()){
                    echo "<option value ='$_mid'>$_mib</option>";
                }
              ?>

            </select>
        </td>
     </tr>
    <tr>
        <td></td>
        <td><input type="submit" name="psubmit" value="submit"></td>
    </tr>
</table>
</form>