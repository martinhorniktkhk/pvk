<?php
function soodus($hind, $soodusProtsent){
    return round($hind * ((100 - $soodusProtsent) / 100), 2);
}
?>

<?php
require_once 'lib/fnk.php';
require_once 'menus/menu.php';
pais();

menu(array(
    'praed' => $praed,
    'supid' => $supid,
    'magus' => $magusad,
    'joogid' => $joogid
));

jalus();
?>