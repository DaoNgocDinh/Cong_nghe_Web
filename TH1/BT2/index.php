<?php require 'data/data.php'; ?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kiểm tra</title>
    <link rel="stylesheet" href="styles.css">
<body>
    <h1 class="title">Quiz Android</h1>

<form action="result.php" method="POST" class="quiz-form">

<?php foreach ($questions as $index => $q): ?>
    <div class="question-box">

        <p class="question">
            <strong>Câu <?= $index + 1 ?>:</strong> <?= $q["question"] ?>
        </p>
        <?php 
            $isMultiple = is_array($q["answer"]) && count($q["answer"]) > 1;
            $inputType = $isMultiple ? "checkbox" : "radio";
        ?>

        <?php foreach ($q["options"] as $optIndex => $option): 
            $optLetter = chr(65 + $optIndex);
        ?>

            <label class="option">
                <input type="<?= $inputType ?>" 
                       name="<?= $isMultiple ? "q{$index}[]" : "q{$index}" ?>" 
                       value="<?= $optLetter ?>">
                <?= $optLetter ?>. <?= $option ?>
            </label>

        <?php endforeach; ?>

    </div>
<?php endforeach; ?>

    <button type="submit" class="btn-submit">Nộp bài</button>
</form>

</body>
</html>