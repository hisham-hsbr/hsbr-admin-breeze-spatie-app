<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $user = User::create([
        	'name' => 'Developer',
        	'email' => 'admin@hsbr-apps.com',
        	'password' => bcrypt('admin@hsbr-apps.com'),
            'created_by' => '1',
            'updated_by' => '1',
        	'status' => '1'
        ]);
            $role = Role::create(['name' => 'Developer','status'=>'1','created_by' => '1','updated_by' => '1']);

        $permissions = Permission::pluck('id','id')->all();

        $role->syncPermissions($permissions);

        $user->assignRole([$role->id]);


        $user = User::create([
        	'name' => 'Super Admin',
        	'email' => 'admin@gmail.com',
        	'password' => bcrypt('123456'),
            'created_by' => '1',
            'updated_by' => '1',
        	'status' => '1'
        ]);
        $role = Role::create(['name' => 'Super Admin','status'=>'1','created_by' => '1','updated_by' => '1']);

        $permissions = Permission::pluck('id','id')->all();

        $role->syncPermissions($permissions);

        $user->assignRole([$role->id]);
    }
}
