<?php
include __DIR__ . "/partials/files/header.php";
// var_dump($comics);


$error = generatePassword();
// var_dump($newPassword);
?>

<main class="container">
    <?php if ($error) { ?>
        <div class="alert alert-danger">
            <?php echo $error ?>
        </div>
    <?php } ?>

    <div class="container d-flex justify-content-center">
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET" class="py-5 px-3 w-50 border">
            <div class="d-flex justify-content-between">
                <div>
                    Lunghezza password:
                </div>
                <input type="number" name="passwordLength" min="6" max="20" class="w-25">
            </div>
            <div class="d-flex justify-content-between py-3">
                <p>Consenti ripetizioni di uno o più caratteri:</p>
                <div class="d-flex-flex-column">
                    <div class="d-flex flex-column">
                        <div class="d-flex">
                            <input type="radio" name="caratteriRadio" id="yes">
                            <label for="yes" class="ms-3">Sì</label>
                        </div>
                        <div class="d-flex">
                            <input type="radio" name="caratteriRadio" id="no">
                            <label for="no" class="ms-3">No</label>
                        </div>
                    </div>
                    <div class="d-flex flex-column my-3">
                        <div class="d-flex">
                            <input type="checkbox" name="caratteriCheckbox" id="lettere">
                            <label for="lettere" class="ms-3">Lettere</label>
                        </div>
                        <div class="d-flex">
                            <input type="checkbox" name="caratteriCheckbox" id="numeri">
                            <label for="numeri" class="ms-3">Numeri</label>
                        </div>
                        <div class="d-flex">
                            <input type="checkbox" name="caratteriCheckbox" id="simboli">
                            <label for="simboli" class="ms-3">Simboli</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex py-3">
                <button type="submit">Invia</button>
                <button type="reset">Annulla</button>
            </div>
        </form>
    </div>
</main>

<?php
include __DIR__ . "/partials/files/footer.php";
?>