<?php require 'data/flowers.php'; ?>
<!DOCTYPE html>
<html lang="vi">
<head>
<meta charset="UTF-8">
<title>Quản trị hoa - Admin</title>
<link rel="stylesheet" href="style_Admin.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand">Quyền admin</a>
    <form class="d-flex" method = "POST">
      <button class="btn btn-outline-success" type="submit"  name = "go">Thay đổi quyền</button>
    </form>
  </div>
</nav>

<?php if (isset($_POST['go'])){
    header('Location: show_User.php');
    exit;
}?>

<table>
<tr>
    <th>Ảnh</th>
    <th>Tên Hoa</th>
    <th>Mô Tả</th>
    <th>Thao tác</th>
</tr>

<?php foreach ($flowers as $index => $f): ?>
<tr>
    <td><img src="<?= $f['image'] ?>"></td>
    <td><?= $f['name'] ?></td>
    <td><?= $f['description'] ?></td>
    <td>
        <button type="button" class="btn btn-success" onclick="openEditModal(<?= $index ?>, '<?= addslashes($f['name']) ?>', '<?= addslashes($f['description']) ?>', '<?= addslashes($f['image']) ?>')">Sửa</button>
        <button type="button" class="btn btn-danger" onclick="openDeleteModal(<?= $index ?>)">Xóa</button>
    </td>
</tr>
<?php endforeach; ?>

</table>

<div class="modal fade" id="editModal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      
      <div class="modal-header">
        <h5 class="modal-title">Sửa thông tin hoa</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">
        <form id="editForm" method="POST" action="edit_flowers.php">
            <input type="hidden" id="edit_index" name="index">

            <div class="mb-3">
              <label class="form-label">Tên hoa</label>
              <input type="text" class="form-control" id="edit_name" name="name">
            </div>

            <div class="mb-3">
              <label class="form-label">Mô tả</label>
              <textarea class="form-control" id="edit_description" name="description"></textarea>
            </div>

            <div class="mb-3">
              <label class="form-label">Ảnh</label>
              <input type="text" class="form-control" id="edit_image" name="image">
            </div>

            <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
        </form>
      </div>

    </div>
  </div>
</div>

<div class="modal fade" id="deleteModal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      
      <div class="modal-header">
        <h5 class="modal-title">Xác nhận xóa hoa</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">
        <p>Bạn có chắc chắn muốn xóa loài hoa này?</p>

        <form method="POST" action="delete_flower.php">
            <input type="hidden" id="delete_index" name="index">
            <button type="submit" class="btn btn-danger">Xóa</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
        </form>
      </div>

    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
function openEditModal(index, name, description, image) {
    document.getElementById('edit_index').value = index;
    document.getElementById('edit_name').value = name;
    document.getElementById('edit_description').value = description;
    document.getElementById('edit_image').value = image;

    var myModal = new bootstrap.Modal(document.getElementById('editModal'));
    myModal.show();
}
</script>

<script>
function openDeleteModal(index) {
    document.getElementById('delete_index').value = index;

    var myModal = new bootstrap.Modal(document.getElementById('deleteModal'));
    myModal.show();
}
</script>

</body>
</html>
