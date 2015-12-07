<?php
// run this in a brower
// refresh the page
// you *always* get the new value
// WHY???
// each request is independent of any other!
// how to retain info:
// -- store in a database, in a file, in the session or use a cookie

if (isset($a)) {
    echo "Stored Value\n";
    echo $a . PHP_EOL;
} else {
    echo "New Value\n";
    $a = date('Y-m-d H:i:s');
    echo $a . PHP_EOL;
}
