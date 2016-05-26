<nav class="top-bar">
    <!--<div class="top-bar-title">
        <span data-responsive-toggle="responsive-menu" data-hide-for="medium">
            <button class="menu-icon dark" type="button" data-toggle></button>
        </span>
        <li class="menu title">
    <?php echo $this->Html->link('Wild Turtles', ['controller' => 'Pages', 'action' => 'display', 'home']); ?>
        </li>
    <?php //echo $this->Html->link('Wild Turtles', ['controller' => 'Pages', 'action' => 'display', 'home']);  ?>
    </div>-->

    <div class="top-bar">
        <div class="top-bar-left">
            <ul class="menu">
                <li class="menu-text">
                    <?php echo $this->Html->link('Wild Turtles', ['controller' => 'Pages', 'action' => 'display', 'home']); ?></li>

            </ul>
        </div>



        <div id="responsive-menu">
            <!-- <div class="top-bar-left">
                 <ul class="menu">

                 </ul>
             </div> -->
            <div class="top-bar-right">
                <ul class="dropdown menu" data-dropdown-menu>
                    <li>
                        <?php
//Create a language array (in future it may be a good idea to push it in database)
                        $languages = [
                            [ 'code' => "en_US", 'language' => "usa"],
                            [ 'code' => "fr_FR", 'language' => "france"],
                            [ 'code' => "fr_CA", 'language' => "canada"]
                        ];
                        if ($this->request->session()->check('Config.language')) {
                            $key = array_search($this->request->session()->read('Config.language'), array_column($languages, 'code'));
                        } else {
                            $key = "1";
                        }

// Le tableau de params ['pass'] avec la clé "pass" ne peut pas être présent dans le
// tableau de paramètres pour constuire l'url.
// En revanche on a besoin des valeurs !
//
                        $pass = null;
                        if (array_key_exists('pass', $this->request->params)) {
                            $pass = array_values($this->request->params['pass']);
                        }
                        unset($this->request->params['pass']);

// Paramètres à utiliser pour la construction de la route.
                        $urlParams = array_merge(
                                $this->request->params, $pass, array('?' => ['language' => $languages[$key]['code']])
                        );
                        echo $this->Html->link(
                                $this->Html->image('flag_of_' . $languages[$key]['language'] . '.svg', [
                                    'alt' => 'flag of ' . $languages[$key]['language'],
                                    'class' => 'flag_language text-center'
                                        ]
                                ), $urlParams, ['escape' => false]);
                        ?>
                        <ul class="menu vertical">
                            <?php
                            // Construction des routes pour chaque langue.
                            foreach ($languages as $k):
                                $code = $k['code'];
                                $country = $k['language'];
                                if ($k['code'] !== $languages[$key]['code']) {

                                    // Remplacement de la valeur de la lanqgue dans la query string
                                    $urlParams['?']['language'] = $k['code'];
                                    ?>
                                    <li>

                                        <?php
                                        echo $this->Html->link(
                                                $this->Html->image('flag_of_' . $country . '.svg', [
                                                    'alt' => 'flag of ' . $country,
                                                    'class' => 'flag_language text-center'
                                                        ]
                                                ), $urlParams, ['escape' => false]
                                        );
                                    }
                                    ?>
                                </li>
                                <?php
                            endforeach;
                            unset($key);
                            unset($languages);
                            ?>
                        </ul>
                    </li>


                    <li>
                        <?php echo $this->Html->link('Support us', ['controller' => 'Pages', 'action' => 'display', 'shop']); ?>
                        <ul class="menu vertical">
                            <li> <?php echo $this->Html->link('Shop', ['controller' => 'Pages', 'action' => 'display', 'shop']); ?></li>
                        </ul>
                    </li>
                    <li>
                        <?php //echo $this->Html->link(__('About'), ['controller' => 'Pages', 'action' => 'display', 'about']); ?>
                        <?php echo $this->Html->link('About', ['controller' => 'Pages', 'action' => 'display', 'about_us']); ?>
                        <ul class="menu vertical">
                            <li> <?php echo $this->Html->link('Company', ['controller' => 'Pages', 'action' => 'display', 'about_us', '#' => 'company']); ?></li>
                            <li> <?php echo $this->Html->link('Team', ['controller' => 'Pages', 'action' => 'display', 'about_us', '#' => 'team']); ?></li>
                            <li> <?php echo $this->Html->link('Licences', ['controller' => 'Pages', 'action' => 'display', 'about_us', '#' => 'licences']); ?></li>

                        </ul>
                    </li>

                    <li><a href="#">Contact</a></li>

                    <li><input type="search" placeholder="Search"></li>
                    <li><button type="button" class="button">Search</button></li>
                </ul>
            </div>
        </div>
</nav>
