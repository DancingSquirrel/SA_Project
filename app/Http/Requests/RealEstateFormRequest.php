<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\DateRangeWithinOneYear;


class RealEstateFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'address' => [
                'required',
                'max:255'
            ],
            'coordinates' => [
                'required',
                'string',
                'max:22'
            ],
            'input_province' => [
                'required'
                
            ],
            'area' => [
                'required',
                'integer',
            ],
            'input_type_real_estate' => [
                'required'
            ],
            'price' => [
                'required',
                'integer',
            ],
            'detail' => [
                'required',
                'string',
                'max:200',
            ],
            'staff_id' => [
                'required',
            ],
            'date_start' => [
                'required', 
                'date'
            ],
            'date_expired' => [
                'required', 
                'date', 
                new DateRangeWithinOneYear($this->input('date_start'))],
        ];
    }
}
