<?php

session_start();
include_once('config.php');
include_once('index.php');

if (isset($_POST['cerca'])) {
    $città = $_POST['città'];

    $result = mysqli_query($mysqli, "SELECT * FROM city WHERE Name='$città'");

    $matched = mysqli_num_rows($result);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

    if ($matched > 0) {
        $_SESSION['città'] = $row;
        header('location: info.php');
    } else {
        echo "<div class='alert'>
                <pre><code>La città che cerchi non esiste, vuoi <a href='aggiungi.php'>aggiungerla</a>?</code></pre>
              </div>";
    }
}

?>

    <section class="header">
        <h2 class="subtitle">Cerca informazioni su una città</h2>
    </section>
    <div class="content">
        <form action="cerca.php" method="post" name="cerca">
            <table width="25%">
                <tr>
                    <td>Città</td>
                    <td><input type="text" name="città" required></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="cerca" value="Cerca"></td>
                </tr>
            </table>
        </form>
    </div>
    </div>

</body>

</html>