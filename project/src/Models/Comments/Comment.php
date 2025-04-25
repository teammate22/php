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

    public function getAuthorId(): int
    {
        return $this->authorId;
    }
    
    public function getAuthor(): ?\src\Models\Users\User
    {
        return \src\Models\Users\User::getById($this->authorId);
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
    
    protected function getFields(): array
    {
        return [
            'author_id' => $this->authorId,
            'article_id' => $this->articleId,
            'text' => $this->text,
            'created_at' => $this->createdAt,
        ];
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