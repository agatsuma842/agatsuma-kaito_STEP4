<?php
session_start();

$name = $_SESSION['name'] ?? '';
$age = $_SESSION['age'] ?? '';
$phone = $_SESSION['phone'] ?? '';
$email = $_SESSION['email'] ?? '';
$address = $_SESSION['address'] ?? '';
$question = $_SESSION['question'] ?? '';
$gender = $_SESSION['gender'] ?? '';
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>入力内容確認</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <main class="container">

        <h1>入力内容確認</h1>

        <div class="confirm">

            <p>
                <strong>名前:</strong>
                <?= htmlspecialchars($name, ENT_QUOTES, 'UTF-8') ?>
            </p>

            <p>
                <strong>年齢:</strong>
                <?= htmlspecialchars($age, ENT_QUOTES, 'UTF-8') ?>
            </p>

            <p>
                <strong>電話番号:</strong>
                <?= htmlspecialchars($phone, ENT_QUOTES, 'UTF-8') ?>
            </p>

            <p>
                <strong>メールアドレス:</strong>
                <?= htmlspecialchars($email, ENT_QUOTES, 'UTF-8') ?>
            </p>

            <p>
                <strong>住所:</strong>
                <?= htmlspecialchars($address, ENT_QUOTES, 'UTF-8') ?>
            </p>

            <p>
                <strong>質問:</strong>
                <?= htmlspecialchars($question, ENT_QUOTES, 'UTF-8') ?>
            </p>

            <p>
                <strong>性別:</strong>
                <?= htmlspecialchars($gender, ENT_QUOTES, 'UTF-8') ?>
            </p>

        </div>

    </main>

</body>
</html>