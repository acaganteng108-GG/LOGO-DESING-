<?php
require_once 'config/koneksi.php';

$layananList = [];
if (!$databaseError) {
  try {
    $statement = $pdo->query(
      'SELECT id, nama_layanan, deskripsi, gambar FROM layanan ORDER BY id DESC'
    );
    $layananList = $statement->fetchAll();
  } catch (PDOException $exception) {
    error_log('Failed to load services: ' . $exception->getMessage());
    $databaseError = true;
  }
}
?>
<!doctype html>
<html lang="id">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Layanan | LOGO DESING</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body class="d-flex flex-column min-vh-100 bg-light">
    <?php require_once 'layout/header.php'; ?>

    <main class="container flex-grow-1 py-5">
      <h1 class="text-center mb-4">Layanan Kami</h1>
      <?php if ($databaseError): ?>
        <div class="alert alert-warning" role="alert">
          Data layanan belum dapat dimuat. Periksa koneksi database dan tabel layanan.
        </div>
      <?php elseif (empty($layananList)): ?>
        <div class="alert alert-info" role="status">Belum ada data layanan.</div>
      <?php else: ?>
        <div class="row g-4">
          <?php foreach ($layananList as $layanan): ?>
            <?php
              $gambarPath = str_replace('\\', '/', trim($layanan['gambar']));
              if ($gambarPath !== '' && strpos($gambarPath, '/') === false) {
                $gambarPath = 'img/' . $gambarPath;
              }
            ?>
            <div class="col-12 col-sm-6 col-lg-4">
              <article class="card h-100">
                <img
                  src="<?= htmlspecialchars($gambarPath, ENT_QUOTES, 'UTF-8') ?>"
                  class="card-img-top"
                  alt="<?= htmlspecialchars($layanan['nama_layanan'], ENT_QUOTES, 'UTF-8') ?>"
                >
                <div class="card-body">
                  <p class="text-muted small mb-2">ID: <?= (int) $layanan['id'] ?></p>
                  <h2 class="card-title h5"><?= htmlspecialchars($layanan['nama_layanan'], ENT_QUOTES, 'UTF-8') ?></h2>
                  <p class="card-text mb-0"><?= htmlspecialchars($layanan['deskripsi'], ENT_QUOTES, 'UTF-8') ?></p>
                </div>
              </article>
            </div>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>
    </main>

    <?php require_once 'layout/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>