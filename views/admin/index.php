<?php
session_start();
 
if(!$_SESSION['login']){
    header("Location: /");
    exit;
}
?>
<main>
    <div class="admin-panel">
        <a href="/admin/addnews">Добавить новость</a>
        <a href="/admin/deletenews">Удалить новость</a>
        <a href="/admin/updatenews">Обновить новость</a>
    </div>

</main>