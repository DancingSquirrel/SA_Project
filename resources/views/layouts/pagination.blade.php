
    <div class="flex items-center -space-x-px h-10 text-base m-5">
        {{ $realEstateNew->appends([
            'input_amphoe' => $input_amphoe,
            'input_province' => $input_province,
            'input_tambon' => $input_tambon,
            'input_type_real_estate' => $input_type_real_estate,
            'input_bathroom' => $input_bathroom,
            'input_bedroom' => $input_bedroom,
            'lim_low' => $lim_low,
            'lim_high' => $lim_high,])->links() }}
    </div>
