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
    <div class="container">
        <h1>Benutzerdaten anzeigen</h1>
        <form id="form_daten"
              action="index.php"
              method="post">
            <div class="row row-cols-lg-auto g-2">

                <label class="pb-2 col-form-label "
                       for="search">Suche:</label>
                <div class="col-sm-4 form-group">
                    <input type="text"
                           name="search"
                           value="<?= htmlspecialchars($suche) ?>"
                           class="form-control" />
                </div>
                <div class="col-sm-3 mb-3 d-grid">
                    <input type="submit"
                           name="submit"
                           class="btn btn-primary btn-block"
                           value="Speichern">
                </div>

                <div class="col-sm-3 mb-3 d-grid">
                    <a href="index.php"
                       class="btn btn-secondary btn-block">Löschen</a>
                </div>

            </div>

            <table class="table table-striped">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">E-Mail</th>
                        <th scope="col">Geburtsdatum</th>
                    </tr>
                </thead>
                <tbody id="tableBodyData">

                    <?php
                require "lib/func.inc.php";
                if (isset($_POST['search']) && $_POST['search'] != "") {
                    if (getFilteredData($_POST['search']) == null) {
                        echo "<div class='alert alert-danger'>" . "Keine Daten gefunden!". "</div>";
                        printAllData(getAllData());
                    } else{
                    printAllData(getFilteredData($_POST['search']));
                    }
                }
                elseif (isset($_POST['search']) && $_POST['search'] == "") {
                    echo "<div class='alert alert-danger'>" . "Bitte machen Sie eine Eingabe zum Suchen!". "</div>";
                    printAllData(getAllData());
                }
                else {
                    printAllData(getAllData());
                }
                ?>

                </tbody>

            </table>
        </form>

    </div>
</body>