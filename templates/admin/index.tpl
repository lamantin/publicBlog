{extends file="layout.tpl"}

{block name="content"}
    <h1>Admin Dashboard</h1>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            {foreach $users as $user}
                <tr>
                    <td>{$user.id}</td>
                    <td>{$user.email}</td>
                    <td>
                        <a href="/admin/user/{$user.id}/edit" class="btn 
btn-warning">Edit</a>
                        <a href="/admin/user/{$user.id}/delete" class="btn 
btn-danger">Delete</a>
                    </td>
                </tr>
            {/foreach}
        </tbody>
    </table>
{/block}

