
{extends 'layout.tpl'}
{block name="content"}
<table class="table table-dark">
{foreach $users as $user}
    <tr>
        <td>{$user.id}</td>
        <td>{$user.email}</td>
        <td>
            <a href="/admin/edituser/{$user.id}" class="btn btn-warning">Edit</a>
            <a href="/admin/deleteuser/{$user.id}" class="btn btn-danger">Delete</a>
        </td>
    </tr>
{/foreach}
</table>
{/block}