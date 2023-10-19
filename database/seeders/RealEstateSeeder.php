<?php

namespace Database\Seeders;

use App\Models\Advertisement;
use Illuminate\Support\Facades\Storage;
use App\Models\Agreement;
use App\Models\Tambon;
use App\Models\ImageRealEstate;
use App\Models\RealEstate;
use Carbon\Carbon;
use App\Models\QuotaPrice;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class RealEstateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $status = ["public","private","in progress","complete"];
        $x = random_int(1,7493);
        $name_URL = ['facbook', 'dehome', 'shopee','google'];
        $real_estate = RealEstate::factory()->count(75)->create();
        for ($f = 1; $f<= 25; $f+=1) {
            $real_estate = new RealEstate();
            $real_estate->user_id = random_int(1,6);
            $real_estate->type = "ที่ดิน";
            $real_estate->status = $status[array_rand($status)];
            $real_estate->address = fake()->name();
            $real_estate->province = Tambon::find($f)->province;
            $real_estate->amphoe = Tambon::find($f)->amphoe;
            $real_estate->tambon = Tambon::find($f)->tambon;
            $real_estate->area = rand(15,200);
            $real_estate->detail = "dddddddddddddddddddddddddddd";
            
            $real_estate->bedroom = null;
            $real_estate->bathroom =  null;
            $real_estate->save();
        }
        
        for ($f = 1; $f <= 100; $f+=1) {

            $quotaPrice = new QuotaPrice();
            $quotaPrice->real_estate_id = $f;
            $quotaPrice->count = 1;
            $quotaPrice->price = random_int(700000,5000000);
            $quotaPrice->save();

            for ($i=0; $i<=3; $i+=1){
                $ad = new Advertisement();
                $ad->real_estate_id = $f ;
                $ad->status = "success";
                $ad->name = $name_URL[$i];
                $ad->ad_start = fake()->dateTimeBetween('-60 days','now');
                $ad->ad_expired =fake()->dateTimeBetween('+60 days','+120 days');
                $ad->URL = fake()->url('http');
                $ad->save();
            }     
            $image = new ImageRealEstate();
            $image->real_estate_id = $f ;
            $image->image_path = 'storage/realestate/123.jpeg';
            $image->save();
            $image = new ImageRealEstate();
            $image->real_estate_id = $f ;
            $image->image_path = 'storage/realestate/124.jpeg';
            $image->save();
            $image = new ImageRealEstate();
            $image->real_estate_id = $f ;
            $image->image_path = 'storage/realestate/125.jpeg';
            $image->save();

            $agreement = new Agreement();
            $agreement->real_estate_id = $f;
            $agreement->years_agreement = 2;
            $agreement->status = "enable";
            $agreement->date_start = fake()->dateTimeBetween('-60 days','now');
            $dateStart = Carbon::parse($agreement->date_start);
            $agreement->date_expired = $dateStart->addYear(2);
            $agreement->save();

             
            
        }

        
    
    }

        
        
        

}