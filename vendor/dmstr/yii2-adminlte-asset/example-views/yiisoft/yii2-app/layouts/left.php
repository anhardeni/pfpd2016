<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user1-128x128.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <?= Yii::$app->user->identity->username ?>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu'],
                'items' => [
                    ['label' => 'Menu Yii2', 'options' => ['class' => 'header']],
                    ['label' => 'Gii', 'icon' => 'fa fa-file-code-o', 'url' => ['/gii']],
                    ['label' => 'Terima', 'icon' => 'fa fa-dashboard', 'url' => ['/ttpermohonan']],
                    ['label' => 'Proses', 'icon' => 'fa fa-dashboard', 'url' => ['/datakeberatan2016']],
                    ['label' => 'Entry', 'icon' => 'fa fa-dashboard', 'url' => ['/dataentry']],
                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                    
                                    [
                                        'label' => 'Cek COO',
                                        'icon' => 'fa fa-circle-o',
                                        'url' => '#',
                                        'items' => [
                                            ['label' => 'FORM E China ', 'icon' => 'fa fa-circle-o', 'url' => 'http://www.chinaorigin.gov.cn', 'linkOptions' => ['target' => '_blank'],],
                                            ['label' => 'FORM AK Korea', 'icon' => 'fa fa-circle-o', 'url' => '#',],
                                        ],
                                    ],
                                    [
                                           'label' => 'Schedule An Appointment', 
                                           'url' => 'http://www.chinaorigin.gov.cn',
                                           'linkOptions' => ['target' => '_blank']        
                                        ],

                                    [
                                        'label' => 'Website Cek harga ',
                                        'icon' => 'fa fa-circle-o',
                                        'url' => '#',
                                        'items' => [
                                            ['label' => 'ALKES ', 'icon' => 'fa fa-circle-o', 'url' => 'http://e-katalog.lkpp.go.id', ],
                                            ['label' => 'komputer', 'icon' => 'fa fa-circle-o', 'url' => '#',],
                                        ],
                                    ],

                    [
                        'label' => 'Same tools',
                        'icon' => 'fa fa-share',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Gii', 'icon' => 'fa fa-file-code-o', 'url' => ['/gii'],],
                            ['label' => 'Debug', 'icon' => 'fa fa-dashboard', 'url' => ['/debug'],],
                            [
                                'label' => 'Level One',
                                'icon' => 'fa fa-circle-o',
                                'url' => '#',
                                'items' => [
                                    ['label' => 'Level Two', 'icon' => 'fa fa-circle-o', 'url' => '#',],
                                    [
                                        'label' => 'Level Two',
                                        'icon' => 'fa fa-circle-o',
                                        'url' => '#',
                                        'items' => [
                                            ['label' => 'Level Three', 'icon' => 'fa fa-circle-o', 'url' => '#',],
                                            ['label' => 'Level Three', 'icon' => 'fa fa-circle-o', 'url' => '#',],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ]
        ) ?>

    </section>

</aside>
