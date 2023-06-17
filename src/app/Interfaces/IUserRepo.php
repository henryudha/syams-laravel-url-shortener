<?php declare(strict_types = 1);

namespace App\Interfaces;

use Illuminate\Pagination\LengthAwarePaginator;
use App\Models\User;

interface IUserRepo {
    public function create(array $data): User;
    public function update(int $id, array $data): bool;
    public function delete(int $id): bool;
    public function fetchById(int $id): ?User;
    public function fetchAll(): LengthAwarePaginator;
}
