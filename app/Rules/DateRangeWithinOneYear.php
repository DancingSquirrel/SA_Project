<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Carbon\Carbon;

class DateRangeWithinOneYear implements Rule
{
    private $startDate;

    public function __construct($startDate)
    {
        $this->startDate = $startDate;
    }

    public function passes($attribute, $value)
    {
        // Convert the start and end dates to Carbon instances for comparison
        $startDate = Carbon::parse($this->startDate);
        $endDate = Carbon::parse($value);

        // Check if end date is within one year from the start date
        return $endDate->diffInMonths($startDate) <= 12;
    }

    public function message()
    {
        return 'The :attribute must be within one year from the start date.';
    }
}
