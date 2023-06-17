<?php declare(strict_types = 1);

namespace App\Repositories\Local;

use App\Interfaces\IUserRepo;
use App\Models\User;
use Illuminate\Pagination\LengthAwarePaginator;

class UserRepo implements IUserRepo {
    public int $perPage = 15;

    public function create(array $data): User {
        return User::create($data);
    }

    public function update(int $id, array $data): bool {
        return false;
    }

    public function delete(int $id): bool {
        return false;
    }

    public function fetchById(int $id): ?User {
        return User::whereId($id)->first();
    }

    public function fetchAll(): LengthAwarePaginator {
        return User::paginate($this->perPage);
    }
}
