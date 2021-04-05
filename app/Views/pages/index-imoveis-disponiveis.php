
    <!-- Inicio Imoveis disponiveis para compra -->
    <h4>Imóveis Disponíveis para Compra, e Aluguel.</h4>
    <p id="trecho">Pesquise pelo Imóvel que deseja, por: Cidade, Rua ou pelo tipo de Imóvel; Aluguel ou Venda.</p>
    <form class="form-search" method="POST" id="s" action="index-imoveis-disponiveis">
        <div class="input-append">
            <!-- <p>Pesquise um Imóvel</p> -->
            <input type="text" class="input-medium search-query" name="s" placeholder="Pesquisar por Rua, Cidade, Local, etc..">
            <button id="button-search" class="btn btn-outline-secondary" type="submit">Pesquisar</button>
        </div>
    </form>

    <div id="cards-compra">
        <h2 id="trecho2">Resultados da busca de (textoDigitado)</h2>
        <div class="container">
            <?php for($i = 0; $i < 8; $i++){ ?>
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
    </div>
    <!-- FIM Imoveis disponiveis para compra -->

    <!-- Inicio abrir chamado -->
    <h2 id="solicitarButton">Não encontrou nada que procura? Faça uma solicitação!</h2>
    <form action="index-solicitar.php" method="POST">
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
                    <input type="submit" onclick="location.href='https://mail.google.com/mail/u/0/?fs=1&to=redbullfc18@gmail.com&tf=cm#'" class="fadeIn fourth zero-raduis botao-footer" value="EMAIL">
                    <input type="submit" onclick="location.href='https://api.whatsapp.com/send?phone=5584996120413'" class="fadeIn fourth zero-raduis botao-footer" value="TELEFONE">
                </div>
            </div>
            </div>
        </div>
    </div>
    <!-- MODAL -->