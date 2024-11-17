<?php
$randomNumber = rand(100, 999);

echo "Generované náhodné číslo: $randomNumber<br>";

echo '<a href="b.php?number=' . $randomNumber . '">Poslat číslo pomocí GET (v URL)</a><br>';

echo '<form action="b.php" method="POST">';
echo '<input type="hidden" name="number" value="' . $randomNumber . '">';
echo '<button type="submit">Poslat číslo pomocí POST (v těle)</button>';
echo '</form><br>';

session_start();
$_SESSION['number'] = $randomNumber;
echo '<a href="b.php?method=session">Poslat číslo pomocí SESSION</a><br>';

setcookie('number', $randomNumber, time() + 600, "/");
echo '<a href="b.php?method=cookie">Poslat číslo pomocí COOKIE</a><br>';
?>
