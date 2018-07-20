<main>
<form action="updatenews" method="POST" class="form-find-news">
<div class="form-group">
    <label>Введите id новости</label>
    <input type="text" class="form-control" name="id">
  </div>
  <button type="submit"  name="find" class="btn btn-primary">Найти</button>
  </form>
  <form action="updatenews" method="POST">
  <div class="form-group">
    <label>id</label>
    <input type="text" required readonly value="<?=$arg['id'];?>" name="id" class="form-control">
    <label>Заголовок</label>
    <input type="text" required value="<?=$arg['title'];?>"  name="title" class="form-control" >
  </div>
  <div class="form-group">
    <label>Анонс</label>
    <textarea class="form-control" required  name="announce" rows="3"><?=$arg['announce'];?></textarea>
  </div>
  <div class="form-group">
    <label>Текст</label>
    <textarea class="form-control" required name="text" rows="10"><?=$arg['text'];?></textarea>
  </div>
  <button type="submit" name="ok" class="btn btn-primary">Обновить</button>
</form>
</main>