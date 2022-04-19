<?php
$dado1 = rand(1, 6);
$dado2 = rand(1, 6);

print "        <td style=\"padding: 10px; background-color: red;\">";
print "          <img src=\"img/$dado1.svg\" alt=\"$dado1\" width=\"140\" height=\"140\">";
print "        </td>\n";
print "        <td style=\"padding: 10px; background-color: blue;\">";
print "          <img src=\"img/$dado2.svg\" alt=\"$dado2\" width=\"140\" height=\"140\">";
print "        </td>\n";

if ($dado1 > $dado2) {
    print "        <td>Ha ganado el jugador 1</td>\n";
} elseif ($dado1 < $dado2) {
    print "        <td>Ha ganado el jugador 2</td>\n";
} else {
    print "        <td>Han empatado</td>\n";}
?>