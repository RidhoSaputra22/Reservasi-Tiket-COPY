<?php
$idUser = $_SESSION['id'];

?>

<p style="font-size: 43px">Setting</p>

<div class="row pt-3">
    <p style="font-size: 27px">Web Theme</p>
    <div class="" style="">
        <p>Pilih Tema Berikut</p>
        <hr>

        <form method="POST" action="fungsi/editData.php" class="row px-3 my-3 p-3 mx-1"
            style="background-color: var(--secondary-color); border-radius: 5px;">

            <?php
                $colors = array(
                    array('#Light', '#FAF1E6', '#064420'),
                    array('#Dracula', '#041C32', '#ECB365'),
                    array('#Retro', '#711DB0', '#ffca85'),
                    array('#Cold', '#161A30', '#F0ECE5'),
                    array('#Cold-Coffe', '#000000', '#E3CCAE'),
                    array('#Warm-Coffe', '#FDF7E4', '#494336'),
                    
                );
                for ($i=0; $i <count($colors) ; $i++) { 
                                ?>
                    <input type="submit" class="mx-2 d-flex justify-content-center align-items-center"
                        style="background-color: <?= $colors[$i][1]?>; width:fit-content; height: 50px; border-radius: 5px; color: <?= $colors[$i][2]?>;"
                        value="<?= $colors[$i][0]?>" name="themes"></input>


                    <?php
                        
                        # code...
                    }
                    # code...
                // print_r($colors);
            ?>

            <input type="text" name="idUser" value="<?=$idUser?>" style="display: none">
           
        </form>
    </div>
</div>

<?php

// print_r($_POST)
if(isset($_POST['themes'])){
    $theme = $_POST['themes'];
    print_r($theme);
}


?>