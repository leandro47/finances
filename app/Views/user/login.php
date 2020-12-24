<div class="content">
    <div class="row justify-content-md-center">
        <div class="col-sm-11 col-md-4 tela-centro">
            <div class="card">
                <div class="card-header card-header-warning text-center">
                    <h1 class="text-finances">Finances</h1>
                </div>
                <div class="card-body">

                    <?php if (isset($validation)) : ?>

                    <div class="alert alert-<?= $validation['data']['status'] ?> alert-dismissible fade show" role="alert">
                        <strong>Algo deu errado!</strong> <?= $validation['message'] ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <?php endif; ?>

                    <form method="POST" action="<?= base_url('login') ?>">
                        <div class="form-group">
                            <label for="user">Usuário</label>
                            <input type="text" class="form-control" name="user" id="user" aria-describedby="emailHelp" placeholder="Digite seu usuário">
                        </div>
                        <div class="form-group">
                            <label for="password">Senha</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Entrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>