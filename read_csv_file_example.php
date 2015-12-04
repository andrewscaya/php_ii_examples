<?php

$filename = __DIR__ . '/products.csv';

// open the file
$fh = fopen($filename, 'r');

// read 1 line into an array (using fgetcsv)
$output = '<table>';
while ($row = fgetcsv($fh)) {
    // write out array as HTML <tr><td>xxx</td></tr>
    list($sku, $id, $unit, $cost, $qty) = $row;
    $output .= sprintf('<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>',
                        $sku, $id, $unit, $cost, $qty);
}
$output .= '</table>';
// close the file
fclose($fh);
echo $output;
