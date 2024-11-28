<?php
/* Smarty version 5.4.2, created on 2024-11-28 09:00:25
  from 'file:partials/navbar.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_67483129dc2f91_42704263',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b1ee85a52398370efc2d63e3d97e2489e614f94' => 
    array (
      0 => 'partials/navbar.tpl',
      1 => 1732784311,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67483129dc2f91_42704263 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/project/templates/partials';
?><!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="/dashboard" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="/contact" class="nav-link">Contact</a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-bell"></i>
                <span class="badge badge-warning navbar-badge">15</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <span class="dropdown-header">15 Notifications</span>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-envelope mr-2"></i> 4 new messages
                    <span class="float-right text-muted text-sm">3 mins</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
            </div>
        </li>
        <!-- User Account -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="fas fa-user"></i>
                <span class="d-none d-sm-inline-block">User</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <a href="/profile" class="dropdown-item">Profile</a>
                <div class="dropdown-divider"></div>
                <a href="/logout" class="dropdown-item">Logout</a>
            </div>
        </li>
    </ul>
</nav>
<?php }
}
