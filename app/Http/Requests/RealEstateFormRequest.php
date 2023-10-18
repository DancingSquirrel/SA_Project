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
            'address' => ['required', 'max:255','min:5'],
            'input_province' => ['required'],
            'input_amphoe' => ['nullable'],
            'input_tambon' => ['nullable'],
            'area' => ['required', 'integer'],
            'input_type_real_estate' => ['required'],
            'input_bedroom' => ['nullable'],
            'input_bathroom' => ['nullable'],
            'price' => ['required', 'integer'],
            'detail' => ['required', 'string', 'max:200'],
            'staff_id' => ['required'],
            'date_start' => ['required', 'date'],
            'years_agreement' => ['required', 'integer'],
            'input_images' => ['required']
        ];
    }
}
