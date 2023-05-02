<?php
$title = "Mon projet";
require_once "core/entity/header.php";
require_once "core/entity/config.php";

$sql = 'SELECT * FROM projet';
$result = $pdo->query($sql);
$row = $result->fetch(PDO::FETCH_ASSOC)
?>

<main>

    <h1><?= $row['titre'] ?></h1>

</main>

<?php
require_once "core/entity/footer.php";
?>