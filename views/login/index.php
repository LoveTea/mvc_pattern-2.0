<main>
<div class="registration">
    <form action="index" method="POST">
        <div class="form-group">
            <label for="exampleInputEmail1">Логин</label>
            <input type="text" class="form-control" name="login" placeholder="Логин">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Пароль</label>
            <input type="password" class="form-control" name="password" placeholder="Пароль">
        </div>
        <button type="submit" name="ok" class="btn btn-primary">Войти</button>
        <?php if($arg['status'] == "error") echo "<div class='alert alert-danger' role='alert'>Неверный пароль</div>"; ?>
</form>
</div>

</main>
