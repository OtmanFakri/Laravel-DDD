<?php
namespace Src\Article\ValueObjects;

class UpdateValueObjects
{
    public function __construct(
        public ?string $title = null,
        public ?string $body = null
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
    public function applyUpdate(array $oldValues): array
    {
        return [
            'title' => $this->title ?? $oldValues['title'],
            'body' => $this->body ?? $oldValues['body'],
            //'user_id' => $this->user_id ?? $oldValues['user_id'],
        ];
    }
}

