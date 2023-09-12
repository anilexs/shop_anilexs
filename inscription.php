<?php 
    session_start();
?>
    <?php require_once "inc/header.php"; ?>
    <title>Document</title>
    <?php require_once "inc/nav.php"; ?>

    <form action="model/db_inscription.php" method="post">
        <div class="contenaire">
            <div>
                <label for=""></label>
                <input type="email" name="email">
            </div>
            <div>
                <label for=""></label>
                <input type="text" name="">
            </div>
            <div>
                <label for=""></label>
                <input type="text" name="">
            </div>
        </div>
        <input type="submit" name="submit" id="submit" value="S'inscrire">
    </form>
    
<?php require_once "inc/footer.php"; ?>