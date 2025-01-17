<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>

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
                    ['label' => 'Debug', 'icon' => 'fa fa-dashboard', 'url' => ['/debug']],
                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
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
                    ['label' => 'Dana Infrastruktur', 'icon' => 'fa fa-money', 'url' => '#',
                        'items' => [
                            ['label' => 'Tabel Dana', 'icon' => 'fa fa-file-text-o', 'url' => ['/dana'],],
                            ['label' => 'Buat Dana', 'icon' => 'fa fa-pencil', 'url' => ['/dana/create'],],
                            ],
                            ],
                    ['label' => 'Detail User', 'icon' => 'fa fa-address-card-o', 'url' => '#',
                        'items' => [
                            ['label' => 'Tabel Detail User', 'icon' => 'fa fa-file-text-o', 'url' => ['/detail-user'],],
                            ['label' => 'Buat Detail User', 'icon' => 'fa fa-pencil', 'url' => ['/detail-user/create'],],
                            ],
                            ],
                    ['label' => 'Laporan Aduan', 'icon' => 'fa fa-comments-o', 'url' => ['/laporan-aduan']],
                    ['label' => 'Pembangunan', 'icon' => 'fa fa-building-o', 'url' => '#',
                        'items' => [
                            ['label' => 'Tabel Pembangunan', 'icon' => 'fa fa-file-text-o', 'url' => ['/pembangunan'],],
                            ['label' => 'Buat Pembangunan', 'icon' => 'fa fa-pencil', 'url' => ['/pembangunan/create'],],
                            ],
                            ],
                    ['label' => 'User', 'icon' => 'fa fa-user', 'url' => ['/user']],
                ],
            ]
        ) ?>

    </section>

</aside>
