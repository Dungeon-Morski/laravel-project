<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\OrderStatus;
use App\Models\Role;
use App\Models\User;
use Database\Factories\OrderStatusFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $roles = ['admin','client','guest'];
        foreach ($roles as $role) {
            $roles = Role::factory()->create(['name'=>$role]);
        }



        $categories = ['laser printers','inkjet printers','thermal printers'];
        foreach ($categories as $category) {
            Category::factory()->create(['title'=>$category]);
        }
        User::factory()->create(['name'=>'admin','surname'=>'admin','patronymic'=>'admin','email'=>'admin@mail.ru','role_id'=>1,'login'=>'admin','password'=>Hash::make('admin11')]);

        $orderStatuses = ['Неподтвержденный','Подтвержденный'];

        foreach ($orderStatuses as $orderStatus) {
            OrderStatus::factory()->create(['title'=>$orderStatus]);
        }


    }
}
