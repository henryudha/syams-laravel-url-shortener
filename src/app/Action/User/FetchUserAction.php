<?php declare(strict_types = 1);

namespace App\Action\User;

use App\Interfaces\IAction;
use App\Interfaces\IUserRepo;

class FetchUserAction implements IAction {
    public function __construct(
      private IUserRepo $userRepo,
      private int $userId = 0,
      private int $perPage = 15
    ) {

    }

    public function handle(): array {
        return ($this->userId > 0) ? $this->fetchById() : $this->fetchAll();
    }

    private function fetchAll(): array {
        $this->userRepo->perPage = $this->perPage;

        $users    = $this->userRepo->fetchAll()->withQueryString();
        $usersArr = $users->toArray();
        $links    = $usersArr['links'];

        unset($usersArr['links']);
        unset($usersArr['data']);

        return [
            'users'     => $users->all(),
            'links'     => $links,
            'page_meta' => $usersArr
        ];
    }

    private function fetchById(): array {
        $user = $this->userRepo->fetchById($this->userId);

        return (is_null($user)) ? [] : $user->toArray();
    }
}
