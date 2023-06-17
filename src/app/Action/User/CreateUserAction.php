<?php declare(strict_types = 1);

namespace App\Action\User;

use App\Interfaces\IUserRepo;
use App\Enums\UserRoleEnum;
use App\Interfaces\IAction;
use App\Models\Role;

class CreateUserAction implements IAction {
    public function __construct(
      private IUserRepo $userRepo,
      private array $data = []
    ) {

    }

    public function handle(): array {
        if (empty($this->data))
            throw new \Exception("data is required");

        $roleId = UserRoleEnum::User;

        if (isset($this->data['role'])) {
            $role = Role::where(['identifier' => $this->data['role']])->get();

            if ($role->isEmpty())
                throw new \Exception("role {$this->data['role']} is invalid");

            $roleId = $role[0]->id;
        }

        $this->data['role_id'] = $roleId;

        return $this->userRepo->create($this->data)->toArray();
    }
}
