<?php
if(isset($_SESSION['msg5'])){
    if($_SESSION['msg5'] == 'false')
        echo "<script> alert('Solicitação Não Efetuada'); </script>";
    unset($_SESSION['msg5']);
}
if(!isset($_SESSION['email'])){
    echo "<script>
                alert('Por favor, realize o login para fazer a solicitação de imóveis!');
            </script>";
    header('Location: index-login');
    exit;
}
?>
<h4>Solicite um imóvel para algum anunciante.</h4>
<p id="trecho">Caso algum anunciante próximo a você veja sua solicitação, ele entrará em contato.</p>

    <!-- INICIO Cadastro de solicitação -->
    <div class="form-control-teste">
        <div class="wrapper fadeInDown zero-raduis">
            <div id="formContent">
                <form name="solicitar" method="POST" action="Processo_soli" onsubmit="return validarCampos();">
                    <br><h5>Preencha todos os dados</h5><hr>
                    <p class="text-one-board">Nome Completo</p>
                    <p class="obrigatorio">*</p>
                    <input type="text" id="nome" class="fadeIn second zero-raduis" name="nome" placeholder="Nome Completo" pattern="[A-Za-zÀ-ú ']{4,}" value="<?php echo $_SESSION['nome'] ?>" readonly="true" required><br><br>
                    
                    <p class="text-one-board">Celular</p>
                    <p class="obrigatorio">*</p>
                    <input type="text" id="celular" class="fadeIn second zero-raduis" name="celular" placeholder="+99 (99) 9.9999-9999" onkeypress="maskCelular(this)" value="<?php echo $_SESSION['celular'] ?>" maxlength="18" readonly=“true” required><br><br>

                    <p class="text-one-board">Email</p>
                    <p class="obrigatorio">*</p>
                    <input type="email" id="email" class="fadeIn second zero-raduis" name="email" placeholder="Email" value = "<?php echo $_SESSION['email'] ?>" readonly=“true” required><br><br>

                    <p class="text-one-board">Em qual cidade deseja um imóvel?</p>
                    <p class="obrigatorio">*</p>
                    <input type="text" id="cidade" class="fadeIn second zero-raduis" name="cidade" placeholder="Pau dos Ferros/RN" required><br><br>
                    
                    <br><p id="description-textarea" class="text-one-board">Faça uma breve descrição do Imóvel que você procura</p>
                    <p id="obrigatorioo" class="obrigatorio">*</p>
                    <textarea id="w3review" name="w3review" rows="4" cols="50" placeholder="Exemplo: Busco um apartamento para aluguel; ou: uma casa para comprar com 2 salas, 3 quartos;" required></textarea>
                    <p id="msgErro"></p>

                    <input type="submit" class="fadeIn fourth zero-raduis" value="fazer solicitação">
                </form>
            </div>
        </div>
    </div>
    <!-- FIM Cadastro de solicitação -->
    <!--retirar depois-->
   <!-- INICIO RODAPE -->
