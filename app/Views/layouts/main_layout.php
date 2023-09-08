<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= APP_NAME; ?></title>

    <!-- Bootstrap css -->
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap/bootstrap.min.css'); ?>">
    <!-- Fontawaesome -->
    <link rel="stylesheet" href="<?= base_url('assets/fontawesome/css/all.min.css'); ?>">
</head>
<body>

    <!-- Render section -->
    <?= $this->renderSection('content'); ?>


    <!-- Bootstrap js -->
    <script src="<?= base_url('assets/bootstrap/bootstrap.bundle.min.js'); ?>"></script>
    
</body>
</html>