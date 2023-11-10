<?php

        include_once("config.php");
        include_once('index.php');

        if (isset($_POST['aggiungi'])) {
            $nome = $_POST['nome'];
            $codice = $_POST['codice'];
            $distretto = $_POST['distretto'];
            $popolazione = $_POST['popolazione'];

            $result = mysqli_query($mysqli, "SELECT Name FROM city WHERE Name='$nome' AND CountryCode='$codice'");
            $check = mysqli_query($mysqli, "SELECT Code FROM country WHERE Code='$codice'");

            $matched = mysqli_num_rows($result);
            $checked = mysqli_fetch_array($check, MYSQLI_ASSOC);

            if (isset($checked['Code'])) {
                if ($matched > 0) {
                    echo "<div class='alert'>
                            <pre><code><strong>Errore: </strong> la città con nome '$nome' e codice stato '$codice' esiste già.</code></pre>
                          </div>";
                } else {
                    $result   = mysqli_query($mysqli, "INSERT INTO city(Name,CountryCode,District,Population) VALUES('$nome','$codice','$distretto','$popolazione')");
    
                    if ($result) {
                        echo "<div class='alert'>
                                <pre><code>Città aggiunta con successo.</code></pre>
                              </div>";
                    } else {
                        echo "<div class='alert'>
                                <pre><code>Errore durante l'aggiunta." . mysqli_error($mysqli) . "</code></pre>
                              </div>";
                    }
                }
            } else {
                echo "<div class='alert'>
                        <pre><code>Il codice stato inserito non esiste." . mysqli_error($mysqli) . "</code></pre>
                      </div>";
            }
        }

?>

    <section class="header">
        <h2 class="subtitle">Aggiungi una città</h2>
    </section>
    <div class="content">
    <form action="aggiungi.php" method="post" name="aggiungi">
        <table width="35%">
            <tr>
                <td>Nome</td>
                <td><input type="text" name="nome" required></td>
            </tr>
            <tr>
                <td>Codice stato</td>
                <td><input type="text" name="codice" required></td>
            </tr>
            <tr>
                <td>Distretto</td>
                <td><input type="text" name="distretto" required></td>
            </tr>
            <tr>
                <td>Popolazione</td>
                <td><input type="number" min="0" name="popolazione" required></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="aggiungi" value="Aggiungi"></td>
            </tr>
        </table>
        </div>

        
    </form>
    </div>
</body>

</html>