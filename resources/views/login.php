<?php 
    session_start(); 
    include 'components/navbar.php'; 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login | VitrineDoce</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5" style="max-width: 450px;">
    <div class="card shadow">
        <div class="card-header text-center bg-light">
            <h4>Entrar na VitrineDoce</h4>
        </div>
        <div class="card-body">
            <?php if (isset($_SESSION['erro'])): ?>
                <div class="alert alert-danger"><?php echo $_SESSION['erro']; unset($_SESSION['erro']); ?></div>
            <?php endif; ?>

            <form method="POST" action="/login">
                <!-- Proteção CSRF -->
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

                <div class="mb-3">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" name="email" class="form-control" id="email" required>
                </div>

                <div class="mb-3">
                    <label for="senha" class="form-label">Senha</label>
                    <input type="password" name="senha" class="form-control" id="senha" required>
                </div>

                <button type="submit" class="btn btn-primary w-100">Entrar</button>

                <div class="mt-3 text-center">
                    <a href="/esqueci-senha" class="text-decoration-none">Esqueceu a senha?</a>
                </div>
                <div class="mt-2 text-center">
                    <a href="/cadastro" class="text-decoration-none">Não tem uma conta? Cadastre-se</a>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>
