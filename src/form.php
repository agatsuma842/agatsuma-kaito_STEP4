<?php
$errors = [];
$name = '';
$age = '';
$phone = '';
$email = '';
$address = '';
$question = '';
$gender = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name = $_POST['name'] ?? '';
    $age = $_POST['age'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $email = $_POST['email'] ?? '';
    $address = $_POST['address'] ?? '';
    $question = $_POST['question'] ?? '';
    $gender = $_POST['gender'] ?? '';

    // 名前
    if ($name === '') {
        $errors[] = '名前を入力してください。';
    } elseif (!preg_match('/^[ぁ-んァ-ヶー一-龥A-Za-z]+$/u', $name)) {
        $errors[] = '名前はひらがな、カタカナ、漢字、英字のみ使用できます。';
    }

    // 年齢
    if ($age === '') {
        $errors[] = '年齢を入力してください。';
    } elseif (!ctype_digit($age) || (int)$age < 0 || (int)$age > 150) {
        $errors[] = '年齢は0から150の間で入力してください。';
    }

    // 電話番号
    if ($phone === '') {
        $errors[] = '電話番号を入力してください。';
    } elseif (!preg_match('/^[0-9-]+$/', $phone)) {
        $errors[] = '電話番号は半角数字とハイフンのみ使用できます。';
    }

    // メールアドレス
    if ($email === '') {
        $errors[] = 'メールアドレスを入力してください。';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'メールアドレスの形式が正しくありません。';
    }

    // 住所
    if ($address === '') {
        $errors[] = '住所を入力してください。';
    } elseif (!preg_match('/^[ぁ-んァ-ヶー一-龥A-Za-z0-9-]+$/u', $address)) {
        $errors[] = '住所はひらがな、カタカナ、漢字、英字、半角数字、ハイフンのみ使用できます。';
    }

    // 質問
    if ($question === '') {
        $errors[] = '質問を入力してください。';
    }

    // 性別
    if ($gender === '') {
        $errors[] = '性別を選択してください。';
    }

    // エラーがなければconfirm.phpへ
    if (empty($errors)) {
        session_start();

        $_SESSION['name'] = $name;
        $_SESSION['age'] = $age;
        $_SESSION['phone'] = $phone;
        $_SESSION['email'] = $email;
        $_SESSION['address'] = $address;
        $_SESSION['question'] = $question;
        $_SESSION['gender'] = $gender;

        header('Location: confirm.php');
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>フォーム入力</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <main class="container">

        <h1>フォーム入力</h1>

        <?php if (!empty($errors)): ?>
            <div class="error">
                <?php foreach ($errors as $error): ?>
                    <p><?= htmlspecialchars($error, ENT_QUOTES, 'UTF-8') ?></p>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <form action="form.php" method="post">

            <div class="form-group">
                <label for="name">名前:</label>
                <input type="text" id="name" name="name"
                    value="<?= htmlspecialchars($name, ENT_QUOTES, 'UTF-8') ?>">
            </div>

            <div class="form-group">
                <label for="age">年齢:</label>
                <input type="text" id="age" name="age"
                    value="<?= htmlspecialchars($age, ENT_QUOTES, 'UTF-8') ?>">
            </div>

            <div class="form-group">
                <label for="phone">電話番号:</label>
                <input type="text" id="phone" name="phone"
                    value="<?= htmlspecialchars($phone, ENT_QUOTES, 'UTF-8') ?>">
            </div>

            <div class="form-group">
                <label for="email">メールアドレス:</label>
                <input type="text" id="email" name="email"
                    value="<?= htmlspecialchars($email, ENT_QUOTES, 'UTF-8') ?>">
            </div>

            <div class="form-group">
                <label for="address">住所:</label>
                <input type="text" id="address" name="address"
                    value="<?= htmlspecialchars($address, ENT_QUOTES, 'UTF-8') ?>">
            </div>

            <div class="form-group">
                <label for="question">質問:</label>
                <input type="text" id="question" name="question"
                    value="<?= htmlspecialchars($question, ENT_QUOTES, 'UTF-8') ?>">
            </div>

            <div class="form-group">
                <label for="gender">性別:</label>
                <select id="gender" name="gender">
                    <option value="">選択してください</option>
                    <option value="男性" <?= $gender === '男性' ? 'selected' : '' ?>>男性</option>
                    <option value="女性" <?= $gender === '女性' ? 'selected' : '' ?>>女性</option>
                </select>
            </div>

            <button type="submit">送信</button>

        </form>

    </main>

</body>
</html>