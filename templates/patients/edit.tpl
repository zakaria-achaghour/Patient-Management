{extends file='base.tpl'}

{block name="content"}
<h1>Edit Patient</h1>

<!-- Display Validation Errors -->
{if isset($errors)}
<div class="alert alert-danger">
    <ul>
        {foreach $errors as $key =>  $error}
            <li>{$key } : {$error[0]}</li>
        {/foreach}
    </ul>
</div>
{/if}

<!-- Display Success Message -->
{if isset($success)}
<div class="alert alert-success">{$success}</div>
{/if}

<div class="container">
<form action="/patients/update/{$patient->id}" method="POST">
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" class="form-control" value="{$old.name|default:$patient->name}" required>
    </div>
    <div class="form-group">
        <label for="phone">Phone</label>
        <input type="text" id="phone" name="phone" class="form-control" value="{$old.phone|default:$patient->phone}" required>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" class="form-control" value="{$old.email|default:$patient->email}">
    </div>
    <div class="form-group">
        <label for="address">Address</label>
        <textarea id="address" name="address" class="form-control">{$old.address|default:$patient->address}</textarea>
    </div>
    <button type="submit" class="btn btn-success mt-3">Update</button>
</form>
</div>
{/block}
