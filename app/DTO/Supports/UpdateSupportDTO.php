<?php

namespace App\DTO\Supports;

use App\Enums\SupportStatus;
use App\Http\Requests\UpdateSupportRequest;

class UpdateSupportDTO
{
    public function __construct(
        public string $id,
        public string $subject,
        public SupportStatus $status,
        public string $body
    ) {}

    public static function updateFromRequest(UpdateSupportRequest $request): self
    {
        return new self(
            $request->id,
            $request->subject,
            SupportStatus::A,
            $request->body
        );
    }
}
