<?php
$dado1a = rand(1, 6);
$dado1b = rand(1, 6);
$dado1c = rand(1, 6);
$dado2a = rand(1, 6);
$dado2b = rand(1, 6);
$dado2c = rand(1, 6);

print "        <td style=\"padding: 10px; background-color: red;\">\n";
print "          <img src=\"img/$dado1a.svg\" alt=\"$dado1a\" width=\"140\" height=\"140\">\n";
print "          <img src=\"img/$dado1b.svg\" alt=\"$dado1b\" width=\"140\" height=\"140\">\n";
print "          <img src=\"img/$dado1c.svg\" alt=\"$dado1c\" width=\"140\" height=\"140\">\n";
print "        </td>\n";
print "        <td style=\"padding: 10px; background-color: blue;\">\n";
print "          <img src=\"img/$dado2a.svg\" alt=\"$dado2a\" width=\"140\" height=\"140\">\n";
print "          <img src=\"img/$dado2b.svg\" alt=\"$dado2b\" width=\"140\" height=\"140\">\n";
print "          <img src=\"img/$dado2c.svg\" alt=\"$dado2c\" width=\"140\" height=\"140\">\n";
print "        </td>\n";

if ($dado1a == $dado1b && $dado1a == $dado1c) {
    $trio1 = $dado1a;
} else {
    $trio1 = 0;
}

if ($dado2a == $dado2b && $dado2a == $dado2c) {
    $trio2 = $dado2a;
} else {
    $trio2 = 0;
}

if ($dado1a == $dado1b || $dado1a == $dado1c) {
    $pareja1 = $dado1a;
} elseif ($dado1b == $dado1c) {
    $pareja1 = $dado1b;
} else {
    $pareja1 = 0;
}

if ($dado2a == $dado2b || $dado2a == $dado2c) {
    $pareja2 = $dado2a;
} elseif ($dado2b == $dado2c) {
    $pareja2 = $dado2b;
} else {
    $pareja2 = 0;
}

$total1 = $dado1a + $dado1b + $dado1c;

$total2 = $dado2a + $dado2b + $dado2c;

// print "<p>1: Trío $trio1 - Pareja $pareja1 - Total: $total1</p>\n";
// print "<p>2: Trío $trio2 - Pareja $pareja2 - Total: $total2</p>\n";

if ($trio1 > $trio2) {
    print "        <td>Ha ganado el jugador 1</td>\n";
} elseif ($trio1 < $trio2) {
    print "        <td>Ha ganado el jugador 2</td>\n";
} else {
    if ($pareja1 > $pareja2) {
        print "        <td>Ha ganado el jugador 1</td>\n";
    } elseif ($pareja1 < $pareja2) {
        print "        <td>Ha ganado el jugador 2</td>\n";
    } else {
        if ($total1 > $total2) {
            print "        <td>Ha ganado el jugador 1</td>\n";
        } elseif ($total1 < $total2) {
            print "        <td>Ha ganado el jugador 2</td>\n";
        } else {
            print "        <td>Han empatado</td>\n";
        }
    }
}
?>