<div class="wrapper">
    <div class="sidebar">
        <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red"
      -->
        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="javascript:void(0)" class="simple-text logo-mini">
                    FI
                </a>
                <a href="javascript:void(0)" class="simple-text logo-normal">
                    Finances
                </a>
            </div>
            <ul class="nav">
                <li class="active ">
                    <a href="./dashboard.html">
                        <i class="tim-icons icon-chart-pie-36"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a type="button" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="tim-icons icon-refresh-02"></i>
                        <p>Movimentar</p>
                    </a>
                    <div class="dropdown-menu dropdown-black">
                        <a class="dropdown-item" type="button">Despesa</a>
                        <a class="dropdown-item" type="button">Receita</a>
                    </div>
                </li>
                <li>
                    <a type="button" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="tim-icons icon-simple-add"></i>
                        <p>Cadastro</p>
                    </a>
                    <div class="dropdown-menu dropdown-black">
                        <a class="dropdown-item" href="<?= base_url('account/show') ?>" type="button">Conta</a>
                        <a class="dropdown-item" type="button">Categorias</a>
                    </div>
                </li>
                <li>
                    <a href="">
                        <i class="tim-icons icon-notes"></i>
                        Extrato
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <div class="navbar-toggle d-inline">
                        <button type="button" class="navbar-toggler">
                            <span class="navbar-toggler-bar bar1"></span>
                            <span class="navbar-toggler-bar bar2"></span>
                            <span class="navbar-toggler-bar bar3"></span>
                        </button>
                    </div>
                    <a class="navbar-brand" href="javascript:void(0)"><?= $titlePage ?></a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                </button>
                <div class="collapse navbar-collapse" id="navigation">
                    <ul class="navbar-nav ml-auto">
                        <li class="dropdown nav-item">
                            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                <div class="photo">
                                    <img src="<?= base_url() ?>/assets/img/anime3.png" alt="Profile Photo">
                                </div>
                                <b class="caret d-none d-lg-block d-xl-block"></b>
                                <p class="d-lg-none">
                                    Usuário
                                </p>
                            </a>
                            <ul class="dropdown-menu dropdown-navbar">
                                <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">Sair</a></li>
                            </ul>
                        </li>
                        <li class="separator d-lg-none"></li>
                    </ul>
                </div>
            </div>
        </nav>