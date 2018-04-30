<?php

namespace Asahasrabuddhe\LaravelAPI\Tests\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'title'   => $this->title,
            'content' => $this->content,
        ];
    }
}
