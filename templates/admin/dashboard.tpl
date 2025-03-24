{extends 'layout.tpl'}

{block name="content"}
{if isset($user_is_admin) && $user_is_admin == 1}
    <h1>Admin Dashboard</h1>
    <p>Üdvözlünk, {$_SESSION.user_id}!</p>

    <h2>Felhasználók kezelése</h2>
    <ul>
        <li><a href="/admin/users">Felhasználók listája</a></li>
        <li><a href="/admin/createuser">Új felhasználó hozzáadása</a></li>
    </ul>

    <h2>Blog posztok kezelése</h2>
    <ul>
        <li><a href="/admin/posts">Blog posztok listája</a></li>
        <li><a href="/admin/posts_create">Új poszt hozzáadása</a></li>
    </ul>

    <a href="/login/logout" class="btn btn-danger">Kijelentkezés</a>
{/if}
{/block}