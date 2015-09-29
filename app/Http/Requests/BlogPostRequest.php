<?php

namespace App\Http\Requests;

class BlogPostRequest extends Request {
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize() {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules() {
        return ['title' => 'required|min:5',
            'content' => 'required|min:10',
            'published_at' => 'required|date',
            'published_at_time' => 'required',];
    }
}
