<?php

namespace App\Repositories;

interface RepositoryInterface
{

    /** Retrieve all Posts
     * @return array
     */
    public function all(): array;

    /** Retrieve a one Post with the given id
     * @param int $id
     * @return array
     */
    public function one(int $id): array;
}
