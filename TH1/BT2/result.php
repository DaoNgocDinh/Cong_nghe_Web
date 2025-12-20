<?php
require 'data/data.php';

$score = 0;
$userAnswers = [];

foreach ($questions as $index => $q) {
    if (isset($_POST["q$index"])) {
        $userAnswers[$index] = $_POST["q$index"];
    } else {
        $userAnswers[$index] = [];
    }

    $correct = $q["answer"];
    $user = $userAnswers[$index];

    if (is_array($correct)) {
        sort($correct);
        sort($user);

        if ($correct == $user) $score++;
    } else {
        if ($user == $correct) $score++;
    }
}

?>
<!DOCTYPE html>
<html lang="vi">
<head>
<meta charset="UTF-8">
<title>Kết quả</title>
<link rel="stylesheet" href="styles.css">
<style>
.correct { background: #d4edda; padding:10px; border-left:5px solid #28a745; }
.wrong { background: #f8d7da; padding:10px; border-left:5px solid #dc3545; }
.correct-answer { color:#28a745; font-weight:bold; }
.user-answer { color:#dc3545; font-weight:bold; }
</style>
</head>
<body>

<h2 class="title">Kết quả bài làm</h2>
<p style="text-align:center; font-size:20px;">
    Điểm của bạn: <strong><?= $score ?>/<?= count($questions) ?></strong>
</p>

<div class="quiz-form">

<?php foreach ($questions as $index => $q): ?>

    <?php
        $correct = $q["answer"];
        $user = $userAnswers[$index];
        $isMultiple = is_array($correct);

        $isCorrect = false;

        if ($isMultiple) {
            $c = $correct; $u = $user;
            sort($c); sort($u);
            $isCorrect = ($c == $u);
        } else {
            $isCorrect = ($user == $correct);
        }
    ?>

    <div class="<?= $isCorrect ? 'correct' : 'wrong' ?> question-box">
        <p><strong>Câu <?= $index + 1 ?>:</strong> <?= $q["question"] ?></p>

        <p>• Bạn chọn: 
            <span class="user-answer">
            <?= empty($user) ? "Không chọn" : (is_array($user) ? implode(", ", $user) : $user) ?>
            </span>
        </p>

        <p>• Đáp án đúng: 
            <span class="correct-answer">
            <?= is_array($correct) ? implode(", ", $correct) : $correct ?>
            </span>
        </p>
    </div>

<?php endforeach; ?>

<a href="index.php" class="btn-submit" style="display:block;width:150px;margin:20px auto;text-align:center;">
    Làm lại
</a>

</div>
</body>
</html>
