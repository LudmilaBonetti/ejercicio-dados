<?php
$dado1a = rand(1, 6);
$dado1b = rand(1, 6);
$dado2a = rand(1, 6);
$dado2b = rand(1, 6);

print "        <td style=\"padding: 10px; background-color: red;\">\n";
print "          <img src=\"img/$dado1a.svg\" alt=\"$dado1a\" width=\"140\" height=\"140\">\n";
print "          <img src=\"img/$dado1b.svg\" alt=\"$dado1b\" width=\"140\" height=\"140\">\n";
print "        </td>\n";
print "        <td style=\"padding: 10px; background-color: blue;\">\n";
print "          <img src=\"img/$dado2a.svg\" alt=\"$dado2a\" width=\"140\" height=\"140\">\n";
print "          <img src=\"img/$dado2b.svg\" alt=\"$dado2b\" width=\"140\" height=\"140\">\n";
print "        </td>\n";

$total1 = $dado1a + $dado1b;
$total2 = $dado2a + $dado2b;

if ($dado1a == $dado1b && $dado2a == $dado2b) {
    if ($dado1a > $dado2a) {
        print "        <td>Ha ganado el jugador 1</td>\n";
    } elseif ($dado1a < $dado2a) {
        print "        <td>Ha ganado el jugador 2</td>\n";
    } else {
        print "        <td>Han empatado</td>\n";
    }
} elseif ($dado1a == $dado1b) {
    print "        <td>Ha ganado el jugador 1</td>\n";
} elseif ($dado2a == $dado2b) {
    print "        <td>Ha ganado el jugador 2</td>\n";
} elseif ($total1 > $total2) {
    print "        <td>Ha ganado el jugador 1</td>\n";
} elseif ($total1 < $total2) {
    print "        <td>Ha ganado el jugador 2</td>\n";
} else {
    print "        <td>Han empatado</td>\n";
}
?>