<?php
/* Smarty version 5.4.2, created on 2024-11-28 11:17:58
  from 'file:patients/create.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_67485166bf6da9_06027140',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '905241169ac90664f19a41370f9f96ac812a2cfb' => 
    array (
      0 => 'patients/create.tpl',
      1 => 1732792676,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67485166bf6da9_06027140 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/project/templates/patients';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_21366106316748516693e725_61642311', "content");
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, 'base.tpl', $_smarty_current_dir);
}
/* {block "content"} */
class Block_21366106316748516693e725_61642311 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/project/templates/patients';
?>

<h1>Create Patient</h1>

<!-- Display Validation Errors -->
<?php if ((null !== ($_smarty_tpl->getValue('errors') ?? null))) {?>
<div class="alert alert-danger">
    <ul>
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('errors'), 'error', false, 'key');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('error')->value) {
$foreach0DoElse = false;
?>
        <li><?php echo $_smarty_tpl->getValue('key');?>
 : <?php echo $_smarty_tpl->getValue('error')[0];?>
</li>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    </ul>
</div>
<?php }?>

<!-- Display Success Message -->
<?php if ((null !== ($_smarty_tpl->getValue('success') ?? null))) {?>
<div class="alert alert-success"><?php echo $_smarty_tpl->getValue('success');?>
</div>
<?php }?>

<div class="container">
<form action="/patients/store" method="POST">
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" class="form-control" value="<?php echo (($tmp = $_smarty_tpl->getValue('old')['name'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" required>
    </div>
    <div class="form-group">
        <label for="phone">Phone</label>
        <input type="text" id="phone" name="phone" class="form-control" value="<?php echo (($tmp = $_smarty_tpl->getValue('old')['phone'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" required>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" class="form-control" value="<?php echo (($tmp = $_smarty_tpl->getValue('old')['email'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
    </div>
    <div class="form-group">
        <label for="address">Address</label>
        <textarea id="address" name="address" class="form-control"><?php echo (($tmp = $_smarty_tpl->getValue('old')['address'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
</textarea>
    </div>
    <button type="submit" class="btn btn-primary mt-3">Create</button>
</form>
</div>
<?php
}
}
/* {/block "content"} */
}
