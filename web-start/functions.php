<?php
define('WEB_TITLE', "Jan's Web");
define('WORK_EXPERIENCES_FILE', "data/work-experiences.json");
define('SECONDS_IN_YEAR', 31536000);

function getWebTitle() {
    return WEB_TITLE;
}

function getMenu($listOfPages) {
    $menu = "";
    foreach ($listOfPages as $pageFileName => $label) {
        $menu .= getMenuItem($pageFileName, $label);
    }

    return $menu;
}

function getMenuItem($pageName, $label) {
    $menuItem = "<li>";
    $menuItem .= "<a href='$pageName.php'>$label</a>";
    $menuItem .= "</li>";

    return $menuItem;
}

function loadData() {
    $fileContent = file_get_contents(WORK_EXPERIENCES_FILE);
    return json_decode($fileContent, true);
}

function numberOfYears($from, $to) {
    $fromTimestamp = strtotime($from);
    $toTimestamp = strtotime($to);
    $diff = $toTimestamp - $fromTimestamp;
    return round($diff / SECONDS_IN_YEAR);
}

function getYearString($year) {
    if ($year == 0) {
        $result = "let";
    } elseif ($year == 1) {
        $result = "rok";
    } elseif ($year < 5) {
        $result = "roky";
    } else {
        $result = "let";
    }

    return $result;
}
