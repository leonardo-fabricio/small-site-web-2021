

    <!-- INICO TELA CADASTRO -->
    <!-- <br> -->
    <h4>Cadastre-se para alugar, ou anunciar um Imóvel</h4>
    <div class="form-control-teste">
        <div class="wrapper fadeInDown zero-raduis">
            <div id="formContent">

                <div class="fadeIn first">
                    <!-- <img src="http://danielzawadzki.com/codepen/01/icon.svg" id="icon" alt="User Icon" /> -->
                    <!--<h2 class="my-5">LOGIN</h2>-->
                    <br>
                    <img class="img-thumbnail" src="../../../public/images/Sem título.png">
                    <br>
                    <br>
                </div>

                <form name="validar" method="POST" action="Processo_usuario" enctype="multipart/form-data" onsubmit="return validarCampos();">
                    <p class="text-one-board">Nome Completo</p>
                    <p class="obrigatorio">*</p>
                    <input type="text" id="nome" class="fadeIn second zero-raduis" name="nome" placeholder="Nome Completo" pattern="[A-Za-zÀ-ú ']{4,}" required><br><br>

                    <p class="text-one-board">Cidade</p>
                    <p class="obrigatorio">*</p>
                    <input type="text" id="endereco" class="fadeIn second zero-raduis" name="cidade" placeholder="Ex: Pau dos Ferros/RN" required><br><br>

                    <p class="text-one-board">CEP</p>
                    <p class="obrigatorio">*</p>
                    <input type="text" id="cep" class="fadeIn second zero-raduis" name="cep" placeholder="Exemplo: 59990-000" onkeypress="maskCEP(this)" maxlength="9" required><br><br>

                    <p class="text-one-board">Celular</p>
                    <p class="obrigatorio">*</p>
                    <input type="text" id="" class="fadeIn second zero-raduis" name="celular" placeholder="+99 (99) 9.9999-9999" onkeypress="maskCelular(this)" maxlength="18" required><br><br>

                    <p class="text-one-board">Email</p>
                    <p class="obrigatorio">*</p>
                    <input type="email" id="email" class="fadeIn second zero-raduis" name="email" placeholder="Email" required><br><br>

                    <p class="text-one-board">Senha</p>
                    <p class="obrigatorio">*</p>
                    <input type="password" id="senha" class="fadeIn third zero-raduis" name="senha" placeholder="Senha" minlength="6" required><br><br>

                    <p class="text-one-board">Confirmar Senha</p>
                    <p class="obrigatorio">*</p>
                    <input type="password" id="password" class="fadeIn third zero-raduis" name="csenha" placeholder="Confirmar Senha" minlength="6" required><br><br>
                    <p id="msgErro"></p>

                    <p class="text-one-board">Selecione uma imagem de Perfil</p>
                    <p class="obrigatorio">*</p>
                    <div class="mb-3">
                        <input name="arquivo" type="file" id="inputImagem" class="form-control" accept="image/png, image/jpeg, image/jpg" maxlength="2048" aria-label="file example" required multiple>
                        <div class="invalid-feedback">Example invalid form file feedback</div>
                    </div> 
                   
                    <input type="submit" class="fadeIn fourth zero-raduis" onclick="validarCampos()" value="Criar">
                </form>

                <hr>
                <h2>Já possui uma conta? Faça Login!</h2>
                <form method="POST" action="index-login">
                    <input type="submit" id="btnCadastro" class="fadeIn fourth zero-raduis pc" value="Fazer Login">
                </form>  

            </div>
        </div>
    </div>
    <!-- FIM TELA CADASTRO -->

    <!-- INICIO RODAPE -->

    