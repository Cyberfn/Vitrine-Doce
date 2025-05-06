<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
<link rel="stylesheet" href="css/navbar.css">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">

        <a class="navbar-brand" href="/">
            <i class="bi bi-cake-fill ml-2"></i> VitrineDoce
        </a>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto d-flex flex-row gap-3">

                <li class="nav-item">
                    <a class="nav-link" href="/carrinho">
                        <i class="bi bi-cart3"></i> Carrinho
                    </a>
                </li>

                <li class="nav-item" id="nav-login">
                    <a class="nav-link" href="/login">
                        <i class="bi bi-person-circle"></i> Login
                    </a>
                </li>

                <li class="nav-item dropdown d-none" id="nav-user">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                        <i class="bi bi-person-circle"></i> <span id="nav-username"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="/perfil">Perfil</a></li>
                        <li>
                            <form method="POST" action="/logout">
                                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                                <button type="submit" class="dropdown-item">Sair</button>
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Scripts na ordem correta -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="/js/navbar.js"></script>
