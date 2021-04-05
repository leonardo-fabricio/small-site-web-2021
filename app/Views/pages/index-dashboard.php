    <section id="meus-anuncios">
        <h4>Imóveis anunciados por você</h4>
        <div class="container">
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
                    <button type="button" class="btn btn-outline-secondary">EDITAR</button>
                    <button type="button" class="btn btn-outline-danger">REMOVER</button>
                        
                    </div>
                </div>
            <?php } ?>
        </div> 
    <section>

    
    <section id="solicitacoes-Disponiveis"> 
        <h4 id="msg-h4-dash">Veja solicitações de pessoas que buscam um imóvel</h4>
        <br>
        <!-- <h4>Veja solicitações de pessoas que buscam um imóvel</h4> -->
        <?php for($i = 0; $i < 3; $i++){ ?>
            <div id="cards-solicitacoes" class="container">
                <div id="card-init" class="row g-0 bg-light position-relative">
                    <div class="col-md-4 mb-md-0 p-md-4">
                        <img id="imagem-cardSolicitacoes" src="https://avatars.githubusercontent.com/u/48826657?s=460&u=6aeaa5a0aac3e676da1be29492e757abc0369099&v=4" class="w-50" alt="...">
                    </div>
                    <div class="col-md-8 p-4">
                        <h5 class="mt-0">Luis Lucilandio de Queiroz Mesquita</h5>
                        <p>Olá, Meu nome é Luis, sou de Rafael Fernandes e Procuro uma casa ou apartamento em Pau dos Ferros, Próximo ao IFRN Pau dos Ferros.</p>
                        
                        <input type="submit" onclick="location.href='https://mail.google.com/mail/u/0/?fs=1&to=redbullfc18@gmail.com&tf=cm#'" class="fadeIn fourth zero-raduis botao-footer2" value="EMAIL">
                        <input type="submit" onclick="location.href='https://api.whatsapp.com/send?phone=5584996120413'" class="fadeIn fourth zero-raduis botao-footer2" value="TELEFONE">

                    </div>
                </div><br>
            </div>
        <?php } ?>
    <section>

    <section id="minhas-solicitacoes">
            <h4>Solicitações feitas por você</h4>
    </section>