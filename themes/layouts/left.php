<?php
use app\models\User;
?>

<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <?php if (User::isAdmin()): ?>
             <?= User::getFotoAdmin(['class' => 'user-image']); ?>
         <?php endif ?>
         <?php if (User::isTK()): ?>
             <?= User::getFotoTK(['class' => 'user-image']); ?>
         <?php endif ?>
         <?php if (User::isSD()): ?>
             <?= User::getFotoSD(['class' => 'user-image']); ?>
         <?php endif ?>
         <?php if (User::isSMP()): ?>
             <?= User::getFotoSMP(['class' => 'user-image']); ?>
         <?php endif ?>
            </div>
            <div class="pull-left info">
                <p><?= Yii::$app->user->identity->username ?></p>

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

        <?php if (User::isAdmin()){ ?>

            <?= dmstr\widgets\Menu::widget(
                [
                    'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                    'items' => [
                        ['label' => 'Menu Admin', 'options' => ['class' => 'header']],
                        ['label' => 'Dashboard', 'icon' => 'dashboard', 'url' => ['site/dashboard']],
                        ['label' => 'Data TK', 'icon' => 'home', 'url' => ['form-tk/index']],
                        ['label' => 'Data SD', 'icon' => 'book', 'url' => ['form-sd/index']],
                        ['label' => 'Data SMP', 'icon' => 'university', 'url' => ['form-smp/index']],
                        
                        [
                            'label' => 'Data Pengguna',
                            'icon' => 'users',
                            'url' => '#',
                            'items' => [
                                ['label' => 'TK', 'icon' => 'user-o text-aqua', 'url' => ['tk/index']],
                                ['label' => 'SD', 'icon' => 'user-o text-blue', 'url' => ['sd/index']],
                                ['label' => 'SMP', 'icon' => 'user-o text-green', 'url' => ['smp/index']],
                            ],
                        ],

                        [
                            'label' => 'Akun',
                            'icon' => 'user',
                            'url' => '#',
                            'items' => [
                                ['label' => 'Tambah Akun', 'icon' => 'user-o text-yellow', 'url' => ['site/akun']],
                            ],
                        ],

                        [
                            'label' => 'Data Master',
                            'icon' => 'database',
                            'url' => '#',
                            'items' => [
                                ['label' => 'Tahun Pelajaran', 'icon' => 'circle-o', 'url' => ['tahun/index']],
                                ['label' => 'Jenis Kelamin', 'icon' => 'circle-o', 'url' => ['jk/index']],
                                ['label' => 'Agama', 'icon' => 'circle-o', 'url' => ['agama/index']],
                                ['label' => 'khusus', 'icon' => 'circle-o', 'url' => ['khusus/index']],
                                ['label' => 'Jenis Tinggal', 'icon' => 'circle-o', 'url' => ['jenis-tinggal/index']],
                                ['label' => 'Transport', 'icon' => 'circle-o', 'url' => ['transport/index']],
                                ['label' => 'Pendidikan', 'icon' => 'circle-o', 'url' => ['pendidikan/index']],
                                ['label' => 'Pekerjaan', 'icon' => 'circle-o', 'url' => ['pekerjaan/index']],
                                ['label' => 'Penghasilan', 'icon' => 'circle-o', 'url' => ['penghasilan/index']],
                            ],
                        ],
                    ],
                ]
            ) ?>


        <?php } elseif(User::isTK()) { ?>

            <?= dmstr\widgets\Menu::widget(
                [
                    'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                    'items' => [
                        ['label' => 'Menu Admin', 'options' => ['class' => 'header']],
                        ['label' => 'Dashboard', 'icon' => 'dashboard', 'url' => ['site/dashboard']],
                        ['label' => 'Data TK', 'icon' => 'database', 'url' => ['form-tk/index']],
                    ],
                ]
            ) ?>

        <?php } elseif(User::isSD()) { ?>

            <?= dmstr\widgets\Menu::widget(
                [
                    'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                    'items' => [
                        ['label' => 'Menu Admin', 'options' => ['class' => 'header']],
                        ['label' => 'Dashboard', 'icon' => 'dashboard', 'url' => ['site/dashboard']],
                        ['label' => 'Data SD', 'icon' => 'database', 'url' => ['form-sd/index']],
                        
                    ],
                ]
            ) ?>


        <?php } elseif(User::isSMP()) { ?>

            <?= dmstr\widgets\Menu::widget(
                [
                    'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                    'items' => [
                        ['label' => 'Menu Admin', 'options' => ['class' => 'header']],
                        ['label' => 'Dashboard', 'icon' => 'dashboard', 'url' => ['site/dashboard']],
                        ['label' => 'Data SMP', 'icon' => 'database', 'url' => ['form-smp/index']],
                    ],
                ]
            ) ?>

        <?php } ?>

    </section>

</aside>
