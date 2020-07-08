<?php

namespace App\Repositories;

use App\Post;

abstract class AbstractRepository implements PostRepositoryInterface
{
    /** @var array  */
    protected $data = [];

    public function __construct()
    {
        $this->refresh();
    }

    /** Retrieve all Posts
     * @return array
     */
    public function all(): array
    {
        return Post::all()->toArray();
    }

    /** Retrieve a one Post with the given id
     * @param int $id
     * @return array
     */
    public function one(int $id): array
    {
        $post = [];
        $post = Post::with('author')->find($id);
        return $post ? $post->toArray() : $post;
    }

    abstract protected function refresh(): void;
}
