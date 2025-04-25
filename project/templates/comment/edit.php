<?php require dirname(__DIR__).'/header.php'; ?>

<h1 class="ml-3">Редактирование комментария</h1>

<form class="ml-3" action="/php/project/www/comment/<?= $comment->getId(); ?>/update" method="POST">
    <div class="form-group">
        <label for="comment-text" class="mb-3">Текст комментария</label>
        <textarea id="comment-text" name="text" class="form-control mb-3" rows="5"><?= htmlspecialchars($comment->getText()); ?></textarea>
    </div>
    
    <button type="submit" class="btn btn-primary">Сохранить изменения</button>

</form>

<form class="ml-3 mt-3" action="/php/project/www/comment/<?= $comment->getId(); ?>/delete" method="POST" onsubmit="return confirm('Вы уверены, что хотите удалить этот комментарий?');">
    <button type="submit" class="btn btn-danger">Удалить комментарий</button>
</form>

<?php require dirname(__DIR__).'/footer.php'; ?>
