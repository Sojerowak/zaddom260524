<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Energia - Obliczenia</title>
</head>
<body>
<script src="js.js"></script>
<?php 
    
    include_once "polaczenie.php";

?>

<form>
                <select id="energia" name="energia">
                    <option value="0">Wybierz</option>
                    <?php
                    $zapytanie = "SELECT id, m, g, h, v FROM energia";
                    $wynik = mysqli_query($polaczenie, $zapytanie);
                    while ($wiersz = mysqli_fetch_array($wynik)) {
                        $id = $wiersz['id'];
                        $m = $wiersz['m'];
                        $g = $wiersz['g'];
                        $h = $wiersz['h'];
                        $v = $wiersz['v'];
                        echo <<< TX
                         <option value="$id">$id</option>;
                        TX;
                    }
                    ?>
</form>

<?php $polaczenie->close(); ?>



<div id="wynik" ></div>


</body>
</html>
