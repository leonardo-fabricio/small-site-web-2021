
    <section id="meus-anuncios">
        <h4>Imóveis anunciados por você</h4>
        <div class="container">
            <?php for($i = 0; $i < 4; $i++){ ?>
                <div class="card" >
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
                        <button type="submit" data-bs-toggle="modal" data-bs-target="#modal1" class="btn btn-outline-secondary">EDITAR</button>
                        <button type="submit" class="btn btn-outline-danger">REMOVER</button>
                    </div>
                </div>
            <?php } ?>
        </div> 
    <section>
    <h4 id="msg-h4-dash">Veja solicitações de pessoas que buscam um imóvel</h4>
    <br>
    <?php 
        $servidor = "localhost";
        $usuario = "root";
        $senhaserver = "";
        $dbnome = "interiorimoveis";
        
        $conn = mysqli_connect($servidor,$usuario,$senhaserver, $dbnome);

        $query= "select * from solicitacoes";
        $result_q = mysqli_query($conn,$query);

        while ($dados_banco = mysqli_fetch_array($result_q)){
            $id = $dados_banco['id'];
            $cidade = $dados_banco['cidade'];
            $descrissao = $dados_banco['descricao'];
    ?>
    <div id="solicitacoes"> 
        <section id="solicitacoes-Disponiveis"> 
            <!-- <h4>Veja solicitações de pessoas que buscam um imóvel</h4> -->
            
                <div id="cards-solicitacoes" class="container">
                    <div id="card-init" class="row g-0 bg-light position-relative">
                        <div class="col-md-4 mb-md-0 p-md-4">
                            <img id="imagem-cardSolicitacoes" src="https://avatars.githubusercontent.com/u/48826657?s=460&u=6aeaa5a0aac3e676da1be29492e757abc0369099&v=4" class="w-50" alt="...">
                        </div>
                        <div class="col-md-8 p-4">
                            <h5 class="mt-0"><?php  ?></h5>
                            <p style="font-size = 20px;"><?php echo $cidade?></p>
                            <p><?php echo $descrissao?></p>
                            
                            <input type="submit" onclick="location.href='https://mail.google.com/mail/u/0/?fs=1&to=redbullfc18@gmail.com&tf=cm#'" class="fadeIn fourth zero-raduis botao-footer2" value="EMAIL">
                            <input type="submit" onclick="location.href='https://api.whatsapp.com/send?phone=5584996120413'" class="fadeIn fourth zero-raduis botao-footer2" value="TELEFONE">

                        </div>
                    </div><br>
                </div>
        <?php } ?>

        </section>

        <section id="minhas-solicitacoes" style=" ">
                <h4>Solicitações feitas por você</h4>

                <?php for($i = 0; $i < 3; $i++){ ?>
                    <div id="cards-solicitacoes" class="container">
                        <div id="card-init" class="row g-0 bg-light position-relative">
                            <div class="col-md-4 mb-md-0 p-md-4">
                                <img id="imagem-cardSolicitacoes" src="https://avatars.githubusercontent.com/u/48826657?s=460&u=6aeaa5a0aac3e676da1be29492e757abc0369099&v=4" class="w-50" alt="...">
                            </div>
                            <div class="col-md-8 p-4">
                                <h5 class="mt-0">Luis Lucilandio de Queiroz Mesquita</h5>
                                <p>Olá, Meu nome é Luis, sou de Rafael Fernandes e Procuro uma casa ou apartamento em Pau dos Ferros, Próximo ao IFRN Pau dos Ferros.</p>
                                
                                <button type="button" class="btn btn-outline-secondary">EDITAR</button>
                                <button type="button" class="btn btn-outline-danger">REMOVER</button>
                            </div>
                        </div><br>
                    </div>
                <?php } ?>
        </section>
    </div>

    <!-- Modal -->
<div class="modal" id="modal1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog"> <!-- caso não for necessário esse tamanho, retirar modal-lg -->
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