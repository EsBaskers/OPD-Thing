<?php require "views/components/header.php"; ?>
<?php require "views/components/navbar.php"; ?>

<h1><?= htmlspecialchars($fruit["name"]) ?></h1>
<li><a href="/edit?id=<?= $fruit["id"] ?>">Rediģēt </a> </li>
<form action="/delete" method="POST">
    <input type="hidden" name="id" value="<?= htmlspecialchars($fruit['id']) ?>">
    <button type="submit">Dzēst ierakstu</button>
</form>
<?php require "views/components/footer.php"; ?>