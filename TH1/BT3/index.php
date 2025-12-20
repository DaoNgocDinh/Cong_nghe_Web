<?php
$students = [];
if (($handle = fopen("data/65HTTT_Danh_sach_diem_danh.csv", "r")) !== FALSE) {
    $headers = fgetcsv($handle);
    while (($data = fgetcsv($handle)) !== FALSE) {
        $students[] = array_combine($headers, $data);
    }
    fclose($handle);
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách điểm danh</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Danh sách sinh viên</h1>
    <table>
        <thead>
            <tr>
                <?php foreach ($headers as $header): ?>
                    <th><?= htmlspecialchars($header) ?></th>
                <?php endforeach; ?>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($students as $student): ?>
                <tr>
                    <?php foreach ($headers as $header): ?>
                        <td><?= htmlspecialchars($student[$header]) ?></td>
                    <?php endforeach; ?>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
