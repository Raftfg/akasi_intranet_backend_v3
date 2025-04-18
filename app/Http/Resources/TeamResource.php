<?php

namespace App\Http\Resources;

use App\Models\Project;
use Illuminate\Http\Resources\Json\JsonResource;

class TeamResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
/*          return parent::toArray($request);
 */

        return [
            'id' => $this->id,
            'name' => $this->name,
            'project' => Project::withTrashed()->find($this->project_id),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];

    }
}
