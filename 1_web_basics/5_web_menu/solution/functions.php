<?php

function getWebTitle()
{
    return "Super web";
}

function getYear()
{
    return date('Y');
}

function createMenuItem($fileName, $title)
{
    $menuItem = '<li>';
    $menuItem .= "<a href='$fileName.php'>$title</a>";
    $menuItem .= '</li>';

    return $menuItem;
}

function getMenu($pages)
{
    $menu = '<ul class="nav navbar-nav navbar-right">';
    foreach ($pages as $fileName => $title) {
        $menu .= createMenuItem($fileName, $title);
    }
    $menu .= "</ul>";
    
    return $menu;
}
