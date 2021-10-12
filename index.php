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
                           class="form-control"
                           required />
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
        </form>

    </div>
</body>