<?php

$id_user = $this->session->userdata('id_user');
$role = $this->session->userdata('role');

?>

<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">HEADER</li>

            <li class="<?php if ($this->uri->segment(2) == "dashboard") {
                            echo "active";
                        }
                        ?>"><a href="<?php echo base_url('admin/dashboard')
                                        ?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>


            <li class="treeview <?php if ($this->uri->segment(2) == "profil") {
                                    echo "active";
                                } ?>">
                <a href="#"><i class="fa fa-building"></i> <span>Profil</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="<?php if ($this->uri->segment(2) == "profil") {
                                    echo "active";
                                } ?>"><a href="<?= base_url('admin/profil') ?>">Profil</a></li>

                    <li class="<?php if ($this->uri->segment(3) == "profil") {
                                    echo "active";
                                } ?>"><a href="<?= base_url('admin/profil/visimisi') ?>">Visi & Misi</a></li>
                    <li class="<?php if ($this->uri->segment(3) == "Sejarah") {
                                    echo "active";
                                } ?>"><a href="<?= base_url('admin/profil/sejarah') ?>">Sejarah</a></li>
                </ul>
            </li>

            <li class="<?php if ($this->uri->segment(2) == "dashboard") {
                            echo "active";
                        }
                        ?>"><a href="<?php echo base_url('admin/dashboard')
                                        ?>"><i class="fa fa-graduation-cap"></i> <span>Alumni</span></a></li>

            <li class="<?php if ($this->uri->segment(2) == "Lowongan") {
                            echo "active";
                        }
                        ?>"><a href="<?php echo base_url('admin/lowongan')
                                        ?>"><i class="fa fa-cubes"></i> <span>Lowongan Kerja</span></a></li>

            <li class="<?php if ($this->uri->segment(2) == "galeri") {
                            echo "active";
                        }
                        ?>"><a href="<?php echo base_url('admin/galeri')
                                        ?>"><i class="fa fa-photo"></i> <span>Galeri</span></a></li>



            <li class="treeview <?php if ($this->uri->segment(2) == "berita") {
                                    echo "active";
                                } ?>">
                <a href="#"><i class="fa fa-object-group"></i> <span>Berita</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="<?php if ($this->uri->segment(3) == "pernikahan") {
                                    echo "active";
                                } ?>"><a href="<?= base_url('admin/berita/add') ?>">Tambah Berita</a></li>
                    <li class="<?php if ($this->uri->segment(2) == "jadwal") {
                                    echo "active";
                                } ?>"><a href="<?= base_url('admin/berita') ?>">List Berita</a></li>
                </ul>
            </li>



            <li class="treeview <?php if ($this->uri->segment(2) == "user") {
                                    echo "active";
                                } ?>">
                <a href="#"><i class="fa fa-user"></i> <span>Manajemen User</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="<?php if ($this->uri->segment(2) == "user") {
                                    echo "active";
                                } ?>"><a href="<?= base_url('admin/user') ?>">List User</a></li>
                </ul>
            </li>

            <li class="treeview <?php if ($this->uri->segment(2) == "konfigurasi") {
                                    echo "active";
                                } ?>">
                <a href="#"><i class="fa fa-cogs"></i> <span>Konfigurasi</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="<?php if ($this->uri->segment(3) == "index") {
                                    echo "active";
                                } ?>"><a href="<?= base_url('admin/konfigurasi/index') ?>">General</a></li>


                    <li class="<?php if ($this->uri->segment(3) == "banner") {
                                    echo "active";
                                } ?>"><a href="<?= base_url('admin/konfigurasi/banner') ?>">Banner</a></li>
                </ul>
            </li>




        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Main content -->
    <section class="content container-fluid">