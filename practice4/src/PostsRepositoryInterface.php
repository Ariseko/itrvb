<?php
use my\Article;

interface ArticleRepositoryInterface
{
    public function get(string $uuid): Article;
    public function save(Article $post): void;
}

