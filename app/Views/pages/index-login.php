
    <!-- INICO TELA LOGIN -->
    <!-- <br> -->
    <h4>Use uma conta e Faça Login</h4>

    <div class="form-control-teste">
        <div class="wrapper fadeInDown zero-raduis">
            <div id="formContent">

                <div class="fadeIn first">
                    <br>
                    <img class="img-thumbnail" src="../../../public/images/Sem título.png" alt="Imagem de Logo">
                    <br>
                    <br>
                </div>

                <form name="validarLogin" action="index-dashboard" method="POST" onsubmit="return senhaLoginInvalida();"> <!--action="dashboard.php"-->
                    <input type="email" id="email" class="fadeIn second zero-raduis" name="emailLogin" placeholder="Email" required>
                    <input type="text" id="password" class="fadeIn third zero-raduis" name="senhaLogin" placeholder="Senha" minlength="6" required>
                    <div id="formFooter">
                        <a class="underlineHover" href="index-esqueceu-senha">Esqueceu a senha?</a>
                    </div>
                    <p id="msgErro"></p>
                    <input type="submit" class="fadeIn fourth zero-raduis" value="Entrar">
                </form>

                <form method="POST" action="index-cadastro">
                    <hr>
                    <h2>Não tem uma conta? Registre-se!</h2>
                    <input type="submit" id="btnCadastro" value="CADASTRAR-SE" class="fadeIn fourth zero-raduis pc">
                </form>
            </div>
        </div>
    </div>
    <!-- FIM TELA LOGIN -->

    