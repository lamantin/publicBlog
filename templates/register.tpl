{extends file="layout.tpl"}

{block name="content"}
<h2>Regisztráció</h2>

{if isset($error)}
    <div style="color: red;">{$error}</div>
{/if}

<form action="/login/register" method="POST">
    <input type="hidden" name="csrf_token" value="{$csrf_token}">
    <div>
        <label class="form-label" for="email">E-mail cím:</label><br>
        <input class="form-control" type="email" id="email" name="email" required>
    </div>

    <div>
        <label class="form-label" for="password">Jelszó:</label><br>
        <input class="form-control" type="password" id="password" name="password" required>
    </div>

    <div>
        <label class="form-label" for="confirm_password">Jelszó megerősítése:</label><br>
        <input class="form-control" type="password" id="confirm_password" name="confirm_password" required>
    </div>

    <button type="submit">Regisztrálok</button>
</form>

<a href="/login">Már van fiókod? Jelentkezz be!</a>
{/block}