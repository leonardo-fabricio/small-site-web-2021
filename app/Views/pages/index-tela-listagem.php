
    <!-- <br> -->
    <h4>Listagem de Usuários</h4>
    <div id="listagem">
        <div id="main" class="container-fluid" style="margin-top: 50px">
        
            <div id="top" class="row">
                <div class="col-sm-3">
                    <h2>Itens</h2>
                </div>
                <div class="col-sm-6">
                    
                    <div class="input-group h2">
                        <input name="data[search]" class="form-control" id="search" type="text" placeholder="Pesquisar Nome de Usuário">
                    </div>
                    
                </div>
                <div class="col-sm-3">
                    <a href="#" class="btn btn-primary pull-right h2">Novo Usuário</a>
                </div>
            </div> <!-- /#top -->
        </div>
        
        <hr>
        <div id="list" class="row">
            <?php for($i = 1; $i <= 10; $i++){ ?>
                <!-- <hr /> -->
                <div class="table-responsive col-md-12">
                    <table class="table table-striped" cellspacing="0" cellpadding="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Endereço</th>
                                <th>CEP</th>
                                <th>Celular</th>
                                <th>Email</th>
                                <th>Senha</th>
                                <th class="actions">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php echo "<td>$i</td>" ?>
                                <td>Luis Lucilandio</td>
                                <td>Rafael Fernandes</td>
                                <td>59990-000</td>
                                <td>+55(84)9.9612-0413</td>
                                <td>l.luis@escolar.ifrn.edu.br</td>
                                <td>123456789</td>
                                <td class="actions">
                                    <a class="btn btn-success btn-xs" href="view.html">Visualizar</a>
                                    <a class="btn btn-warning btn-xs" href="edit.html">Editar</a>
                                    <a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target="#delete-modal">Excluir</a>
                                </td>
                            </tr>
                            <!-- <hr> -->
                        </tbody>
                    </table>
                </div>
            <?php } ?>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="modalLabel">Excluir Item</h4>
                </div>
                <div class="modal-body">
                    Deseja realmente excluir este item?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Sim</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">N&atilde;o</button>
                </div>
            </div>
        </div>
    </div>
