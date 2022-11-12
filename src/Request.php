<?php

declare(strict_types=1);

class Request
{
    private array $post;
    private array $get;

    public function __construct(array $get, array $post)
    {
        $this->get = $get;
        $this->post = $post;
    }
    public function getParam(string $name)
    {
        return $this->get[$name] ?? null;
    }
}