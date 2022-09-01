<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class UpdateVideoRequest extends StoreVideoRequest
{
    public function rules()
    {
        return array_merge(parent::rules(), [
            'slug' => 'required|alpha_dash|' . Rule::unique('videos')->ignore($this->video),
        ]);
    }
}
