<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProjectResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            "id" =>	$this->id,
            "title" => $this->title,
            "desc" => $this->desc,
            "images" => $this->images,
            "height" => $this->height,
            "flex" => $this->flex,
            "show" => $this->show,
            "links" => $this->links,
            "created_at" => $this->created_at,
            "updated_at" => $this->updated_at,
        ];
    }
}
