<?php require dirname(__DIR__).'/header.php';?>
<form class="ml-3 mr-3" action="<?=dirname($_SERVER['SCRIPT_NAME']);?>/article" method="POST">
  <div class="mb-3">
    <label for="name" class="form-label">Article title</label>
    <input type="text" class="form-control" id="name" name="name">
  </div>
  <div class="mb-3">
    <label for="text" class="form-label">Text</label>
    <input type="text" class="form-control" id="text" name="text">
  </div>
  <div class="form-group mb-3">
    <label for="author_id">Автор</label>
    <select class="form-control" id="author_id" name="author_id">
      <option value="1">Администратор</option>
      <option value="2">Пользователь</option>
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Save</button>
</form>
<?php require dirname(__DIR__).'/footer.php';?>