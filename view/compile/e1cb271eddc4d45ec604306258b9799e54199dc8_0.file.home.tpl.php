<?php
/* Smarty version 3.1.33, created on 2019-10-09 23:46:41
  from 'C:\wamp64\www\loja\view\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d9e71618cb794_62822505',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e1cb271eddc4d45ec604306258b9799e54199dc8' => 
    array (
      0 => 'C:\\wamp64\\www\\loja\\view\\home.tpl',
      1 => 1570664797,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d9e71618cb794_62822505 (Smarty_Internal_Template $_smarty_tpl) {
?><!--INÍCIO DO CAROSEL-->
<center>
	<?php echo '<script'; ?>
>
  $("#slideshow").craftyslide();
  src="js/craftyslide.js"
<?php echo '</script'; ?>
>

<div class="conteiner">
	<div id="lojaCarousel" class="carousel slid" data-ride="carousel">
	<!--INDICADORES-->
	<ol class="carousel-indicators">
		<li data-target="#lojaCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#lojaCarousel" data-slide-to="1"></li>
		<li data-target="#lojaCarousel" data-slide-to="2"></li>
	</ol>
	<!--FIM DOS INDICADORES-->
	
	<!--SLIDES-->
	<div class="carousel-inner">
		<div class="item active">	
			<a href="http://localhost/loja/produtos/1/Categoria-camisas" target="_blank">
				<img src="<?php echo $_smarty_tpl->tpl_vars['BANNER']->value;?>
" alt="" class="img img-responsive img-rounded">
			</a>
		</div>
		
		<div class="item">	
			<a href="http://localhost/loja/produtos/1/Categoria-camisas" target="_blank">
				<img src="<?php echo $_smarty_tpl->tpl_vars['BANNER01']->value;?>
" alt="" class="img img-responsive img-rounded">
			</a>
		</div>

		<div class="item">	
			<a href="http://localhost/loja/produtos/1/Categoria-camisas" target="_blank">
				<img src="<?php echo $_smarty_tpl->tpl_vars['BANNER02']->value;?>
" alt="" class="img img-responsive img-rounded">
			</a>
		</div>
	</div>
	<!--FIM DOS SLIDES-->
	
	<!--CONTROLADORES-->
	<a href="#lojaCarousel" class="left carousel-control" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left"></span>
		<span class="sr-only">Anterior</span>
	</a>

	<a href="#lojaCarousel" class="right carousel-control" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right"></span>
		<span class="sr-only">Próximo</span>
	</a>
	<!--FIM CONTROLADORES-->



	</div>
</div>
<!--FIM DO CAROSEL-->
</center><?php }
}
