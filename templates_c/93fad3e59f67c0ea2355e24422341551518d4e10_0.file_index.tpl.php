<?php
/* Smarty version 5.4.2, created on 2024-11-28 11:24:28
  from 'file:index.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_674852ec058585_62893704',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '93fad3e59f67c0ea2355e24422341551518d4e10' => 
    array (
      0 => 'index.tpl',
      1 => 1732793061,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_674852ec058585_62893704 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/project/templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_155801410674852ebd7d651_90571277', "content");
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, 'base.tpl', $_smarty_current_dir);
}
/* {block "content"} */
class Block_155801410674852ebd7d651_90571277 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/project/templates';
?>

<div class="container-fluid">

<div class="row mb-4">
<section class="col-lg-7">
<div class="row mb-4">
<div class="col">
    <div class="card">
        <div class="card-header bg-light">
            <h5 class="mb-0">Patient Details</h5>
        </div>
        <div class="card-body p-0">
            <table id="example2" class="table table-bordered table-striped">
                <thead class="bg-teal text-white">
                <tr>
                    <th>Name</th>
                    <th>MOB</th>
                    <th>Date</th>
                    <th>Doctor</th>
                    <th>Department</th>
                </tr>
            </thead>
            <tbody>
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('patients'), 'patient');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('patient')->value) {
$foreach0DoElse = false;
?>
                <tr>
                    <td><?php echo $_smarty_tpl->getValue('patient')['name'];?>
</td>
                    <td><?php echo $_smarty_tpl->getValue('patient')['phone'];?>
</td>
                    <td><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('patient')['date'],"%d/%m/%Y %H:%M");?>
</td>
                    <td><?php echo $_smarty_tpl->getValue('patient')['doctor'];?>
</td>
                    <td><?php echo $_smarty_tpl->getValue('patient')['department'];?>
</td>
                </tr>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </tbody>
        </table>
        </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-md-4  mb-3">
        <a href="/admit-patient" class="btn btn-primary btn-block">Admit New Patient</a>
    </div>
    <div class="col-md-4  mb-3">
        <a href="/emergency-room" class="btn btn-danger btn-block">Emergency Room</a>
    </div>
    <div class="col-md-4  mb-3">
        <a href="/pharmacy-details" class="btn btn-info btn-block">Pharmacy Details</a>
    </div>
</div>
</section>

<section class="col-lg-5">


<div class="row">
    <div class="col-md-6 col-lg-6 mb-3">
        <div class="card shadow-sm text-white bg-teal">
        <div class="card-body text-center">
            <h3><?php echo (($tmp = $_smarty_tpl->getValue('totalAppointments') ?? null)===null||$tmp==='' ? 0 ?? null : $tmp);?>
</h3>
            <p>Total Appointments</p>
            </div>
            </div>
    </div>
    <div class="col-lg-6 col-md-6 mb-3">
        <div class="card shadow-sm text-white bg-success">
            <div class="card-body text-center">
        <h3><?php echo (($tmp = $_smarty_tpl->getValue('totalPatients') ?? null)===null||$tmp==='' ? 0 ?? null : $tmp);?>
</h3>
        <p>Total Patients</p>
        </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 mb-3">
        <div class="card shadow-sm text-white bg-warning">
            <div class="card-body text-center">
        <h3><?php echo (($tmp = $_smarty_tpl->getValue('totalCancellations') ?? null)===null||$tmp==='' ? 0 ?? null : $tmp);?>
</h3>
        <p>Total Cancellation</p>
        </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 mb-3">
        <div class="card shadow-sm text-white bg-danger">
            <div class="card-body text-center">
        <h3><?php echo (($tmp = $_smarty_tpl->getValue('averagePerDoctor') ?? null)===null||$tmp==='' ? 0 ?? null : $tmp);?>
</h3>
        <p>Total Avg per Doctor</p>
    </div>
    </div>
</div>
</div>

<!-- Available Doctors Section -->
<div class="row mb-4">
<div class="col">
    <div class="card">
        <div class="card-header bg-light">
            <h5 class="mb-0">Available Doctors</h5>
        </div>
        <div class="card-body text-center">
            <div class="row">
   <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('doctors'), 'doctor');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('doctor')->value) {
$foreach1DoElse = false;
?>
       <div class="col-6 col-md-4">
            <div class="doctor-card">
            <img src="<?php echo $_smarty_tpl->getValue('doctor')['image'];?>
"  class="img-fluid rounded-circle"alt="Doctor Image" >
            <p><?php echo $_smarty_tpl->getValue('doctor')['name'];?>
</p>
            </div>
       </div>
   <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
   </div>
   </div>
</div>
</div>
</div>

</section>



</div>




 



</div>

<?php
}
}
/* {/block "content"} */
}
