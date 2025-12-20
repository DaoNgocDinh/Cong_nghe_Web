<?php
require 'data/flowers.php';

$index = $_POST['index'];

$flowers[$index]['name'] = $_POST['name'];
$flowers[$index]['description'] = $_POST['description'];
$flowers[$index]['image'] = $_POST['image'];

// Ghi file lại
file_put_contents('data/flowers.php', "<?php\n\$flowers = " . var_export($flowers, true) . ";\n");

header('Location: show_Admin.php');
exit;
