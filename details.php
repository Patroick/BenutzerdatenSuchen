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
        <form action="index.php"
              method="post"></form>
        <?php
        echo "<a class='nav-link' href=\"index.php\">zurück</a>"
        ?>
        </form>
        <table class="table">
            <tbody>

                <?php
            if (!is_numeric($id['id'])) {
                echo "<div class='alert alert-danger'>" . "ungültige ID" . "</div>";
            } else { ?>

                <tr>
                <td>Vorname</th>
                <td><?php echo getDataPerId($id['id'])['firstname']?></th>
                </tr>

                <tr>
                <td>Nachname</th>
                <td> <?php echo getDataPerId($id['id'])['lastname'] ?> </th>
                </tr>

                <tr>
                <td>Geburtsdatum</th>
                <td><?php echo date("d.m.Y", strtotime(getDataPerId($id['id'])['birthdate'])) ?> </th>
                </tr>

                <tr>
                <td>E-Mail</th>
                <td><?php echo getDataPerId($id['id'])['email'] ?></th>
                </tr>

                <tr>
                <td>Telefon</th>
                <td><?php echo getDataPerId($id['id'])['phone'] ?></th>
                </tr>

                <tr>
                <td>Straße</th>
                <td><?php echo getDataPerId($id['id'])['street'] ?></th>
                </tr>

            <?php } ?>
            </tbody>
        </table>
    </div>
</body>