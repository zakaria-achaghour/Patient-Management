{extends file='base.tpl'}

{block name="content"}
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
                {foreach from=$patients item=patient}
                <tr>
                    <td>{$patient.name}</td>
                    <td>{$patient.phone}</td>
                    <td>{$patient.date|date_format:"%d/%m/%Y %H:%M"}</td>
                    <td>{$patient.doctor}</td>
                    <td>{$patient.department}</td>
                </tr>
                {/foreach}
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
            <h3>{$totalAppointments|default:0}</h3>
            <p>Total Appointments</p>
            </div>
            </div>
    </div>
    <div class="col-lg-6 col-md-6 mb-3">
        <div class="card shadow-sm text-white bg-success">
            <div class="card-body text-center">
        <h3>{$totalPatients|default:0}</h3>
        <p>Total Patients</p>
        </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 mb-3">
        <div class="card shadow-sm text-white bg-warning">
            <div class="card-body text-center">
        <h3>{$totalCancellations|default:0}</h3>
        <p>Total Cancellation</p>
        </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 mb-3">
        <div class="card shadow-sm text-white bg-danger">
            <div class="card-body text-center">
        <h3>{$averagePerDoctor|default:0}</h3>
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
   {foreach from=$doctors item=doctor}
       <div class="col-6 col-md-4">
            <div class="doctor-card">
            <img src="{$doctor.image}"  class="img-fluid rounded-circle"alt="Doctor Image" >
            <p>{$doctor.name}</p>
            </div>
       </div>
   {/foreach}
   </div>
   </div>
</div>
</div>
</div>

</section>



</div>




 



</div>

{/block}
