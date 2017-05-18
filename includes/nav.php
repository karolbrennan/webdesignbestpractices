<?php
/**
 * Array that holds all of the menu items
 * Values: title, url, submenu (array of more menu items, can be nested)
 */
$menuItems = [
    ['name' => 'Index', 'url' => '#index', 'title' => 'Lets learn the best practices for building a website!', 'data-target' => 'index'],
    ['name' => 'Planning', 'url' => '#planning', 'title' => 'Learn best practices for planning a web site project', 'data-target' => 'planning'],
    ['name' => 'Content', 'url' => '#content', 'title' => 'Learn best practices for generating content', 'data-target' => 'content'],
    ['name' => 'Design', 'url' => '#design', 'title' => 'Learn best practices for beautiful, effective design', 'data-target' => 'design'],
    ['name' => 'Development', 'url' => '#development', 'title' => 'Learn best practices of development', 'data-target' => 'development'],
    ['name' => 'Testing', 'url' => '#testing', 'title' => 'Learn best practices of testing your finished site', 'data-target' => 'testing'],
    ['name' => 'Follow Up', 'url' => '#followup', 'title' => 'Learn best practices of maintaining relationships and websites', 'data-target' => 'followup']
];

?>

<div id="menutoggle"><i class="fa fa-bars"></i></div>
<nav>
    <ul role="menu">
        <?php
            foreach($menuItems as $menuItem) {
                echo "<li {$menuItem['class']} role='menuitem'><a class='nav-item' title='{$menuItem['title']}' data-target='{$menuItem['data-target']}'>{$menuItem['name']}</a></li>";
            }
        ?>
    </ul>
</nav>

