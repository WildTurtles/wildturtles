<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?= h($this->fetch('title')) ?></title>
        <link rel="shortcut icon" href="favicon_wildturtles.ico" type="image/x-icon">
        <!-- Include external files and scripts here (See HTML helper for more info.) -->
        <?php
        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');

        echo $this->Html->meta('icon');

        echo $this->Html->css('foundation/foundation.css');
        echo $this->Html->css('foundation/foundation.min.css');
        echo $this->Html->css('app.css');

        echo $this->Html->css('https://cdn.leafletjs.com/leaflet/v0.7.7/leaflet.css');
        echo $this->Html->script('https://cdn.leafletjs.com/leaflet/v0.7.7/leaflet.js');
        ?>
    </head>
    <body>

        <!-- If you'd like some sort of menu to
        show up on all of your views, include it here -->
        <header>
            <?= $this->element('headmenu'); ?>
        </header>

        <!-- Here's where I want my views to be displayed -->
        <?= $this->fetch('content') ?>

        <footer>
            <?= $this->element('footer'); ?>
        </footer>
        <?php
        echo $this->Html->script('vendor/jquery.js');
        echo $this->Html->script('vendor/foundation.js');
        echo $this->Html->script('vendor/foundation.min.js');
        echo $this->Html->script('vendor/what-input.js');
        echo $this->Html->script('app.js');
        ?>
    </body>
</html>
