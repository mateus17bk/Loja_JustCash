<?php
/* Smarty version 3.1.33, created on 2019-10-29 22:58:42
  from 'C:\wamp64\www\loja\view\carrinho.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5db8c4221b46c7_42719861',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ded13e2a0ceff58a56453e0caa86919e69a388e7' => 
    array (
      0 => 'C:\\wamp64\\www\\loja\\view\\carrinho.tpl',
      1 => 1572389918,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5db8c4221b46c7_42719861 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- botoes e opções de cima -->
<section class="row">
    
    <div class="col-md-12 " align="right">
        <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_PRODUTOS']->value;?>
" class="btn btn-info" title="">Comprar Mais</a>
    </div>
    <div class="col-md-4">
        
    </div>
    <div class="col-md-4 text-right">
         
    </div>
    
</section>
    <br>

<!--  table listagem de itens -->
<section class="row ">
   
    <center>
    <table class="table table-bordered" style="width: 95%">

<!--
        <tr> 
        
            
            <td colspan="6" align="right"><a href="" class="btn btn-success" title="">Comprar Mais</a></td> 
        </tr> -->
       
        <tr class="text-danger bg-danger">
            <td></td> 
            <td>Produto</td> 
            <td>Valor R$</td> 
            <td>X</td> 
            <td>Sub Total R$</td> 
            <td></td> 
            
        </tr>
     
        
       <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
?>
        
        <tr>
            
            <td> <img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
"> </td>
            <td>  <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
 </td>
            <td>  <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
 </td>
            <td> <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_qtd'];?>
  </td>
            <td>  <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_subTotal'];?>
 </td>
            <td> 
                <form name="carrinho_dell" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_CARRINHO_ALTERAR']->value;?>
">
                  
                    <input type="hidden" name="pro_id" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
">    
                    <input type="hidden" name="acao" value="del">    
                    
                    <button class="btn btn-danger btn-sm"> <i class="glyphicon glyphicon-minus"></i> </button>
                </form>
            </td>
            
            
        </tr>
        
       <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        
    </table>
  
    </center>
        
           
</section><!-- fim da listagem itens -->
        
        

        <!--  bloco frete -->
        <div class="row">
          <div class="col-md-4"></div>
          <div class="col-md-4"></div>
      <div class="col-md-4">
           <form  method="post"> 
      <div class="form-group">
        <select required class="form-control" name="servico" >
         <option value="">Selecione o tipo de envio</option>
         <option value="SEDEX">SEDEX</option>
      <option value="PAC">PAC</option>
        </select>
       </div>
        
      <!-- Input peso -->
      <input type="hidden" name="peso_frete" id="peso_frete" value="1" class="form-control " readonly>
        
      <!-- Input onde é digitado o CEP -->
      <div class="form-group">
          <input type="text" class="form-control" name="destino" id="cep_frete"  placeholder="digite seu cep" required>

      </div>
      <?php if ($_smarty_tpl->tpl_vars['VALOR_FRETE']->value > 0) {?>
      <div class="text-center" style="margin-bottom: 15px;">
      <!-- Valor e prazo do frete -->
      <p><?php echo $_smarty_tpl->tpl_vars['SERVICO']->value;?>
 <span><?php echo $_smarty_tpl->tpl_vars['REAL']->value;
echo $_smarty_tpl->tpl_vars['VALOR_FRETE']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['PRAZO']->value;?>
</p>
      <?php }?>
      <!-- Botão que envia as informações -->
      <button class="btn btn-geral btn-block" id="buscar_frete"> <i class="glyphicon glyphicon-send"></i> Calcular Frete </button>  
    
      </div>
      </form>
</div>

          <br><hr>

        <!-- botoes de baixo e valor total -->
        <section class="row" id="total">
                      
            <div class="col-md-4 text-right">
           
            </div>
            
            <div class="col-md-4 text-right text-danger bg-warning">
            <h4>
               Total : R$ <?php echo $_smarty_tpl->tpl_vars['TOTAL_COM_FRETE']->value;?>

            </h4>
            </div>
            
            <!-- botão de limpar-->
            <div class="col-md-4 ">

                <form name="limpar" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_CARRINHO_ALTERAR']->value;?>
">
                    <input type="hidden" name="acao" value="limpar">
                    <input type="hidden" name="pro_id" value="1">

                    <button class="btn btn-danger btn-block"> <i class="glyphicon glyphicon-trash"></i> Limpar Tudo</button>
                    <br>

                </form>
                    <form name="pedido_confirmar" id="pedido_confirmar" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_CONFIRMAR']->value;?>
">

                     <input type="hidden" name="frete_radio" id="frete_radio" value="2">
                     
                     <button class="btn btn-success btn-block" type="submit">  <i class="glyphicon glyphicon-ok"></i> Confirmar Pedido </button>



                 </form>

            </div>

        </section>
                <br>    
           <hr>        
       </form>  
       </div>        
  </section>
       <br>
       <br>
       <br>
       <br><?php }
}
