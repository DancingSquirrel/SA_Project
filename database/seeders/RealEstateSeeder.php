<?php

namespace Database\Seeders;

use App\Models\Advertisement;
use App\Models\Agreement;
use App\Models\ImageRealEstate;
use App\Models\RealEstate;
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
        $name_URL = ['facbook', 'dehome', 'shopee','google'];
        $typeAgree = ['consignment','deposit'];
        $real_estate = RealEstate::factory()->count(10)->create();

        for ($x = 1; $x <= 10; $x+=1) {
            $quotaPrice = new QuotaPrice();
            $quotaPrice->real_estate_id = $x;
            $quotaPrice->count = 1;
            $quotaPrice->price = random_int(700000,5000000);
            $quotaPrice->save();

            for ($i=0; $i<=3; $i+=1){
                $ad = new Advertisement();
                $ad->real_estate_id = $x ;
                $ad->name = $name_URL[$i];
                $ad->URL = fake()->url('http');
                $ad->save();
            }     
            $image = new ImageRealEstate();
            $image->real_estate_id = $x ;
            $image->image_path = "storage/app/public/001/123.jpeg";
            $image->save();
            $image = new ImageRealEstate();
            $image->real_estate_id = $x ;
            $image->image_path = "storage/app/public/001/124.jpeg";
            $image->save();
            $image = new ImageRealEstate();
            $image->real_estate_id = $x ;
            $image->image_path = "storage/app/public/001/125.jpeg";
            $image->save();

            $agreement = new Agreement();
            $agreement->real_estate_id = $x;
            $agreement->type = "consignment";
            $agreement->date_start = fake()->dateTimeBetween('-60 days','now');
            $agreement->date_expired = fake()->dateTimeBetween('+14 days','+60 days');
            $agreement->save();

             
            
        }
    
    }

        
        
        

}