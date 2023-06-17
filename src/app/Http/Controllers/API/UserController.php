<?php

namespace App\Http\Controllers\API;

use App\Action\User\CreateUserAction;
use App\Action\User\FetchUserAction;
use App\DTO\APIResponseDto;
use App\Helpers\TransactionHandler;
use App\Http\Controllers\Controller;
use App\Http\Requests\User\UserCreationRequest;
use App\Http\Requests\User\UserUpdateRequest;
use App\Models\Role;
use App\Models\User as UserModel;
use App\Enums\UserRoleEnum;
use App\Enums\HttpCodeEnum as HttpCode;
use App\Http\Requests\User\UserFetchRequest;
use App\Http\Resources\API\GeneralResponse;
use App\Repositories\Local\UserRepo;

class UserController extends Controller {
    public function __construct(private UserRepo $userRepo) {

    }

    public function create(UserCreationRequest $request): GeneralResponse {
        $this->authorize('createByGuest', UserModel::class);

        $createAction = new CreateUserAction($this->userRepo, $request->validated());
        $createResult = $createAction->handle();

        return new GeneralResponse(
            $createResult,
            new APIResponseDto(
              httpCode: HttpCode::HTTP_CREATED,
              message: 'record created successfully',
            ),
        );
    }

    public function update(UserUpdateRequest $request): void {
        $this->authorize('update', UserModel::class);
    }

    public function delete(): void {
        $this->authorize('delete', UserModel::class);
    }

    public function fetchById(int $userId, UserModel $userModel): GeneralResponse {
        if ($userId <= 0)
            throw new \Exception("user_id should have value more than 0");

        // $this->authorize('view', $userModel);

        $fetchAction = new FetchUserAction($this->userRepo, userId: $userId);
        $result = $fetchAction->handle();

        return new GeneralResponse(
          $result,
          new APIResponseDto(
              httpCode: HttpCode::HTTP_OK,
              message: 'record fetched successfully',
          )
      );
    }

    public function fetchAll(UserFetchRequest $request): GeneralResponse {
        $perPage = $request->input('per_page', 15);

        $fetchAction = new FetchUserAction($this->userRepo, perPage: $perPage);
        $result = $fetchAction->handle();

        return new GeneralResponse(
            $result['users'],
            new APIResponseDto(
                httpCode: HttpCode::HTTP_OK,
                message: 'record fetched successfully',
                links: $result['links'],
                pageMeta: $result['page_meta']
            )
        );
    }
}
