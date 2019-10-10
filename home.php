<?php 

$smarty = new Template();

$smarty->assign('BANNER', Rotas::ImageLink('banner03.jpg', 900,200));
$smarty->assign('BANNER01', Rotas::ImageLink('banner0-01.jpg', 900,200));
$smarty->assign('BANNER02', Rotas::ImageLink('banner0-02.jpg', 900,200));


$smarty->display('home.tpl');

include_once Rotas::get_Pasta_Controller() . '/produtos.php';


 ?>