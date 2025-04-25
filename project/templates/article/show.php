<?php require dirname(__DIR__).'/header.php';?>

<div class="card" style="width: 100%;">
  <div class="card-body">
    <h5 class="card-title"><?=$article->getName();?></h5>

    <!-- Получаем никнейм автора из объекта $author, который был передан в шаблон -->
    <h6 class="card-subtitle mb-2 text-muted"><?=$author ? $author->getNickName() : 'Unknown';?></h6>

    <p class="card-text"><?=$article->getText();?></p>

    <a href="<?=dirname($_SERVER['SCRIPT_NAME']);?>/article/<?=$article->getId();?>/edit" class="btn btn-primary">Article update</a>
    <form action="<?= rtrim(dirname($_SERVER['SCRIPT_NAME']), '/'); ?>/article/<?= $article->getId(); ?>/delete" method="post" style="display:inline;" onsubmit="return confirm('Вы уверены, что хотите удалить эту статью?');">
    <button type="submit" class="btn btn-warning">Delete Article</button></form>
  </div>
</div>

<!-- Форма добавления комментария -->
<div class="card" style="width: 100%;">
    <div class="card-body">
        <h5 class="card-title">Add a Comment</h5>
        <form action="<?=dirname($_SERVER['SCRIPT_NAME']);?>/article/<?=$article->getId();?>/comments" method="post">
            <div class="form-group">
                <label for="comment_text">Comment:</label>
                <textarea class="form-control" id="comment_text" name="comment_text" rows="3"></textarea>
            </div>
            <input type="hidden" name="author_id" value="1">
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

<!-- Отображение существующих комментариев -->
<?php if (!empty($comments)): ?>
    <div class="card" style="width: 100%;">
        <div class="card-body">
            <h5 class="card-title">Comments</h5>
            <?php foreach ($comments as $comment): ?>
                <div class="card" id="comment-<?=$comment->getId();?>">
                    <div class="card-body">
                        <!-- Получаем никнейм автора комментария -->
                        <?php $author = $article->getAuthor(); ?>
                        <h6 class="card-subtitle mb-2 text-muted">
                        <?=$author ? $author->getNickName() : 'Unknown';?></h6>
                        <p class="card-text"><?=$comment->getText();?></p>
                        <p class="card-text"><small class="text-muted"><?=$comment->getCreatedAt();?></small></p>
                        <a href="<?=dirname($_SERVER['SCRIPT_NAME']);?>/comment/<?=$comment->getId();?>/edit" class="btn btn-sm btn-secondary">Edit</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
<?php endif; ?>

<?php require dirname(__DIR__).'/footer.php';?>
