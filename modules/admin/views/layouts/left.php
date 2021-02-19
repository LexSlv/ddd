<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<aside class="main-sidebar">
    <section class="sidebar">
        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    //['label' => 'Menu:', 'options' => ['class' => 'header']],
                    ['label' => 'Meta', 'icon' => 'fas fa-newspaper', 'url' => ['/admin/meta']],
                    ['label' => 'Menu', 'icon' => 'fas fa-feather', 'url' => ['/admin/menu']],
                    ['label' => 'Pages', 'icon' => 'fas fa-address-card', 'url' => ['/admin/pages']],
                    ['label' => 'Blocks', 'icon' => 'fas fa-address-card', 'url' => ['/admin/blocks']],
                    ['label' => 'Events', 'icon' => 'fas fa-address-card', 'url' => ['/admin/events']],
                    ['label' => 'Fellows', 'icon' => 'fas fa-address-card', 'url' => ['/admin/fellows']],
                    ['label' => 'Slider-1', 'icon' => 'fas fa-address-card', 'url' => ['/admin/slider1']],
                    ['label' => 'Slider-2', 'icon' => 'fas fa-address-card', 'url' => ['/admin/slider2']],
                    ['label' => 'Sign up', 'icon' => 'fas fa-address-card', 'url' => ['/admin/signup']],
                    /*
                    ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii']],
                    ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug']],
                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                    [
                        'label' => 'Some tools',
                        'icon' => 'share',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii'],],
                            ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug'],],
                            [
                                'label' => 'Level One',
                                'icon' => 'circle-o',
                                'url' => '#',
                                'items' => [
                                    ['label' => 'Level Two', 'icon' => 'circle-o', 'url' => '#',],
                                    [
                                        'label' => 'Level Two',
                                        'icon' => 'circle-o',
                                        'url' => '#',
                                        'items' => [
                                            ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
                                            ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],*/
                ],
            ]
        ) ?>

    </section>

</aside>
