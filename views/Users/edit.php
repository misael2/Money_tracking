<!-- Vista para editar-->
<form action="<?php echo APP_URL; ?>users/edit" method="POST">
    <input type="hidden" name="id" value="<?php echo $user["id"]; ?>">
    <p>
        <label for="username">Username:</label>
        <input type="text" name="username" value="<?php echo $user["username"]; ?>">
    </p>
    <p>
        <label for="new_password">Password</label>
        <input type="password" name="new_password">
    </p>
    <p>
        <label for="rol">ROL:</label>
        <input type="text" name="rol" value="<?php echo $user["rol"]; ?>">
    </p>
    <p>
        <input type="submit" value="update">
    </p>
</form>
