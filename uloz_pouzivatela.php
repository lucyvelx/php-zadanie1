<?php 
$conn="";
include "conf/db_conf.php";
include "conf/head.php";


//vytvorenie zaznamu v DB

//udaje z formularu

?>

<form method="POST" class= "form-group">

<label>Meno</label>
<input type="text" name="meno" placeholder="Zadajte meno" class="form-control form-control-lg">
<label>Priezvisko</label>
<input type ="text" name="priezvisko" placeholder="Zadajte priezvisko" class="form-control form-control-lg">
<label>Emailova adresa</label>
<input type ="email" name="emailova_adresa" placeholder="Zadajte email" class="form-control form-control-lg">
<label>Telefonne cislo</label>
<input type ="tel" name="telefonne_cislo" placeholder="Zadajte telefonne cislo" class="form-control form-control-lg">
<label>Ulica</label>
<input type ="text" name="ulica" placeholder="Zadajte ulicu" class="form-control form-control-lg">
<label>Popisne cislo</label>
<input type ="text" name="popisne_cislo" placeholder="Zadajte cislo" class="form-control form-control-lg">
<label>Mesto</label>
<input type ="text" name="mesto" placeholder="Zadajte mesto" class="form-control form-control-lg">
<label>PSČ</label>
<input type ="text" name="psc" placeholder="Zadajte psc" class="form-control form-control-lg">



<input type="submit" name="potvrdenie"  class="btn btn-lg btn-block btn-primary" >
</form>

<?php

    if(isset($_POST["potvrdenie"]))
    {
        $id = 0;
        $query = "INSERT INTO lucka.tbl_pouzivatelia (id_pouzivatela,meno,priezvisko,email,telefonne_cislo,ulica,mesto,psc,popisne_cislo)
        VALUES (?,?,?,?,?,?,?,?,?)";

        $stmt = mysqli_stmt_init($conn);
        mysqli_stmt_prepare($stmt,$query);
        mysqli_stmt_bind_param($stmt, 'issssssss',$id,$_POST["meno"],$_POST["priezvisko"],$_POST["emailova_adresa"],$_POST["telefonne_cislo"],$_POST["ulica"],$_POST["popisne_cislo"],$_POST["mesto"],$_POST["psc"]);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
    }
?>