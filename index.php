<html lang="sk">
<head>
    <title>API - Meniny</title>
    <meta charset="UTF-8">
    <meta name="author" content="Juraj Lapčák">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <link href="/namedays/assets/css/style.css" rel="stylesheet">
    <script src="/namedays/assets/js/script.js"></script>
</head>
<body>
<div class="container-fluid">
    <?php include(__DIR__ . "/partials/header.php"); ?>

    <div class="row mt-5">
        <div class="col-lg ">
            <main class="site-content">
                <div class="container-fluid">

                    <div class="row">
                        <h4>Hľadanie menín na základe zadaného dňa</h4>
                        <form>
                            <div class="form-group">
                                <label for="nameday">Deň menín (dd.mm.)</label>
                                <input type="text" class="form-control" id="nameday" value="01.01.">
                            </div>
                            <button type="button" class="btn btn-primary" id="namedays-submit">Submit</button>
                        </form>
                        <div class="row">
                            <h5>Odpoveď:</h5>
                            <div id="namedays-response" class="response shadow-sm border rounded "></div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <h4>Hľadanie dňa menín na základe zadaného mena a štátu</h4>
                        <form>
                            <div class="form-group">
                                <label for="name">Meno</label>
                                <input type="text" class="form-control" id="name" value="Adam">
                            </div>
                            <div class="form-group">
                                <label for="names-country">Kód štátu (napr. SK)</label>
                                <input type="text" class="form-control" id="names-country" value="SK">
                            </div>
                            <button type="button" class="btn btn-primary" id="names-submit">Submit</button>
                        </form>
                        <div class="row">
                            <h5>Odpoveď:</h5>
                            <div id="names-response" class="response shadow-sm border rounded "></div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <h4>Hľadanie kolekcie sviatkov s dňom na Slovensku alebo v Česku</h4>
                        <form>
                            <div class="form-group">
                                <label for="holidays-country">Kód štátu (SK alebo CZ)</label>
                                <select class="form-select" aria-label="Default select example" id="holidays-country">
                                    <option value="SK" selected>Slovensko</option>
                                    <option value="CZ">Česko</option>
                                </select>
                            </div>

                            <button type="button" class="btn btn-primary" id="holidays-submit">Submit</button>
                        </form>
                        <div class="row">
                            <h5>Odpoveď:</h5>
                            <div id="holidays-response" class="response shadow-sm border rounded "></div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <h4>Hľadanie kolekcie pamätných dní s dňom na Slovensku</h4>
                        <form>
                            <button type="button" class="btn btn-primary" id="memorials-submit">Submit</button>
                        </form>
                        <div class="row">
                            <h5>Odpoveď:</h5>
                            <div id="memorials-response" class="response shadow-sm border rounded "></div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <h4>Vloženie mena do kalendára k slovenským menám</h4>
                        <form>
                            <div class="form-group">
                                <label for="create-day">Deň menín (dd.mm.)</label>
                                <input type="text" class="form-control" id="create-day" value="01.01.">
                                <label for="create-name">Meno</label>
                                <input type="text" class="form-control" id="create-name" value="Morečko">
                            </div>
                            <button type="button" class="btn btn-primary" id="create-submit">Submit</button>
                        </form>
                        <div class="row">
                            <h5>Odpoveď:</h5>
                            <div id="create-response" class="response shadow-sm border rounded "></div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</div>

<?php include(__DIR__ . "/partials/footer.php"); ?>
</body>