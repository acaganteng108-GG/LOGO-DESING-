<!doctype html>
<html lang="id">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kontak | LOGO DESING</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body class="d-flex flex-column min-vh-100 bg-light">
    <?php require_once 'layout/header.php'; ?>

    <main class="container flex-grow-1 py-5">
      <h1 class="mb-4">Kontak Kami</h1>
      <div class="row g-4">
        <section class="col-12 col-lg-5" aria-labelledby="informasi-kontak">
          <h2 id="informasi-kontak" class="h4 mb-3">Informasi Kontak</h2>
          <dl class="mb-0">
            <dt>Alamat</dt>
            <dd class="mb-3">Bandung, Jl. Buah Batu no. 187</dd>
            <dt>Email</dt>
            <dd class="mb-3">LogoDesing@gmail.com</dd>
            <dt>Nomor Telepon</dt>
            <dd class="mb-0">0819-0278-0030</dd>
          </dl>
        </section>

        <section class="col-12 col-lg-7" aria-labelledby="form-kontak">
          <form method="post" action="">
            <div class="mb-3">
              <label for="nama" class="form-label">Nama</label>
              <input type="text" class="form-control" id="nama" name="nama" autocomplete="name" required>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" name="email" autocomplete="email" required>
            </div>
            <div class="mb-3">
              <label for="pesan" class="form-label">Pesan</label>
              <textarea class="form-control" id="pesan" name="pesan" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-dark">Kirim</button>
          </form>
        </section>
      </div>
    </main>

    <?php require_once 'layout/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>