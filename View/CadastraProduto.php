<!-- Modal -->
<div class="modal fade" id="modalCadastraProduto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Cadastre um produto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="../Controller/Produto.php" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="nome" class="col-sm-2 col-form-label">Nome</label>
                        <div class="col-sm-10">
                            <input type="text" required="required" class="form-control" name="nome" id="nome" placeholder="Nome"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="categoria" class="col-sm-2 col-form-label">Categoria</label>
                        <div class="col-sm-10">
                        	<select class="form-control" name="categoria" id="categoria">
								<option>Categoria</option>
								<option>Fruta</option>
								<option>Verdura</option>
								<option>Legume</option>
							</select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="preco" class="col-sm-2 col-form-label">Preço</label>
                        <div class="col-sm-6">
                            <input type="text" required="required" class="form-control" name="preco" id="preco" placeholder="Preço"/>
                        </div>
                        <div class="col-sm-4">
                            <select class="form-control" name="medida" id="medida">
                                <option>kilo</option>
                                <option>unidade</option>
                                <option>dúzia</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="arquivo" class="col-sm-2 col-form-label">Imagem</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control-file" name="arquivo">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-success" name="acao" value="Cadastrar">Cadastrar</button>
                </div>
            </form>
        </div>
    </div>
</div>


