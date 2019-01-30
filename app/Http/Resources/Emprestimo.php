<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Emprestimo extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray($request);
    }
}


    public function toArray($request)
{
        return [
        
        'id' => $this->id,
        'name' => $this->name,
        'status' => $this->status,
        'dataDeinicio' => $this->dataDeinicio,
        'idCliente' => $this->idCliente,
            ];
}

