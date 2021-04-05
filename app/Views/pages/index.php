
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
                    <img src="../../../public/images/carrossel.jpg" class="d-block w-100" alt="Imagem do Carrossel">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Interior Imóveis</h5>
                        <p>Pau dos Ferros/RN</p>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="../../../public/images/carrossel.jpg" class="d-block w-100" alt="Imagem do Carrossel">
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
        <!-- FIM CAROUSEL -->
        <br>
        <hr/>
        <!-- INICIO DESTAQUES DE LOCALIZAÇÃO-->
        <h4 id="location" class="form-label">IMÓVEIS PRÓXIMOS A SUA LOCALIZAÇÃO!</h4>
        <?php for($i = 0; $i < 4; $i++){ ?>
            <div class="card" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    <img src="../../../public/images/card1.jpg" class="card-img-top" alt="imagens Pŕoximos a sua Localização">
                    <div class="card-body">
                        <b><h5 class="card-title">Apartamento</h5></b>
                        <p class="card-text">Apartamento com 3 quartos, sala de estar, 2 banheiros e cozinha.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Preço: R$300,000</li>
                        <li class="list-group-item">Local: Praça da Matriz, Pau dos Ferros - RN</li>
                        <li class="list-group-item">Tipo: <b>Compra</b></li>
                    </ul>
                    <div class="card-body">
                        <input type="submit" id="botoes-cards" class="fadeIn fourth zero-raduis" value="Ver Imóvel">
                    </div>
                </div>
        <?php } ?>
    </div>
    <!--FIM DESTAQUES DE LOCALIZAÇÃO-->
    
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
                <h5 class="modal-title" id="staticBackdropLabel">Apartamento</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="imagem-modal-ap">
                    <img id="imagemModal" src="../../../public/images/card1.jpg" class="img-thumbnail" alt="Imagem do Imóvel">
                </div>
                <div class="texto-imagem-modal">
                    <p><b>Nome do Anunciante: </b>Luis Lucilandio</p>
                    <p><b>Cidade: </b>Pau dos Ferros/RN</p>
                    <p><b>Tipo de Anúncio: </b>Aluguel</p>
                    <p><b>Descrição do Imóvel: </b>Apartamentos disponíveis, próximo ao IFRN Pau dos Ferros: 1 sala, 1 quarto, 1 banheiro.</p>
                    <p><b>Preço: </b>R$300</p>
                    <p class="alert alert-success"><b>Situação: </b>Disponível</p>
                </div>
            </div>
            <div class="modal-footer">
                <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                <!-- <button type="button" class="btn btn-primary">Understood</button> -->
                <div id="botoes-footer">
                    <!-- <p id="contato">Entre em Contato com <b>Luís Lucilandio</b></p> -->
                    <input type="submit" class="fadeIn fourth zero-raduis botao-footer" value="EMAIL">
                    <input type="submit" class="fadeIn fourth zero-raduis botao-footer" value="TELEFONE">
                </div>
            </div>
            </div>
        </div>
    </div>
    <!-- MODAL -->
    

