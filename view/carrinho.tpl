
<!-- botoes e opções de cima -->
<section class="row">
    
    <div class="col-md-12 " align="right">
        <a href="{$PAG_PRODUTOS}" class="btn btn-info" title="">Comprar Mais</a>
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
     
        
       {foreach from=$PRO item=P}
        
        <tr>
            
            <td> <img src="{$P.pro_img}" alt="{$P.pro_nome}"> </td>
            <td>  {$P.pro_nome} </td>
            <td>  {$P.pro_valor} </td>
            <td> {$P.pro_qtd}  </td>
            <td>  {$P.pro_subTotal} </td>
            <td> 
                <form name="carrinho_dell" method="post" action="{$PAG_CARRINHO_ALTERAR}">
                  
                    <input type="hidden" name="pro_id" value="{$P.pro_id}">    
                    <input type="hidden" name="acao" value="del">    
                    
                    <button class="btn btn-danger btn-sm"> <i class="glyphicon glyphicon-minus"></i> </button>
                </form>
            </td>
            
            
        </tr>
        
       {/foreach}
        
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
      {if $VALOR_FRETE > 0}
      <div class="text-center" style="margin-bottom: 15px;">
      <!-- Valor e prazo do frete -->
      <p>{$SERVICO} <span>{$REAL}{$VALOR_FRETE} - {$PRAZO}</p>
      {/if}
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
               Total : R$ {$TOTAL_COM_FRETE}
            </h4>
            </div>
            
            <!-- botão de limpar-->
            <div class="col-md-4 ">

                <form name="limpar" method="post" action="{$PAG_CARRINHO_ALTERAR}">
                    <input type="hidden" name="acao" value="limpar">
                    <input type="hidden" name="pro_id" value="1">

                    <button class="btn btn-danger btn-block"> <i class="glyphicon glyphicon-trash"></i> Limpar Tudo</button>
                    <br>

                </form>
                    <form name="pedido_confirmar" id="pedido_confirmar" method="post" action="{$PAG_CONFIRMAR}">

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
       <br>