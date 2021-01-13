<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ActorUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['min:3', 'max:255'],
            'year' => ['numeric', 'min:1900', 'max:2500'],
            'synopsis' => [],
            'runtime' => ['numeric'],
            'released_at' => ['date'],
            'cost' => ['numeric'],
        ];
    }
}