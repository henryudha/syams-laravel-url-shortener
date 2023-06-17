<?php declare(strict_types = 1);

namespace App\Enums;

enum UserRoleEnum: int {
    case Admin = 1;
    case User  = 2;
}
