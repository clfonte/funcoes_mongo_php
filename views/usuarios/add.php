<div class="container" style="margin-top: 5em;">
    <h3>Cadastros - Adicionar Novo Usuário</h3>
    <div class="row">
        <form method="POST" action="usuarios_save" class="col-lg-10">

            <div class="form-group">
                <label for="nome">Nome Completo</label>
                <input type="text" name="nome" id="nome" class="form-control">
            </div>

            <div class="form-group">
                <label for="cpf">CPF</label>
                <input type="text" name="cpf" id="cpf" class="form-control">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" id="email" class="form-control">
            </div>

            <div class="form-group">
                <a href="http://localhost/funcoes_mongo" id="cancelar" class="btn btn-raised btn-danger">Cancelar</a>
                <button type="submit" class="btn btn-raised btn-success">Salvar</button>

            </div>
        </form>
    </div>
</div>