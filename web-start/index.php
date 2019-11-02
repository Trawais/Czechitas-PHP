<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once("functions.php");
?>

<!DOCTYPE html>
<html lang="cs">

<?php require_once("head.php"); ?>

<body>

<?php
    $title = "pan";
    $name = "Jan";
    $surname = "Trávníček";

    // $fullname = $title . " " . $name . " " . $surname;
    $fullname = "$title $name $surname";
?>

<?php require_once("menu.php"); ?>
<?php require_once("header.php"); ?>

<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <h1><?php echo $fullname; ?></h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <h4>Pracovní zkušenosti</h4>
            <ul>
                <?php
                    $workExperiences = [
                        "AVG" => 0,
                        "Dixons Carphone" => 3,
                        "Tesla" => 12,
                        "SpaceX" => 5,
                        "Mars University" => 1
                    ];

                    foreach ($workExperiences as $company => $duration) {
                        
                        if ($duration == 1) {
                            $years = "rok";
                        } elseif ($duration > 1 && $duration < 5) {
                            $years = "roky";
                        } else {
                            $years = "let";
                        }

                        echo "<li>$company ($duration $years)</li>";
                    }
                ?>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <?php
                $showAboutMe = false;
                if ($showAboutMe) {
                    echo "<h4>O mně</h4>";
                    echo "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer imperdiet et ex in congue. Nunc ac massa quis orci blandit vehicula a et tortor. Aliquam ullamcorper dolor dolor, nec gravida erat mollis quis. Morbi quam nisi, mollis et rhoncus eleifend, blandit egestas diam. Morbi ac magna malesuada, ultrices sem ut, posuere quam. In hac habitasse platea dictumst. Curabitur ac quam id velit vulputate imperdiet. Vivamus bibendum nibh scelerisque, volutpat augue non, tempor enim. Donec pharetra, nisi nec condimentum efficitur, justo nisl hendrerit mi, at maximus ipsum dolor vel est. Mauris lorem nisl, cursus rhoncus metus id, commodo auctor elit. Vestibulum at ullamcorper dui. Fusce vitae velit vitae sapien convallis laoreet nec lobortis mauris. Vivamus eu gravida velit, sed ultrices lacus. Pellentesque ex nibh, rutrum sed congue eu, auctor non nunc. Donec ac pharetra enim. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>";
                }
            ?>
        </div>
    </div>
</div>

<hr>


<?php require_once("footer.php"); ?>

<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="js/clean-blog.min.js"></script>

</body>

</html>
