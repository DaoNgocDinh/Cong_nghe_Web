<?php
require 'data.php';

$success = $_GET['success'] ?? ""
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Quản lý Đồ án</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand">Quản lý đồ án tốt nghiệp</a>
    <form class="d-flex" role="search">
      <button class="btn btn-outline-success" type="submit">Thêm đồ án +</button>
    </form>
  </div>
</nav>

<div class="container">
    <h1>Dashboard</h1>
    <p>Dữ liệu trong ví dụ này đang được lưu cố định trong một mảng PHP (chưa dùng CSDL).</p>

    <?php if ($success == "created"): ?>
        <div style="padding: 10px; background:#d1e7dd; color:#0f5132; border-radius:4px; margin-bottom:16px;">
            Giả lập: Thêm đồ án mới thành công! (thông báo thông qua tham số GET trong URL).
        </div>
    <?php endif; ?>

    <table class="table table-bordered">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Tên đề tài</th>
            <th scope="col">Sinh viên</th>
            <th scope="col">GV hướng dẫn</th>
            <th scope="col">Năm học</th>
            <th scope="col">Trạng thái</th>
            <th scope="col">Ngày tạo</th>
        </tr>
        </thead>
        <tbody class="table-group-divider">
        <?php if (!empty($do_an_list)): ?>
            <?php foreach ($do_an_list as $index => $do_an): ?>
                <tr>
                    <td><?php echo $index + 1; ?></td>
                    <td><?php echo htmlspecialchars($do_an['ten_de_tai']); ?></td>
                    <td><?php echo htmlspecialchars($do_an['ten_sinh_vien']) . " (" . htmlspecialchars($do_an['mssv']) . ")"; ?></td>
                    <td><?php echo htmlspecialchars($do_an['giang_vien_hd']); ?></td>
                    <td><?php echo htmlspecialchars($do_an['nam_hoc']); ?></td>
                    <td><?php echo htmlspecialchars($do_an['trang_thai']); ?></td>
                    <td><?php echo htmlspecialchars($do_an['created_at']); ?></td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="7">Chưa có đồ án nào trong mảng.</td>
            </tr>
        <?php endif; ?>
        </tbody>
    </table>
</div>
</body>
</html>
