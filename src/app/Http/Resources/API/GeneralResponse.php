<?php

namespace App\Http\Resources\API;

use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;
use App\DTO\APIResponseDto;
use Illuminate\Http\JsonResponse;

class GeneralResponse extends ResourceCollection
{
    public function __construct($resource, private APIResponseDto $apiResponseDto) {
        parent::__construct($resource);
    }


    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): Collection
    {
        return $this->collection;
    }

    public function with(Request $request): array {
        return [
            'meta' => [
                'status_code'  => $this->apiResponseDto->httpCode,
                'success'      => $this->apiResponseDto->isSuccess,
                'message'      => $this->apiResponseDto->message,
                'page_meta'    => $this->apiResponseDto->pageMeta,
            ],
            'links' => $this->apiResponseDto->links,
        ];
    }

    public function withResponse(Request $request, JsonResponse $response): void {
        $response->setStatusCode($this->apiResponseDto->httpCode->value);
    }
}
