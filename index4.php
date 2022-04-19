<?php
$dado1 = rand(1, 6);
$dado2 = rand(1, 6);
$dado3 = rand(1, 6);

print "  <p>\n";
print "    <img src=\"img/$dado1.svg\" alt=\"$dado1\" width=\"140\" height=\"140\">\n";
print "    <img src=\"img/$dado2.svg\" alt=\"$dado2\" width=\"140\" height=\"140\">\n";
print "    <img src=\"img/$dado3.svg\" alt=\"$dado3\" width=\"140\" height=\"140\">\n";
print "  </p>\n";
print "\n";

if ($dado1 == $dado2 && $dado1 == $dado3) {
    print "  <p>Ha sacado un trío de $dado1.</p>\n";
} elseif ($dado1 == $dado2 || $dado1 == $dado3) {
    print "  <p>Ha sacado una pareja de $dado1.</p>\n";
} elseif ($dado2 == $dado3) {
    print "  <p>Ha sacado una pareja de $dado2.</p>\n";
} else {
    print "  <p>El valor más alto es " . max($dado1, $dado2, $dado3) . ".</p>\n";
}
?>