

    <h4>Solicitações de Imóveis por usuários da Plataforma</h4><br>

    <?php for($i = 0; $i < 5; $i++){ ?>
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