<h3>Finalizar Pedido</h3>
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
     
        {foreach from=$PRO item=P}      
        
        <tr>
            <td> {$P.pro_nome} </td>
            <td> {$P.pro_valor} </td>
            <td> {$P.pro_qtd}  </td>
            <td> {$P.pro_subTotal} </td>             
        </tr>
        
       {/foreach}
        
    </table>
  
    </center>
        
           
</section><!-- fim da listagem itens -->
        
        <!-- botoes de baixo e valor total -->
        <section class="row" id="total">
                      
            <div class="col-md-4 text-right">
           
            </div>
            
            <div class="col-md-12 text-right text-danger bg-warning" aling="right">
            <h4>
               Total : R$ {$TOTAL}
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

            <img src="{$TEMA}/images/logo-pagseguro.png"  alt=""> 
               <script type="text/javascript" src=""></script>
                
            </div>
           		 <!--<div class="col-md-4">  
           		 <img src="{$TEMA}/images/logo-pag.png" alt="">  
            </div>-->
             <div class="col-md-4">          
            </div>
         
            
        </section>


       <br>
       <br>
       <br>
       <br>