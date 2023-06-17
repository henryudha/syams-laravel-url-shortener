<?php declare(strict_types = 1);

namespace App\DTO;

use App\Enums\HttpCodeEnum;

class APIResponseDto {
    public function __construct(
        public readonly HttpCodeEnum $httpCode = HttpCodeEnum::HTTP_OK,
        public readonly bool $isSuccess        = true,
        public readonly string $message        = '',
        public readonly ?array $links          = null,
        public readonly ?array $pageMeta       = null
    ) {

    }
}
