<?php
namespace Src\Article\ValueObjects;

class PostValueObjects
{
    public function __construct(
        public string $title,
        public string $body,
        //public int $user_id,
    )
    {
    }

    public function toArray(): array
    {
        return [
            'title' => $this->title,
            'body' => $this->body,
            //'user_id' => $this->user_id,
        ];
    }

}

