<?php
require 'data/flowers.php';

$index = $_POST['index'];

// Xóa hoa
unset($flowers[$index]);
$flowers = array_values($flowers); // reset index

saveArrayToPhpFile("data/flowers.php", $flowers);

header("Location: show_Admin.php");
exit;

function saveArrayToPhpFile($path, $array) {
    $content = "<?php\n\$flowers = " . var_export($array, true) . ";\n";
    file_put_contents($path, $content);
}
