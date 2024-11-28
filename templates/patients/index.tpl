{extends file='base.tpl'}

{block name="content"}
<h1 class="mb-4">Patients</h1>
{if isset($success)}
    <div class="alert alert-success">
        {$success}
</div>
{/if}
{if isset($errors)}
    <div class="alert alert-danger">
        <ul>
            {foreach $errors as $error}
            <li>{$error}</li>
            {/foreach}
        </ul>
    </div>
    {/if}

{if isset($flash_success)}
    <div class="alert alert-success">
        {$flash_success}
    </div>
    {/if}

    
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
        {foreach $patients as $patient}
        <tr>
            <td>{$patient->id}</td>
            <td>{$patient->name}</td>
            <td>{$patient->phone}</td>
            <td>{$patient->email}</td>
            <td>{$patient->address}</td>
            <td>
                <a href="/patients/edit/{$patient->id}" class="btn btn-warning btn-sm">Edit</a>
                <form action="/patients/delete/{$patient->id}" method="POST" class="d-inline">
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </form>
            </td>
        </tr>
        {/foreach}
    </tbody>
</table>
{/block}
