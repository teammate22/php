<?php

namespace src\Models\Comments;

use src\Models\ActiveRecordEntity;
use src\Models\Users\User; 
use src\Services\Db;

class Comment extends ActiveRecordEntity
{
    protected $authorId;
    protected $articleId;
    protected $text;
    protected $createdAt;

    public function getAuthorId(): ?User 
    {
        return User::getById($this->authorId); 
    }

    public function getArticleId(): int
    {
        return $this->articleId;
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function getCreatedAt(): string
    {
        return $this->createdAt;
    }

    public function setAuthorId(int $authorId): void
    {
        $this->authorId = $authorId;
    }

    public function setArticleId(int $articleId): void
    {
        $this->articleId = $articleId;
    }

    public function setText(string $text): void
    {
        $this->text = $text;
    }
    public function setCreatedAt(string $createdAt):void{
        $this->createdAt = $createdAt;
    }
    

    protected static function getTableName(): string
    {
        return 'comments';
    }

    public static function findByArticleId(int $articleId): array
    {
        $db = Db::getInstance();
        $sql = 'SELECT * FROM ' . static::getTableName() . ' WHERE article_id = :article_id ORDER BY created_at DESC';
        $result = $db->query($sql, [':article_id' => $articleId], static::class);

        return $result;
    }
}