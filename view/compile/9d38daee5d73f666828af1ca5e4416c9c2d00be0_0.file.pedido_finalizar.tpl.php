<?php
/* Smarty version 3.1.33, created on 2019-09-25 17:44:01
  from 'C:\wamp64\www\loja\view\pedido_finalizar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d8ba761673687_23251663',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9d38daee5d73f666828af1ca5e4416c9c2d00be0' => 
    array (
      0 => 'C:\\wamp64\\www\\loja\\view\\pedido_finalizar.tpl',
      1 => 1569433437,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d8ba761673687_23251663 (Smarty_Internal_Template $_smarty_tpl) {
?><h3>Finalizar Pedido</h3>
<hr>
<!-- botoes e opções de cima -->
<section class="row">
    
</section>
    <br>

<!--  table listagem de itens -->
<section class="row ">

    <center>
    <div class="alert alert-success">Pedido Finalizado com Sucesso
    </div>
    <table class="table table-bordered" style="width: 95%">


        <tr class="text-danger bg-danger">         
            <td>Produto</td> 
            <td>Valor R$</td> 
            <td>X</td> 
            <td>Sub Total R$</td> 
            
            
        </tr>
     
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
?>      
        
        <tr>
            <td> <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
 </td>
            <td> <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
 </td>
            <td> <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_qtd'];?>
  </td>
            <td> <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_subTotal'];?>
 </td>             
        </tr>
        
       <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        
    </table>
  
    </center>
        
           
</section><!-- fim da listagem itens -->
        
        <!-- botoes de baixo e valor total -->
        <section class="row" id="total">
                      
            <div class="col-md-4 text-right">
           
            </div>
            
            <div class="col-md-12 text-right text-danger bg-warning" aling="right">
            <h4>
               Total : R$ <?php echo $_smarty_tpl->tpl_vars['TOTAL']->value;?>

            </h4>
            </div>
            

        </section>
         
       
       </form>  
       
       </div>
       
                   
                        
  </section>

	 <section class="row">
            <h3 class="text-center"> Formas de pagamento </h3>               
            
            <div class="col-md-4">          
            </div>
            <!-- botao de pagamento  -->
            <div class="col-md-4">

            <!--FORMA DE PGTO AQUI-->

            <img src="<?php echo $_smarty_tpl->tpl_vars['TEMA']->value;?>
/images/logo-pagseguro.png"  alt=""> 
               <?php echo '<script'; ?>
 type="text/javascript" src=""><?php echo '</script'; ?>
>
                
            </div>
           		 <!--<div class="col-md-4">  
           		 <img src="<?php echo $_smarty_tpl->tpl_vars['TEMA']->value;?>
/images/logo-pag.png" alt="">  
            </div>-->
             <div class="col-md-4">          
            </div>
         
            
        </section>


       <br>
       <br>
       <br>
       <br><?php }
}
