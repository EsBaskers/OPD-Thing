<?php require "views/components/header.php"; ?>
<?php require "views/components/navbar.php"; ?>
<h1>Visi augļi</h1>

<form>
    <input type="text" name="search" placeholder="Meklē" value="<?= $_GET['search'] ?? '' ?>">
    <button>Filtrēt</button>
</form>

<ul>
    <?php foreach ($fruits as $fruit) : ?>
        <li>
            <?= htmlspecialchars($fruit['name']) ?> 
            <a href="/show?id=<?= $fruit['id'] ?>">Skatīt</a>
            <a href="/edit?id=<?= $fruit['id'] ?>">Rediģēt</a>
            <form method="POST" action="/delete" style="display:inline;">
                <input type="hidden" name="id" value="<?= $fruit['id'] ?>">
                <button>Dzēst</button>
            </form>
        </li>
    <?php endforeach; ?>
</ul>
<?php require "views/components/footer.php"; ?>