<?php
/**
 * Array that holds all of the menu items
 * Values: title, url, submenu (array of more menu items, can be nested)
 */
$menuItems = [
    ['name' => 'Menu', 'url' => '#', 'submenu' => [
            ['name' => 'Planning', 'url' => '/planning', 'title' => 'Visit the planning page to learn best practices for planning a web site project'],
            ['name' => 'Content', 'url' => '/content', 'title' => 'Visit the content page to learn best practices for generating content'],
            ['name' => 'Design', 'url' => '/design', 'title' => 'Visit the design page to learn best practices for beautiful, effective design'],
            ['name' => 'Development', 'url' => '/development', 'title' => 'Visit the development page to learn best practices of development'],
            ['name' => 'Testing', 'url' => '/testing', 'title' => 'Visit the testing page to learn best practices of testing your finished site'],
            ['name' => 'Follow Up', 'url' => '/followup', 'title' => 'Visit the follow up page to learn best practices of maintaining relationships and websites']
        ]
    ]
];

function getMenuItems(array $menuItems){
    $currentUrl = $_SERVER["REQUEST_URI"];
    foreach($menuItems as $menuItem){
        $class = ($currentUrl === $menuItem['url']) ? 'active' : '';
        $url = $menuItem['url'];
        $name = $menuItem['name'];
        $title = $menuItem['title'];

        echo "<li class='" . ((!empty($menuItem['submenu'])) ? 'is-dropdown-submenu-parent' : '') . " {$class}' role='menuitem'>
              <a href='{$url}' title='{$title}'>{$name}</a>";
                if(!empty($menuItem['submenu'])){
                    echo "<ul class='menu submenu " . ((!empty($menuItem['submenu'])) ? 'is-dropdown-submenu' : '') . "' data-submenu role='menu'>";
                    getSubMenuItems($menuItem['submenu']);
                    echo "</ul>";
                }
        echo "</li>";
    }
}

function getSubMenuItems(array $subMenuItems){
    $currentUrl = $_SERVER["REQUEST_URI"];
    foreach($subMenuItems as $menuItem){
        $class = ($currentUrl === $menuItem['url']) ? ' active' : '';
        $url = $menuItem['url'];
        $title = $menuItem['title'];
        $name = $menuItem['name'];

        echo "<li class='is-submenu-item is-dropdown-submenu-item" . ((!empty($menuItem['submenu'])) ? ' is-dropdown-submenu-parent' : '') . " {$class}' role='menuitem'>
              <a href='{$url}' title='{$title}'>{$name}</a>";
        if(!empty($menuItem['submenu'])){
            echo "<ul data-options='disableHover:true;clickOpen:true' class='menu submenu " . ((!empty($menuItem['submenu'])) ? 'is-dropdown-submenu' : '') . "' data-submenu role='menu'>";
            getSubMenuItems($menuItem['submenu']);
            echo "</ul>";
        }
        echo "</li>";
    }
}


?>
<nav>
    <ul class="dropdown menu float-right" data-options='disableHover:true;clickOpen:true' data-dropdown-menu="dropdown-menu" role="menubar">
        <?php getMenuItems($menuItems); ?>
    </ul>
</nav>

