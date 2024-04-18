<?php

namespace App\Http\Requests;

use App\Models\Article;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\RedirectResponse;

class StoreArticleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }
    /*<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>*/
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     *
     */
    public function rules(): array
    {
        return [
            'title'=>'required|min:5|max:20',
            'content'=>'required|min:10'
        ];
    }
}
