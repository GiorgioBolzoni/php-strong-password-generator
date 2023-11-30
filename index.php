<?php
include __DIR__ . "/partials/files/header.php";
// var_dump($comics);

// $filtered_comics = $comics;
if (empty($_SESSION['password'])) {
    header('Location: login.php');
    die();
}

?>

<main class="container">
    <div class="alert alert-success">
        <h2>
            <?php
            echo $_SESSION['password'];
            ?>
        </h2>

    </div>
</main>

<?php
include __DIR__ . "/partials/files/footer.php";
?>