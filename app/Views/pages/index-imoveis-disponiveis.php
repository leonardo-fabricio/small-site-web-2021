
    <!-- Inicio Imoveis disponiveis para compra -->
    <h4>Imóveis Disponíveis para Compra, e Aluguel.</h4>
    <p id="trecho">Pesquise pelo Imóvel que deseja, por: Cidade, Rua ou pelo tipo de Imóvel; Aluguel ou Venda.</p>
    <form class="form-search" method="POST" id="s" action="index-imoveis-disponiveis">
        <div class="input-append">
            <!-- <p>Pesquise um Imóvel</p> -->
            <input type="text" class="input-medium search-query" list = "historico" name="pesquisa" placeholder="Pesquisar por Rua, Cidade, Local, etc..">
            <button id="button-search" class="btn btn-outline-secondary" type="submit">Pesquisar</button>
        </div>
    </form>

    <div id="cards-compra">
        <!-- <h2 id="trecho2">Resultados da busca de (textoDigitado)</h2> -->
        <div class="container">
        <?php
            $servidor = "localhost";
            $usuario = "root";
            $senhaserver = "";
            $dbnome = "interiorimoveis";
            $conn = mysqli_connect($servidor,$usuario,$senhaserver, $dbnome);
            $nome = "";
            $pesquisa = filter_input(INPUT_POST, 'pesquisa', FILTER_SANITIZE_STRING);
            if($pesquisa == ''){
                $query = "select * from anuncios join usuario on anuncios.idUsuario = usuario.id order by anuncios.cidade_anuncio";
                $result = mysqli_query($conn, $query);
                
            }else{
                $query = "select * from anuncios join usuario on anuncios.idUsuario = usuario.id and (anuncios.cidade_anuncio like '%$pesquisa%' or anuncios.tipoImovel like '%$pesquisa%' or anuncios.tipoAnuncio like '%$pesquisa%') ";
                $result = mysqli_query($conn, $query);
                $pesquisa="";
            }
            while ($dados_banco = mysqli_fetch_array($result)){
                $cidade = $dados_banco['cidade_anuncio'];
                $tipoImovel = $dados_banco['tipoImovel'];
                $tipoAnuncio = $dados_banco['tipoAnuncio'];
                $preco = $dados_banco['preco'];
                $descrissao = $dados_banco['descricao'];
                $caminho = $dados_banco['caminho'];
                $situacao = $dados_banco['situacao'];
                $nome = $dados_banco['nome'];
                $celular = $dados_banco['celular'];
                $email = $dados_banco['email'];
                $id = $dados_banco['idUsuario'];
        ?>
        
        <div id="card IdImovel-<?php echo $dados_banco['id'];?>" class="card" data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="card_btn_click('<?php echo $cidade; ?>','<?php echo $tipoImovel; ?>','<?php echo $tipoAnuncio; ?>','<?php echo $descrissao; ?>','<?php echo $preco; ?>', '<?php echo $situacao;?>', '<?php echo $nome;?>', '<?php echo $caminho; ?>', '<?php echo $celular;?>', '<?php echo $email; ?>')">
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
                    <input onclick="card_btn_click('<?php echo $cidade; ?>','<?php echo $tipoImovel; ?>','<?php echo $tipoAnuncio; ?>','<?php echo $descrissao; ?>','<?php echo $preco; ?>', '<?php echo $situacao;?>', '<?php echo $nome;?>', '<?php echo $caminho; ?>', '<?php echo $celular;?>', '<?php echo $email; ?>')" type="submit" class="fadeIn fourth zero-raduis view_data_modal" value="Ver Imóvel">
                </div>
        </div> 
        
        
        <?php } ?>
        </div>
    </div>
    <!-- FIM Imoveis disponiveis para compra -->

    <!-- Inicio abrir chamado -->
    <h2 id="solicitarButton">Não encontrou nada que procura? Faça uma solicitação!</h2>
    <form action="index-solicitar" method="POST">
        <input type="submit" id="solicitar-imovel" class="fadeIn fourth zero-raduis" value="Solicitar Imóvel">
    </form>
    <!-- FIM abrir chamado -->

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                
                <div class="modal-dialog modal-lg"> <!-- caso não for necessário esse tamanho, retirar modal-lg -->
                    <div class="modal-content">
                        <div class="modal-header bg-dark">
                            <h5 class="modal-title"><span id="tipoImovel_modal" style="color:white;"></span></h5>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                    <div class="modal-body">
                        <div class="imagem-modal-ap">
                            <img id="imagemModal" src="" class="img-thumbnail" alt="Imagem do Imóvel">
                        </div>
                        <div class="texto-imagem-modal">
                            <p><b>Nome do Anunciante: </b><span id="nomeAnunciante_modal"></span></p>
                            <p ><b>Cidade: </b><span id="cidade_modal"></span></p>
                            <p ><b>Tipo de Anúncio: </b><span id="tipoAnuncio_modal"></span></p>
                            <p ><b>Descrição do Imóvel: </b><span id="desc_modal"></span></p>
                            <p ><b>Preço: </b><span id="preco_modal"></span></p>
                            <p class="alert alert-success"><b>Situação: </b><span id="situacao_modal"></span></p>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <div id="botoes-footer">
                                <a href="#" id="email_modal" class="btn btn-primary btn-lg active" target="_blank" role="button">EMAIL</a>
                                <a href="#" id="celular_modal" class="btn btn-primary btn-lg active" target="_blank" role="button">WHATSAPP</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- MODAL -->
    <!-- DATALIST OU HISTORICO-->
    <datalist id = "historico"> 
            <option value="Casa"></option>
            <option value="Apartamento"></option>
            <option value="Fazenda"></option>
            <option value="Quitinete"></option>
            <option value="Aluguel"></option>
            <option value="Venda"></option>
            <option value="Alexandria"></option>
            <option value="Rafael Fernandes"></option>
            <option value="Pau dos ferros"></option>
            <option value="Marcelino vieira"></option>
    </datalist>