<?php require "views/components/header.php"; ?>
<?php require "views/components/navbar.php"; ?>

<h1><?= htmlspecialchars($post["content"]) ?></h1>
<li><a href="/edit?id=<?= $post["id"] ?>">Rediģēt </a> </li>
<form action="/delete" method="POST">
    <input type="hidden" name="id" value="<?= htmlspecialchars($post['id']) ?>">
    <button type="submit">Dzēst ierakstu</button>
</form>
<?php require "views/components/footer.php"; ?>