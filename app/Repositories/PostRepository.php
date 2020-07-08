<?php

namespace App\Repositories;

use App\Post;
use Illuminate\Support\Facades\Cache;

class PostRepository extends AbstractRepository
{

    /** Retrieve all Posts
     * @return array
     */
    public function all(): array
    {
        return $this->data;
    }

    /** Retrieve a one Post with the given id
     * @param int $id
     * @return array
     */
    public function one(int $id): array
    {
        return $this->find($id);
    }

    /**
     *
     */
    protected function refresh(): void
    {
        $key = env('CACHE_TTL', 600);
        $this->data = Cache::remember('posts', $key, function() {
            $posts = Post::orderBy('publish_date')->with('author')->get();
            return $posts ? $posts->toArray() : [];
        });
    }

    /**
     * @param int $id
     * @return array
     */
    private function find(int $id): array
    {
        $post = [];
        foreach($this->data as $item) {
            if (intval($item['id']) === $id)
                $post = $item;
        }

        return $post;
    }
}
