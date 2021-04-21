
<?php
            $servidor = "localhost";
            $usuario = "root";
            $senhaserver = "";
            $dbnome = "interiorimoveis";
            $conn = mysqli_connect($servidor,$usuario,$senhaserver, $dbnome);

            $query = "select * from anuncios where idUsuario = '". $_SESSION['idu']."'";
            $result = mysqli_query($conn, $query);

            function removerBanco ($id,$opcao,$conn){
                if($opcao == 1){
                    $query_delete = "delete from anuncios where id = '$id' ";
                    $resutado_delete = mysqli_query($conn,$query_delete);
                }else{
                    $query_delete = "delete from solicitacoes where id = '$id'";
                    $resutado_delete = mysqli_query($conn,$query_delete);
                }
            }
        
            while ($dados_banco = mysqli_fetch_array($result)){
                $cidade = $dados_banco['cidade'];
                $tipoImovel = $dados_banco['tipoImovel'];
                $tipoAnuncio = $dados_banco['tipoAnuncio'];
                $preco = $dados_banco['preco'];
                $descrissao = $dados_banco['descricao'];
                $caminho = $dados_banco['caminho'];
                $situacao = $dados_banco['situacao'];
                $id = $dados_banco['id'];
?>
    <section id="meus-anuncios">
        
        <div class="container">
                <div class="card" >
                    <img src="../../../public/images/img_anuncios/ <?php echo $caminho; ?>" class="card-img-top" alt="imagens Pŕoximos a sua Localização">
                    <div class="card-body">
                        <b><h5 id="tipoImovel" class="card-title"><?php echo "$tipoImovel" ?></h5></b>
                        <p id="descricao" class="card-text"><?php echo "$descrissao" ?></p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li id="preco" class="list-group-item"> <b>Preço: </b>R$ <?php echo "$preco" ?></li>
                        <li id="cidade" class="list-group-item"><b>Cidade: </b><?php echo "$cidade" ?></li>
                        <li id="tipoAnuncio" class="list-group-item"><b>Tipo: </b><?php echo "$tipoAnuncio" ?></li>
                    </ul>
                    <div class="card-body">
                        <button  type="submit" data-bs-toggle="modal" data-bs-target="#modal1" class="btn btn-outline-secondary">EDITAR</button>
                        <button  type="submit"  class="btn btn-outline-danger">REMOVER</button>
                        <button style ="margin-top:4px; margin-left:5px;" type="button" class="btn btn-outline-success">NEGOCIO FECHADO</button>
                    </div>
                </div>
            
        </div> 
        <?php }?>
    <section>
    <br>
    <br>
    <h4 id="msg-h4-dash">Veja solicitações de pessoas que buscam um imóvel</h4>
    <br>
    
    <?php 
        $query_s = "select * from solicitacoes join usuario on solicitacoes.idu = usuario.id";
        $result_qs = mysqli_query($conn, $query_s);
        
        while ($dados_banco2 = mysqli_fetch_array($result_qs)){
            $cidade_s = $dados_banco2['cidade_solicitacao'];
            $descrissao_s = $dados_banco2['descricao'];
            $nome_s = $dados_banco2['nome'];
            $caminho = $dados_banco2['caminho_foto'];
            
    ?>
        <section id="solicitacoes-Disponiveis"> 
            <!-- <h4>Veja solicitações de pessoas que buscam um imóvel</h4> -->
            
                <div id="cards-solicitacoes" class="container">
                    <div id="card-init" class="row g-0 bg-light position-relative">
                        <div class="col-md-4 mb-md-0 p-md-4">
                            <img id="imagem-cardSolicitacoes" src="../../../public/images/img_usuario/ <?php echo "$caminho";?> " class="w-50" alt="...">
                        </div>
                        <div class="col-md-8 p-4">
                            <h5 class="mt-0"><?php echo $nome_s?></h5>
                            <p style="font-size = 20px;"><?php echo $cidade_s?></p>
                            <p><?php echo $descrissao_s?></p>
                            
                            <input type="submit" onclick="location.href='https://mail.google.com/mail/u/0/?fs=1&to=redbullfc18@gmail.com&tf=cm#'" class="fadeIn fourth zero-raduis botao-footer2" value="EMAIL">
                            <input type="submit" onclick="location.href='https://api.whatsapp.com/send?phone=5584996120413'" class="fadeIn fourth zero-raduis botao-footer2" value="TELEFONE">

                        </div>
                    </div><br>
                </div>
    <?php }?>

        </section>
    <?php 
        
        $query_ms = "select * from solicitacoes where idu = '".$_SESSION['idu'] ."' ";
        $result_qms = mysqli_query($conn, $query_ms);
        while ($dados_banco3 = mysqli_fetch_array($result_qms)){
                $cidade_ms = $dados_banco3['cidade_solicitacao'];
                $descrissao_ms = $dados_banco3['descricao'];
                $id_ms = $dados_banco3['id'];
                //TESTAR PARA REMOVER DO BANCO onclick="<?php removerBanco($id_ms,2,$conn)?>
        <section id="minhas-solicitacoes" style=" ">
                <h4>Solicitações feitas por você</h4>

                    <div id="cards-solicitacoes" class="container">
                        <div id="card-init" class="row g-0 bg-light position-relative">
                            <div class="col-md-4 mb-md-0 p-md-4">
                                <img id="imagem-cardSolicitacoes" src="../../../public/images/img_usuario/ <?php echo $_SESSION['caminho'];?>" class="w-50" alt="...">
                            </div>
                            <div class="col-md-8 p-4">
                                <h5 class="mt-0"><?php echo $_SESSION['nome'] ?></h5>
                                <p><?php echo $cidade_ms ?></p>
                                <p><?php echo $descrissao_ms ?></p>
                                
                                <button type="button" class="btn btn-outline-secondary">EDITAR</button>
                                <button type="button"  class="btn btn-outline-danger">REMOVER</button>
                                <button  type="button" class="btn btn-outline-success">ENCONTREI O IMOVEL</button>
                            </div>
                        </div><br>
                    </div>
    <?php } ?>     
        </section>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg"> <!-- caso não for necessário esse tamanho, retirar modal-lg -->
           <div class="modal-content">
            <div class="modal-header bg-dark">
                <h5 class="modal-title" id="staticBackdropLabel">Apartamento</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form>
                    <p class="text-one-board">Cidade</p>
                    <p class="obrigatorio">*</p>
                    <input type="text" id="endereco" class="fadeIn second zero-raduis" name="endereco" placeholder="Ex: Pau dos Ferros/RN" required><br><br>

                    <p class="text-one-board">Tipo de Anúncio</p>
                    <p class="obrigatorio">*</p><br><br>
                    
                    <p>
                        <label>
                        <input type="radio" id="venda" name="tipo" value="venda">
                            <span>Venda de Imóvel</span>
                        </label>
                    </p>
                    <p>
                        <label>
                        <input id="aluguel" type="radio" id="aluguel" name="tipo" value="aluguel">
                            <span>Aluguel de Imóvel</span>
                        </label>
                    </p>

                    <br><p class="text-one-board">Tipo de Imóvel</p>
                    <p class="obrigatorio">*</p><br>
                    <input type="text" id="tipo-imovel" class="fadeIn second zero-raduis" name="tipo-imovel" placeholder="Casa, Apartamento, Fazenda, Hotel" required><br><br>
                    
                    <p class="text-one-board">Preço</p>
                    <p class="obrigatorio">*</p>
                    <input type="text" id="preco" class="fadeIn second zero-raduis" name="preco" placeholder="R$ 000.000" required><br><br>

                   
                    <br><p class="text-one-board">Faça uma breve descrição do Imóvel (Opcional)</p>
                    <textarea id="w3review" name="w3review" rows="4" cols="50" placeholder="Ex: Casa com 2 salas, 3 quartos climatizados, próximo ao IFRN Pau do Ferros"></textarea>
                    <p id="msgErro"></p>
            </form>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-outline-dark">SALVAR</button>
            </div>
            </div>
        </div>
    </div>
    <!-- MODAL -->