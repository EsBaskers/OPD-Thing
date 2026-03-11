<?php require "views/components/header.php"; ?>
<?php require "views/components/navbar.php"; ?>
<h1>Rediģēt bloga ierakstu</h1>
<form method="POST">

    <input type="hidden" name="id" value="<?= $post['id'] ?>">

    <label>
        <input name="content"
        value="<?= htmlspecialchars($_POST['content'] ?? $post['content']) ?>">
    </label>
    <button>Saglabāt</button>
    <?php if (!empty($errors['content'])) : ?>
    <p><?= $errors['content'] ?></p>
<?php endif; ?>
<?php require "views/components/footer.php"; ?>