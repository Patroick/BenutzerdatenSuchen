<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
          crossorigin="anonymous">
    <title>Benutzerdaten Suchen</title>

</head>

<body>

    <?php
    require "lib/func.inc.php";
    $id = ($_GET);
    ?>

    <div class="container">
        <h1 class="mt-5 mb-3">Benutzerdetails</h1>
        <form action="index.php" method="post"></form>
        <?php
        echo "<a class='btn btn-primary btn-block' href=\"index.php\">zurück</a>"
        ?>
        </form>
        <table class="table">
        <tbody>

            <?php
            if (!is_numeric($id['id'])) {
                echo "<div class='alert alert-danger'>" . "ungültige ID" . "</div>";
            } else {

                echo "<tr>";
                echo "<td>Vorname</th>";
                echo "<td>" . getDataPerId($id['id'])['firstname'] . "</th>";
                echo "</tr>";

                echo "<tr>";
                echo "<td>Nachname</th>";
                echo "<td>" . getDataPerId($id['id'])['lastname'] . "</th>";
                echo "</tr>";

                echo "<tr>";
                echo "<td>Geburtsdatum</th>";
                echo "<td>" . date("d.m.Y", strtotime(getDataPerId($id['id'])['birthdate'])) . "</th>";
                echo "</tr>";

                echo "<tr>";
                echo "<td>E-Mail</th>";
                echo "<td>" . getDataPerId($id['id'])['email'] . "</th>";
                echo "</tr>";

                echo "<tr>";
                echo "<td>Telefon</th>";
                echo "<td>" . getDataPerId($id['id'])['phone'] . "</th>";
                echo "</tr>";

                echo "<tr>";
                echo "<td>Straße</th>";
                echo "<td>" . getDataPerId($id['id'])['street'] . "</th>";
                echo "</tr>";

            }
            ?>
        </tbody>
        </table>
    </div>
    </body>
    </html>