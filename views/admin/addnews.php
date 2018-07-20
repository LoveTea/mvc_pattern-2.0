<main>
<form action="addnews" method="POST">
  <div class="form-group">
    <label>Заголовок</label>
    <input type="text" name="title" class="form-control" >
  </div>
  <div class="form-group">
    <label>Анонс</label>
    <textarea class="form-control" name="announce" rows="3"></textarea>
  </div>
  <div class="form-group">
    <label>Текст</label>
    <textarea class="form-control" name="text" rows="3"></textarea>
  </div>
  <button type="submit" name="ok" class="btn btn-primary">Добавить</button>
</form>
</main>