<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once("functions.php");

$title = "FMpvd.";
$firstName = "Jan";
$surname = "Trávníček";

$fullName = $title . " " . $firstName . " " . $surname;
$fullName = "$title $firstName $surname";
$about = "Já jsem úplně nejvíc nejlepší lektor, kterýho jste kdy mohli vidět. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer imperdiet et ex in congue.";
$showAbout = true;

$workExperiences = [
    "AVG" => 1,
    "Dixons Carphone" => 3,
    "Tesla" => 0,
    "Space X" => 37
];

$workExperiences = loadData();
?>

<!DOCTYPE html>
<html lang="cs">

<?php include_once("head.php"); ?>
<body>

<?php
include_once("menu.php");
include_once("header.php");
?>

<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <h1><?php echo $fullName; ?></h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <h4>Pracovní zkušenosti</h4>
            <ul>
                <?php
                    foreach ($workExperiences as $work) {
                        $year = numberOfYears($work['from'], $work['to']);
                        $yearString = getYearString($year);
                        echo "<li> {$work['company']} ($year $yearString)</li>";
                    }
                ?>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <?php
                if ($showAbout) {
                    echo "<h4>O mně</h4>";
                    echo "<p>";
                    echo $about;
                    echo "</p>";
                }
            ?>
        </div>
    </div>
</div>

<hr>

<?php include_once("footer.php"); ?>

<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="js/clean-blog.min.js"></script>

</body>

</html>
