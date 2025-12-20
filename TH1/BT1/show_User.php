<?php require 'data/flowers.php'; ?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flowers</title>
    <link rel="stylesheet" href="style_User.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand">Quyền user</a>
    <form class="d-flex" method = "POST">
      <button class="btn btn-outline-success" type="submit"  name = "go">Thay đổi quyền</button>
    </form>
  </div>
</nav>

<?php if (isset($_POST['go'])){
    header('Location: show_Admin.php');
    exit;
}?>


<?php foreach ($flowers as $flower): ?>
            <div class="flower">
                <img src="<?= $flower['image'] ?>" alt="<?= $flower['name'] ?>">
                <h3><?= $flower['name'] ?></h3>
                <p><?= $flower['description'] ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>