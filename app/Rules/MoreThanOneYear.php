<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Contracts\Validation\Rule;
use Carbon\Carbon;


class MoreThanOneYear implements Rule
{
    public function passes($attribute, $value)
    {
        $inputDate = Carbon::parse($value);
        $oneYearAgo = now()->subYear();

        // ตรวจสอบว่าวันที่มีขึ้นต้นจากปัจจุบันมากกว่า 1 ปีหรือไม่
        return $inputDate->greaterThan($oneYearAgo);
    }

    public function message()
    {
        return 'สัญญาขั้นต่ำ 1 ปี';
    }
}
