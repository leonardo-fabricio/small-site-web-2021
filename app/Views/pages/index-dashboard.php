
<?php
    $servidor = "localhost";
    $usuario = "root";
    $senhaserver = "";
    $dbnome = "interiorimoveis";

    $conn = mysqli_connect($servidor,$usuario,$senhaserver, $dbnome);
    $query = "select * from anuncios where idUsuario = '". $_SESSION['idu']."'";
    $result = mysqli_query($conn, $query);
    while ($dados_banco = mysqli_fetch_array($result)){
        $cidade = $dados_banco['cidade_anuncio'];
        $tipoImovel = $dados_banco['tipoImovel'];
        $tipoAnuncio = $dados_banco['tipoAnuncio'];
        $preco = $dados_banco['preco'];
        $descrissao = $dados_banco['descricao'];
        $caminho = $dados_banco['caminho'];
        $situacao = $dados_banco['situacao'];
        $idAnuncio = $dados_banco['id'];
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
                    <div class="card-body -dash">
                        <a  type="submit" href="Editar_anuncio" onclick="<?php $_SESSION['edit-cidade'] = $cidade;$_SESSION['edit-preco'] = $preco; $_SESSION['edit-descricao'] = $descrissao; $_SESSION['edit-tipoImovel'] = $tipoImovel; $_SESSION['idanuncio'] = $idAnuncio; $_SESSION['edit-situacao'] = $situacao;?>" class="btn btn-outline-secondary">EDITAR</a>
                        <a href="../../Pages/showme/Remover_anuncio?id=<?php echo $idAnuncio;?>" type="submit"  class="btn btn-outline-danger">REMOVER</a>
                        <?php if($situacao == "Disponivel" || $situacao == "disponivel" || $situacao == "disponível" || $situacao == "Disponível"){ ?>
                            <a href="../../Pages/showme/Processo_negocio?id3=<?php echo $idAnuncio;?>" style ="margin-top:4px; margin-left:5px;" type="submit" class="btn btn-outline-success">NEGOCIO FECHADO</a>
                        <?php } ?>
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
            $email_usuario_solicitacao = $dados_banco2['email'];
            $celular_usuario_solicitacao = $dados_banco2['celular']; 
            
    ?>
        <section id="solicitacoes-Disponiveis">
                <div id="cards-solicitacoes" class="container"> 
                    <div id="card-init" class="row g-0 bg-light position-relative">
                        <div class="col-md-4 mb-md-0 p-md-4">
                            <img id="imagem-cardSolicitacoes" alt="Imagem do usuario" src="../../../public/images/img_usuario/ <?php echo "$caminho";?> " class="w-50" alt="...">
                        </div>
                        <div class="col-md-8 p-4">
                            <h5 class="mt-0"><?php echo $nome_s?></h5>
                            <p style="font-size = 20px;"><?php echo $cidade_s?></p>
                            <p><?php echo $descrissao_s?></p>
                            
                            <a href="https://mail.google.com/mail/u/0/?fs=1&to=<?php echo $email_usuario_solicitacao?>&su=Novo interesse em Imóvel na plataforma Interior Imóveis.&body=Olá, Acabei de ver sua solicitação na plataforma Interior imóveis e tenho um imóvel que é a sua cara! Poderia me retornar esse email para negociarmos?&tf=cm" id="email_solicitacao" class="btn btn-primary btn-lg active" target="_blank" role="button">EMAIL</a>
                            <a href="https://api.whatsapp.com/send?phone=<?php echo $celular_usuario_solicitacao ?>&text=Olá, Acabei de ver sua solicitação na plataforma Interior imóveis e tenho um imóvel que é a sua cara! Poderia me retornar essa mensagem para negociarmos?" id="celular_solicitacao" class="btn btn-primary btn-lg active" target="_blank" role="button">WHATSAPP</a>
                        </div>
                    </div><br>
                </div>
    <?php }?>

        </section>
        <section id="minhas-solicitacoes" style=" ">
        <h4>Solicitações feitas por você</h4>
    <?php 
        
        $query_ms = "select * from solicitacoes where idu = '".$_SESSION['idu'] ."' ";
        $result_qms = mysqli_query($conn, $query_ms);
           
        while ($dados_banco3 = mysqli_fetch_array($result_qms)){
                $cidade_ms = $dados_banco3['cidade_solicitacao'];
                $descrissao_ms = $dados_banco3['descricao'];
                $id_ms = $dados_banco3['id'];
                //TESTAR PARA REMOVER DO BANCO onclick="<?php removerBanco($id_ms,2,$conn)?>
        
                    <div id="cards-solicitacoes" class="container">
                        <div id="card-init" class="row g-0 bg-light position-relative">
                            <div class="col-md-4 mb-md-0 p-md-4">
                                <img id="imagem-cardSolicitacoes" alt="Imagem do usuario" src="../../../public/images/img_usuario/ <?php echo $_SESSION['caminho'];?>" class="w-50" alt="...">
                            </div>
                            <div class="col-md-8 p-4">
                                <h5 class="mt-0"><?php echo $_SESSION['nome'] ?></h5>
                                <p><?php echo $cidade_ms ?></p>
                                <p><?php echo $descrissao_ms ?></p>
                                
                                <a href="../../Pages/showme/Remover_solicitacao?id2=<?php echo $id_ms;?>" type="submit"  class="btn btn-outline-danger">REMOVER</a>
                                <a href="../../Pages/showme/Remover_solicitacao?id3=<?php echo $id_ms;?>" type="submit" class="btn btn-outline-success">ENCONTREI O IMOVEL</a>
                            </div>
                        </div><br>
                    </div>
    <?php } ?>     
        </section>

    <!-- Modal -->
    <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar os dados</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">SALVAR</button>
            </div>
            </div>
        </div>
        </div>
    <!-- MODAL -->