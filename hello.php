<?php 
echo "Hello Word";
echo "<br>";
$l1 = 10;
$l2 = 20;
$l3 = $l1 + $l2;
echo $l3;
echo "<br>";
$z = -1;
if ($z > 0) {
    echo "Zmienna jest większa od 0";
} else {
    echo "Zmienna jest mniejsza od 0.";
}
echo "<br>";
echo "<br>";
echo "<br>";
$liczba = 20;
if ($liczba == 10) {
    echo "Nasza zmienna jest równa 10";
} else if ($liczba == 20) {
    echo "Nasza zmienna jest równa 20";
} else if ($liczba == 30) {
    echo "Nasza zmienna jest równa 30";
}
echo "<br>";
echo "<br>";
echo "Obliczanie delty";
echo "<br>";
$A = -10;
$B = 12; 
$C = 10;
echo "Parametry równiania: <br>";
echo "A = $A, B = $B, C = $C<br>";
if ($A == 0) {
    echo "To nie jest równanie kwadratowe. A = 0!";
} else {
    $delta = $B ** 2 - 4 * $A * $C;
   if ($delta < 0) {
       echo "Delta < 0 <br>";
       echo "Brak rozwiązań!<br>";
   } else {
       if ($delta == 0) {
           $wynik = -$B / ( 2 * $A );
           echo "Rozwiązanie: x = $wynik";
       
   } else {
       $wynik = (-$B + sqrt($delta)) / (2*$A);
       echo "Rozwiązanie: x1 = $wynik";
       $wynik = (-$B - sqrt($delta)) / (2*$A);
       echo " , x2 = $wynik";
        }
    }
}


?>