{extends 'layout.tpl'}
{block name="content"}
<table class="table table-dark">
{foreach $posts as $post}
    <tr>
        <td>{$post.title}</td>
        <td>{$post.created_at}</td>
        <td>
            <a href="/admin/editpost/{$post.id}" class="btn btn-warning">Edit</a>
            <a href="/admin/deletepost/{$post.id}" class="btn btn-danger">Delete</a>
        </td>
    </tr>
{/foreach}
</table>
{/block}