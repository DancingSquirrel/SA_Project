<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Carbon\Carbon;

class DateRangeWithinOneYear implements Rule
{
    protected $startDate;

    public function __construct($startDate)
    {
        $this->startDate = $startDate;
    }

    public function passes($attribute, $value)
    {
        $endDate = Carbon::parse($value);
        $startDate = Carbon::parse($this->startDate);

        // ตรวจสอบว่า 'date_start' น้อยกว่า 'date_expired' และระยะเวลาระหว่างวันที่นี้และ 'date_expired' น้อยกว่าหรือเท่ากับ 1 ปี
        return $startDate->lessThan($endDate) && $startDate->diffInYears($endDate) <= 1;
    }

    public function message()
    {
        return 'วันที่เริ่มต้นต้องน้อยกว่าวันที่หมดอายุและระยะเวลาระหว่างวันที่นี้และวันที่หมดอายุต้องไม่เกิน 1 ปี.';
    }
}
