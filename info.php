<?php

session_start();
include_once('index.php');

if (!isset($_SESSION["città"])) {
    header("location: cerca.php");
}

?>

    <section class="header">
        <h2 class="subtitle">Informazioni sulla città <?php echo $_SESSION['città']['Name'] ?></h2>
    </section>
    <div class="content">
        <table class="u-full-width">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Codice stato</th>
                    <th>Distretto</th>
                    <th>Popolazione</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $_SESSION['città']['Name'] ?></td>
                    <td><?php echo $_SESSION['città']['CountryCode'] ?></td>
                    <td><?php echo $_SESSION['città']['District'] ?></td>
                    <td><?php echo $_SESSION['città']['Population'] ?></td>
                </tr>
            </tbody>
        </table>
    </div>

</div>
</body>

</html>