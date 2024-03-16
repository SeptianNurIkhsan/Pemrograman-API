<?php
// File: app/Http/Responses/JsonResponse.php

namespace App\Http\Responses;

use Illuminate\Contracts\Support\Responsable;

class JsonResponse implements Responsable
{
    protected $data;
    protected $status;

    public function __construct($data, $status = 200)
    {
        $this->data = $data;
        $this->status = $status;
    }

    public function toResponse($request)
    {
        return response()->json($this->data, $this->status);
    }
}
