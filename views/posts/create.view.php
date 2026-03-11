<?php require "views/components/header.php"; ?>
<?php require "views/components/navbar.php"; ?>
<h1>Izveidot augli</h1>
<form method="POST">
<label> <input name="content" value='<?= $_POST["name"]  ?? ""?>'/></label>
<button>Izveidot</button>
<?php if (isset($errors) == true) { ?>
    <p>❌ <?= $errors["name"] ?> </p>
    <?php }?>
</form>
<?php require "views/components/footer.php"; ?>