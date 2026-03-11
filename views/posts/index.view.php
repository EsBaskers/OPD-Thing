<?php require "views/components/header.php"; ?>
<?php require "views/components/navbar.php"; ?>
<h1>Visi augļi</h1>

<form>
    <input type="text" name="search" placeholder="Meklē" value="<?= $_GET['search'] ?? '' ?>">
    <button>Meklēt</button>
</form>

<ul>
    <?php foreach ($fruits as $fruit) { ?>
        <li>
            <a href="/show?id=<?= $fruit['id'] ?>"><?= htmlspecialchars($fruit['name']) ?> </a>
        </li>
    <?php } ?>
</ul>
<?php require "views/components/footer.php"; ?>