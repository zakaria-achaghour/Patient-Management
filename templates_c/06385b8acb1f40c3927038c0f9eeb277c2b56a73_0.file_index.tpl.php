<?php
/* Smarty version 5.4.2, created on 2024-11-28 11:26:45
  from 'file:patients/index.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_674853753e1790_67826381',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '06385b8acb1f40c3927038c0f9eeb277c2b56a73' => 
    array (
      0 => 'patients/index.tpl',
      1 => 1732793202,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_674853753e1790_67826381 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/project/templates/patients';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_193827177667485375127bf4_48204077', "content");
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, 'base.tpl', $_smarty_current_dir);
}
/* {block "content"} */
class Block_193827177667485375127bf4_48204077 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/project/templates/patients';
?>

<h1 class="mb-4">Patients</h1>
<?php if ((null !== ($_smarty_tpl->getValue('success') ?? null))) {?>
    <div class="alert alert-success">
        <?php echo $_smarty_tpl->getValue('success');?>

</div>
<?php }
if ((null !== ($_smarty_tpl->getValue('errors') ?? null))) {?>
    <div class="alert alert-danger">
        <ul>
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('errors'), 'error');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('error')->value) {
$foreach0DoElse = false;
?>
            <li><?php echo $_smarty_tpl->getValue('error');?>
</li>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </ul>
    </div>
    <?php }?>

<?php if ((null !== ($_smarty_tpl->getValue('flash_success') ?? null))) {?>
    <div class="alert alert-success">
        <?php echo $_smarty_tpl->getValue('flash_success');?>

    </div>
    <?php }?>

    
<a href="/patients/create" class="btn btn-primary mb-3">Add New Patient</a>

<table id="example1" class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Address</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('patients'), 'patient');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('patient')->value) {
$foreach1DoElse = false;
?>
        <tr>
            <td><?php echo $_smarty_tpl->getValue('patient')->id;?>
</td>
            <td><?php echo $_smarty_tpl->getValue('patient')->name;?>
</td>
            <td><?php echo $_smarty_tpl->getValue('patient')->phone;?>
</td>
            <td><?php echo $_smarty_tpl->getValue('patient')->email;?>
</td>
            <td><?php echo $_smarty_tpl->getValue('patient')->address;?>
</td>
            <td>
                <a href="/patients/edit/<?php echo $_smarty_tpl->getValue('patient')->id;?>
" class="btn btn-warning btn-sm">Edit</a>
                <form action="/patients/delete/<?php echo $_smarty_tpl->getValue('patient')->id;?>
" method="POST" class="d-inline">
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </form>
            </td>
        </tr>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    </tbody>
</table>
<?php
}
}
/* {/block "content"} */
}
