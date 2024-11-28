<?php
/* Smarty version 5.4.2, created on 2024-11-28 09:36:29
  from 'file:partials/sidebar.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_6748399d3d3777_80304338',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '71114918d4de3e24cc2954b792c0db31a5866fd6' => 
    array (
      0 => 'partials/sidebar.tpl',
      1 => 1732786581,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6748399d3d3777_80304338 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/project/templates/partials';
?><aside class="main-sidebar  elevation-4" style="background-color: #006d77;">
    <a href="/dashboard" class="brand-link">
        <span class="brand-text font-weight-light">MediCore Hospital</span>
    </a>

    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" role="menu">
                <li class="nav-item">
                    <a href="/" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/patients" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Patient Details</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/doctors" class="nav-link">
                        <i class="nav-icon fas fa-user-md"></i>
                        <p>Doctor Details</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
<?php }
}
