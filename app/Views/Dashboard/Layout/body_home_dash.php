<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><i
            class="fa-solid fa-paw"> </i> Petscão</div>
            <div class="list-group list-group-flush my-3">
                <a href="/dashboard" class="list-group-item list-group-item-action bg-transparent second-text active"><i
                        class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
                <a href="/dashboard/servico_list" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-chart-line me-2"></i>Vendas</a>
                <a href="/dashboard/servico" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fa-solid fa-calendar me-2"></i> Agendamento</a>
                <a href="/dashboard/produtos_list" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-shopping-cart me-2"></i>Produtos</a>
                <a href="/dashboard/produtos" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fa fa-plus-circle me-2"></i>Cadastro Produtos</a>
                <a href="/dashboard/fornecedor" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-truck fs-7"></i> Fornecedores</a>
                <a href="/dashboard/cliente_list" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                 class="fa-solid fa-user me-2"></i>Clientes</a>
                <a href="https://web.whatsapp.com/send?phone=5511976510352" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-comment-dots me-2"></i>Suporte</a>
                
                <a href="#" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i
                        class="fas fa-power-off me-2"></i>Sair</a>
            </div>
        </div>
              
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Dashboard</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user me-2"></i>Administrador
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="/dashboard/perfil">Perfil</a></li>
                                <li><a class="dropdown-item" href="#">Configurações</a></li>
                                <li><a class="dropdown-item" href="#">Sair</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
       