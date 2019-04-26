<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once 'functions.php';
session_start();
if (!isset($_SESSION['shopping_list'])) {
    $_SESSION['shopping_list'] = [];
}

if (!empty($_POST)) {
    $_SESSION['shopping_list'][] = $_POST;
}
?>

<!DOCTYPE html>
<html lang="en">

<?php include_once 'head.php' ?>

<body>

<?php include_once 'menu.php' ?>

<header class="intro-header" style="background-image: url('img/home-bg.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="site-heading">
                    <h1><?=getWebTitle()?></h1>
                    <hr class="small">
                </div>
            </div>
        </div>
    </div>
</header>

<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <h1>Nákupní seznam</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <h2>Seznam položek</h2>
            <table class="table">
                <thead>
                <tr>
                    <th>Název</th>
                    <th>Obchod</th>
                    <th>Množství</th>
                    <th>Cena</th>
                </tr>
                </thead>
                <tbody>
                    <?php
                    $list = $_SESSION['shopping_list'];
                    foreach ($list as $item) {
                        echo "<tr>";
                        echo "<td>{$item['title']}</td>";
                        echo "<td>{$item['store']}</td>";
                        echo "<td>{$item['quantity']}</td>";
                        echo "<td>{$item['price']}</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <h2>Přidání nové položky</h2>
            <div>
                <form name="item" action="" method="post">
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label for="title">Název</label>
                            <input type="text" class="form-control" placeholder="Název" name="title" id="title" required />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label for="store">Obchod</label>
                            <select name="store" class="form-control" id="store">
                                <option value="" selected disabled>Vyber Obchod</option>
                                <option value="marks&spencer">Marks & Spencer</option>
                                <option value="c&a">C&A</option>
                                <option value="esprit">Esprit</option>
                            </select>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label for="quantity">Množství</label>
                            <input type="number" class="form-control" placeholder="Množství" name="quantity" id="quantity" required />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label for="price">Cena</label>
                            <input type="number" class="form-control" placeholder="Cena"  name="price" id="price" step="0.01" min="0" max="1000000" required />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <br>
                    <div id="success"></div>
                    <div class="row">
                        <div class="form-group col-xs-12">
                            <input type="submit" name="add" class="btn btn-default" value="Přidat" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php include_once 'footer.php' ?>

</body>

</html>
