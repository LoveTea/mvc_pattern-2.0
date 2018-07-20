<main>
    <p>Здесь может быть ваша реклама</p>
    <?php if($_SESSION['islogin'] === true) echo "Привет " . $_SESSION['login'] . "!"; ?>

</main>