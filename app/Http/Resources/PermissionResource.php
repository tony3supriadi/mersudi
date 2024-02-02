<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PermissionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->label,
            'assigned_to' => RoleAssignToResource::collection($this->roles),
            'created_at' => Carbon::parse($this->created_at)
                ->isoFormat('DD MMM YYYY HH:mm')
        ];
    }
}
