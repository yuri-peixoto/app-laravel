<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SupportResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'identify' => $this->id,
            'subject' => $this->subject,
            'status' => $this->status,
            'content' => $this->body,
            'date_created' => Carbon::make($this->created_at)->format('d/m/Y H:i:s'),
            'date_updated' => Carbon::make($this->updated_at)->format('d/m/Y H:i:s')
        ];
    }
}
