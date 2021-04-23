
 <h4>Alugue, Compre e Anuncie seu Imóvel aqui!!</h4><br>
    <div id="Carrossel">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
                <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
            </ol>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../../../public/images/carrossel.jpg" class="d-block w-100" alt="Imagem do Carrossel">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Interior Imóveis</h5>
                        <p>Se você busca um apartamento para alugar, é aqui que encontra-se!</p>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="../../../public/images/01-decoracao-apartamento-pequeno-quitinete-rede-balanco.jpg" class="d-block w-100" alt="Imagem do Carrossel">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Interior Imóveis</h5>
                        <p>Pau dos Ferros/RN</p>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="../../../public/images/HOME-apartamento-cobertura-com-cara-de-casa-decoracao-historias-de-casa.jpg" class="d-block w-100" alt="Imagem do Carrossel">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Interior Imóveis</h5>
                        <p>Anuncie, Alugue, ou compre. Quem decide é você!</p>
                    </div>
                </div>
            </div>

            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </a>

            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </a>
        </div>
    </div>
        <!-- FIM CAROUSEL -->
        <br>
        <hr/>

        <!-- INICIO DESTAQUES DE LOCALIZAÇÃO-->
        <div id="cards-compra">
        <!-- <h2 id="trecho2">Resultados da busca de (textoDigitado)</h2> -->
            <div class="container">
                
                <?php
                    $servidor = "localhost";
                    $usuario = "root";
                    $senhaserver = "";
                    $dbnome = "interiorimoveis";
                    $conn = mysqli_connect($servidor,$usuario,$senhaserver, $dbnome);
                    $aux ="";
                    if(isset($_SESSION['cidade'])){
                        $query = "select * from anuncios join usuario on anuncios.idUsuario = usuario.id and (anuncios.cidade_anuncio like '%".$_SESSION['cidade']."%') ";
                        $result = mysqli_query($conn, $query);
                        echo "<h4 id='location' class='form-label'>IMÓVEIS PRÓXIMOS A SUA LOCALIZAÇÃO!</h4>"; 
                    }else{
                        $query = "select * from anuncios join usuario on anuncios.idUsuario = usuario.id order by anuncios.cidade_anuncio";
                        $result = mysqli_query($conn, $query); 
                        echo "<h4 id='location' class='form-label'>IMÓVEIS DISPONÍVEIS PARA VOCÊ!</h4>";
                    }
                    while ($dados_banco = mysqli_fetch_array($result)){// oh, as v
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
                
                <div id="card IdImovel-<?php echo $dados_banco['id'];?>" class="card" data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="card_btn_click('<?php echo $cidade; ?>','<?php echo $tipoImovel; ?>','<?php echo $tipoAnuncio; ?>','<?php echo $descrissao; ?>','<?php echo $preco; ?>', '<?php echo $situacao;?>', '<?php echo $nome;?>','<?php echo $caminho; ?>','<?php echo $celular; ?>','<?php echo $email; ?>' )">
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
                            <input id="testee" onclick="card_btn_click('<?php echo $cidade; ?>','<?php echo $tipoImovel; ?>','<?php echo $tipoAnuncio; ?>','<?php echo $descrissao; ?>','<?php echo $preco; ?>', '<?php echo $situacao;?>', '<?php echo $nome;?>','<?php echo $caminho; ?>','<?php echo $celular; ?>','<?php echo $email; ?>' )" type="submit" class="fadeIn fourth zero-raduis view_data_modal" value="Ver Imóvel">
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