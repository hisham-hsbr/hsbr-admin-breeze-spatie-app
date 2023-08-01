<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
         // For Admin

         Permission::create([
            'name' => 'Menu Admin',
            'parent' => 'Admin',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);

        // for Profile
        Permission::create([
            'name' => 'Menu Profile',
            'parent' => 'Profile',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Edit Profile',
            'parent' => 'Profile',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);

        // For User

        Permission::create([
            'name' => 'Read User',
            'parent' => 'User',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read User Name',
            'parent' => 'User',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read User Email',
            'parent' => 'User',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Read User Roles',
            'parent' => 'User',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
          Permission::create([
            'name' => 'Read User Special Permissions',
            'parent' => 'User',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Read User Time Zone',
            'parent' => 'User',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Read User Status',
            'parent' => 'User',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Read User Created By',
            'parent' => 'User',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read User Updated By',
            'parent' => 'User',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read User Created At',
            'parent' => 'User',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read User Updated At',
            'parent' => 'User',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Create User',
            'parent' => 'User',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Edit User',
            'parent' => 'User',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Update User',
            'parent' => 'User',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Delete User',
            'parent' => 'User',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Buttons User',
            'parent' => 'User',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Column Hide User',
            'parent' => 'User',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Export PDF User',
            'parent' => 'User',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Export Excel User',
            'parent' => 'User',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Print User',
            'parent' => 'User',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Menu User',
            'parent' => 'User',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Read User Phone',
            'parent' => 'User',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Read User Gender',
            'parent' => 'User',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Read User City',
            'parent' => 'User',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Read User Blood Group',
            'parent' => 'User',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Read User Education',
            'parent' => 'User',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Read User Job Seeking',
            'parent' => 'User',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Read User Work Experience',
            'parent' => 'User',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);


        // For Permissions

        Permission::create([
            'name' => 'Read Permission',
            'parent' => 'Permission',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Read Permission Name',
            'parent' => 'Permission',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Permission Parent',
            'parent' => 'Permission',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Permission Status',
            'parent' => 'Permission',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Permission Created By',
            'parent' => 'Permission',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Permission Updated By',
            'parent' => 'Permission',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
             Permission::create([
            'name' => 'Read Permission Created At',
            'parent' => 'Permission',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Permission Updated At',
            'parent' => 'Permission',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Create Permission',
            'parent' => 'Permission',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Edit Permission',
            'parent' => 'Permission',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Update Permission',
            'parent' => 'Permission',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Delete Permission',
            'parent' => 'Permission',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Buttons Permission',
            'parent' => 'Permission',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Column Hide Permission',
            'parent' => 'Permission',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Export PDF Permission',
            'parent' => 'Permission',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Export Excel Permission',
            'parent' => 'Permission',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Print Permission',
            'parent' => 'Permission',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Menu Permission',
            'parent' => 'Permission',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);

            // For Roles

        Permission::create([
            'name' => 'Read Role',
            'parent' => 'Role',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Role Name',
            'parent' => 'Role',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Role Users',
            'parent' => 'Role',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Role Permissions',
            'parent' => 'Role',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Role Status',
            'parent' => 'Role',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Role Created By',
            'parent' => 'Role',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Role Updated By',
            'parent' => 'Role',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Read Role Created At',
            'parent' => 'Role',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Role Updated At',
            'parent' => 'Role',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Create Role',
            'parent' => 'Role',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Edit Role',
            'parent' => 'Role',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Update Role',
            'parent' => 'Role',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Delete Role',
            'parent' => 'Role',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Buttons Role',
            'parent' => 'Role',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Column Hide Role',
            'parent' => 'Role',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Export PDF Role',
            'parent' => 'Role',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Export Excel Role',
            'parent' => 'Role',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Print Role',
            'parent' => 'Role',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Menu Role',
            'parent' => 'Role',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);

        // For Settings

        Permission::create([
            'name' => 'Read Settings',
            'parent' => 'Settings',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Settings Name',
            'parent' => 'Settings',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Settings Action',
            'parent' => 'Settings',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Settings Parent',
            'parent' => 'Settings',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Settings Status',
            'parent' => 'Settings',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Settings Created By',
            'parent' => 'Settings',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
          Permission::create([
            'name' => 'Read Settings Updated By',
            'parent' => 'Settings',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
            Permission::create([
            'name' => 'Read Settings Created At',
            'parent' => 'Settings',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
          Permission::create([
            'name' => 'Read Settings Updated At',
            'parent' => 'Settings',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Create Settings',
            'parent' => 'Settings',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Edit Settings',
            'parent' => 'Settings',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Update Settings',
            'parent' => 'Settings',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Delete Settings',
            'parent' => 'Settings',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Buttons Settings',
            'parent' => 'Settings',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Column Hide Settings',
            'parent' => 'Settings',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Export PDF Settings',
            'parent' => 'Settings',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Export Excel Settings',
            'parent' => 'Settings',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Print Settings',
            'parent' => 'Settings',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Menu Settings',
            'parent' => 'Settings',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);

        // For Education

        Permission::create([
            'name' => 'Read Education',
            'parent' => 'Education',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Education Name',
            'parent' => 'Education',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Education Subject',
            'parent' => 'Education',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Education Subject Code',
            'parent' => 'Education',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Read Education Description',
            'parent' => 'Education',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Education Status',
            'parent' => 'Education',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Education Created By',
            'parent' => 'Education',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
          Permission::create([
            'name' => 'Read Education Updated By',
            'parent' => 'Education',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
            Permission::create([
            'name' => 'Read Education Created At',
            'parent' => 'Education',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
          Permission::create([
            'name' => 'Read Education Updated At',
            'parent' => 'Education',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Create Education',
            'parent' => 'Education',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Edit Education',
            'parent' => 'Education',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Update Education',
            'parent' => 'Education',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Delete Education',
            'parent' => 'Education',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Buttons Education',
            'parent' => 'Education',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Column Hide Education',
            'parent' => 'Education',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Export PDF Education',
            'parent' => 'Education',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Export Excel Education',
            'parent' => 'Education',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Print Education',
            'parent' => 'Education',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Menu Education',
            'parent' => 'Education',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);

        // For Blood

        Permission::create([
            'name' => 'Read Blood',
            'parent' => 'Blood',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Blood Name',
            'parent' => 'Blood',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Read Blood Description',
            'parent' => 'Blood',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Blood Status',
            'parent' => 'Blood',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Blood Created By',
            'parent' => 'Blood',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
          Permission::create([
            'name' => 'Read Blood Updated By',
            'parent' => 'Blood',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
            Permission::create([
            'name' => 'Read Blood Created At',
            'parent' => 'Blood',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
          Permission::create([
            'name' => 'Read Blood Updated At',
            'parent' => 'Blood',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Create Blood',
            'parent' => 'Blood',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Edit Blood',
            'parent' => 'Blood',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Update Blood',
            'parent' => 'Blood',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Delete Blood',
            'parent' => 'Blood',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Buttons Blood',
            'parent' => 'Blood',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Column Hide Blood',
            'parent' => 'Blood',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Export PDF Blood',
            'parent' => 'Blood',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Export Excel Blood',
            'parent' => 'Blood',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Print Blood',
            'parent' => 'Blood',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Menu Blood',
            'parent' => 'Blood',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);

        // For Country

        Permission::create([
            'name' => 'Read Country',
            'parent' => 'Country',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Country Name',
            'parent' => 'Country',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Country Code',
            'parent' => 'Country',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Country Dialing Code',
            'parent' => 'Country',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Read Country Description',
            'parent' => 'Country',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Country Status',
            'parent' => 'Country',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Country Created By',
            'parent' => 'Country',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
          Permission::create([
            'name' => 'Read Country Updated By',
            'parent' => 'Country',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
            Permission::create([
            'name' => 'Read Country Created At',
            'parent' => 'Country',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
          Permission::create([
            'name' => 'Read Country Updated At',
            'parent' => 'Country',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Create Country',
            'parent' => 'Country',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Edit Country',
            'parent' => 'Country',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Update Country',
            'parent' => 'Country',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Delete Country',
            'parent' => 'Country',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Buttons Country',
            'parent' => 'Country',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Column Hide Country',
            'parent' => 'Country',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Export PDF Country',
            'parent' => 'Country',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Export Excel Country',
            'parent' => 'Country',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Print Country',
            'parent' => 'Country',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Menu Country',
            'parent' => 'Country',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);

        // For CSDCity  - country_state_district_cities

        Permission::create([
            'name' => 'Read CSDCity',
            'parent' => 'CSDCity',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read CSDCity Country',
            'parent' => 'CSDCity',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read CSDCity State',
            'parent' => 'CSDCity',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read CSDCity District',
            'parent' => 'CSDCity',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read CSDCity City',
            'parent' => 'CSDCity',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read CSDCity ZipCode',
            'parent' => 'CSDCity',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read CSDCity Status',
            'parent' => 'CSDCity',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read CSDCity Created By',
            'parent' => 'CSDCity',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
          Permission::create([
            'name' => 'Read CSDCity Updated By',
            'parent' => 'CSDCity',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
            Permission::create([
            'name' => 'Read CSDCity Created At',
            'parent' => 'CSDCity',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
          Permission::create([
            'name' => 'Read CSDCity Updated At',
            'parent' => 'CSDCity',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Create CSDCity',
            'parent' => 'CSDCity',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Edit CSDCity',
            'parent' => 'CSDCity',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Update CSDCity',
            'parent' => 'CSDCity',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Delete CSDCity',
            'parent' => 'CSDCity',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Buttons CSDCity',
            'parent' => 'CSDCity',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Column Hide CSDCity',
            'parent' => 'CSDCity',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Export PDF CSDCity',
            'parent' => 'CSDCity',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Export Excel CSDCity',
            'parent' => 'CSDCity',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Print CSDCity',
            'parent' => 'CSDCity',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Menu CSDCity',
            'parent' => 'CSDCity',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);

        // For Division  -

        Permission::create([
            'name' => 'Read Division',
            'parent' => 'Division',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Division Code',
            'parent' => 'Division',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Division Name1',
            'parent' => 'Division',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Division Local Name1',
            'parent' => 'Division',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Division Name2',
            'parent' => 'Division',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Division Local Name2',
            'parent' => 'Division',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Division Status',
            'parent' => 'Division',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Division Created By',
            'parent' => 'Division',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
          Permission::create([
            'name' => 'Read Division Updated By',
            'parent' => 'Division',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
            Permission::create([
            'name' => 'Read Division Created At',
            'parent' => 'Division',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
          Permission::create([
            'name' => 'Read Division Updated At',
            'parent' => 'Division',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Create Division',
            'parent' => 'Division',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Edit Division',
            'parent' => 'Division',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Update Division',
            'parent' => 'Division',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Delete Division',
            'parent' => 'Division',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Buttons Division',
            'parent' => 'Division',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Column Hide Division',
            'parent' => 'Division',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Export PDF Division',
            'parent' => 'Division',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Export Excel Division',
            'parent' => 'Division',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Print Division',
            'parent' => 'Division',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Menu Division',
            'parent' => 'Division',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);


        // For Sub Division  -

        Permission::create([
            'name' => 'Read Sub Division',
            'parent' => 'Sub Division',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Sub Division Code',
            'parent' => 'Sub Division',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Sub Division Name1',
            'parent' => 'Sub Division',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Sub Division Local Name1',
            'parent' => 'Sub Division',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Sub Division Name2',
            'parent' => 'Sub Division',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Sub Division Local Name2',
            'parent' => 'Sub Division',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Sub Division Status',
            'parent' => 'Sub Division',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Sub Division Created By',
            'parent' => 'Sub Division',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
          Permission::create([
            'name' => 'Read Sub Division Updated By',
            'parent' => 'Sub Division',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
            Permission::create([
            'name' => 'Read Sub Division Created At',
            'parent' => 'Sub Division',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
          Permission::create([
            'name' => 'Read Sub Division Updated At',
            'parent' => 'Sub Division',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Create Sub Division',
            'parent' => 'Sub Division',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Edit Sub Division',
            'parent' => 'Sub Division',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Update Sub Division',
            'parent' => 'Sub Division',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Delete Sub Division',
            'parent' => 'Sub Division',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Buttons Sub Division',
            'parent' => 'Sub Division',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Column Hide Sub Division',
            'parent' => 'Sub Division',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Export PDF Sub Division',
            'parent' => 'Sub Division',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Export Excel Sub Division',
            'parent' => 'Sub Division',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Print Sub Division',
            'parent' => 'Sub Division',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Menu Sub Division',
            'parent' => 'Sub Division',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);


         // For Account  -

        Permission::create([
            'name' => 'Read Account',
            'parent' => 'Account',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Account Code',
            'parent' => 'Account',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Account Name1',
            'parent' => 'Account',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Account Local Name1',
            'parent' => 'Account',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Account Name2',
            'parent' => 'Account',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Account Local Name2',
            'parent' => 'Account',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Account Status',
            'parent' => 'Account',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Account Created By',
            'parent' => 'Account',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
          Permission::create([
            'name' => 'Read Account Updated By',
            'parent' => 'Account',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
            Permission::create([
            'name' => 'Read Account Created At',
            'parent' => 'Account',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
          Permission::create([
            'name' => 'Read Account Updated At',
            'parent' => 'Account',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Create Account',
            'parent' => 'Account',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Edit Account',
            'parent' => 'Account',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Update Account',
            'parent' => 'Account',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Delete Account',
            'parent' => 'Account',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Buttons Account',
            'parent' => 'Account',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Column Hide Account',
            'parent' => 'Account',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Export PDF Account',
            'parent' => 'Account',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Export Excel Account',
            'parent' => 'Account',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Print Account',
            'parent' => 'Account',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Menu Account',
            'parent' => 'Account',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);

         // For Brand  -

        Permission::create([
            'name' => 'Read Brand',
            'parent' => 'Brand',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Brand Code',
            'parent' => 'Brand',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Brand Name1',
            'parent' => 'Brand',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Brand Local Name1',
            'parent' => 'Brand',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Brand Name2',
            'parent' => 'Brand',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Brand Local Name2',
            'parent' => 'Brand',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Brand Status',
            'parent' => 'Brand',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Brand Created By',
            'parent' => 'Brand',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
          Permission::create([
            'name' => 'Read Brand Updated By',
            'parent' => 'Brand',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
            Permission::create([
            'name' => 'Read Brand Created At',
            'parent' => 'Brand',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
          Permission::create([
            'name' => 'Read Brand Updated At',
            'parent' => 'Brand',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Create Brand',
            'parent' => 'Brand',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Edit Brand',
            'parent' => 'Brand',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Update Brand',
            'parent' => 'Brand',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Delete Brand',
            'parent' => 'Brand',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Buttons Brand',
            'parent' => 'Brand',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Column Hide Brand',
            'parent' => 'Brand',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Export PDF Brand',
            'parent' => 'Brand',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Export Excel Brand',
            'parent' => 'Brand',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Print Brand',
            'parent' => 'Brand',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Menu Brand',
            'parent' => 'Brand',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);

         // For Color  -

        Permission::create([
            'name' => 'Read Color',
            'parent' => 'Color',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Color Code',
            'parent' => 'Color',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Color Name1',
            'parent' => 'Color',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Color Local Name1',
            'parent' => 'Color',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Color Name2',
            'parent' => 'Color',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Color Local Name2',
            'parent' => 'Color',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Color Status',
            'parent' => 'Color',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Color Created By',
            'parent' => 'Color',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
          Permission::create([
            'name' => 'Read Color Updated By',
            'parent' => 'Color',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
            Permission::create([
            'name' => 'Read Color Created At',
            'parent' => 'Color',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
          Permission::create([
            'name' => 'Read Color Updated At',
            'parent' => 'Color',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Create Color',
            'parent' => 'Color',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Edit Color',
            'parent' => 'Color',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Update Color',
            'parent' => 'Color',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Delete Color',
            'parent' => 'Color',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Buttons Color',
            'parent' => 'Color',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Column Hide Color',
            'parent' => 'Color',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Export PDF Color',
            'parent' => 'Color',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Export Excel Color',
            'parent' => 'Color',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Print Color',
            'parent' => 'Color',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Menu Color',
            'parent' => 'Color',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);

         // For Company  -

        Permission::create([
            'name' => 'Read Company',
            'parent' => 'Company',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Company Code',
            'parent' => 'Company',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Company Name1',
            'parent' => 'Company',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Company Local Name1',
            'parent' => 'Company',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Company Name2',
            'parent' => 'Company',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Company Local Name2',
            'parent' => 'Company',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Company Status',
            'parent' => 'Company',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Company Created By',
            'parent' => 'Company',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
          Permission::create([
            'name' => 'Read Company Updated By',
            'parent' => 'Company',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
            Permission::create([
            'name' => 'Read Company Created At',
            'parent' => 'Company',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
          Permission::create([
            'name' => 'Read Company Updated At',
            'parent' => 'Company',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Create Company',
            'parent' => 'Company',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Edit Company',
            'parent' => 'Company',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Update Company',
            'parent' => 'Company',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Delete Company',
            'parent' => 'Company',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Buttons Company',
            'parent' => 'Company',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Column Hide Company',
            'parent' => 'Company',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Export PDF Company',
            'parent' => 'Company',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Export Excel Company',
            'parent' => 'Company',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Print Company',
            'parent' => 'Company',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Menu Company',
            'parent' => 'Company',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);

         // For Counter  -

        Permission::create([
            'name' => 'Read Counter',
            'parent' => 'Counter',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Counter Code',
            'parent' => 'Counter',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Counter Name1',
            'parent' => 'Counter',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Counter Local Name1',
            'parent' => 'Counter',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Counter Name2',
            'parent' => 'Counter',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Counter Local Name2',
            'parent' => 'Counter',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Counter Status',
            'parent' => 'Counter',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Counter Created By',
            'parent' => 'Counter',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
          Permission::create([
            'name' => 'Read Counter Updated By',
            'parent' => 'Counter',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
            Permission::create([
            'name' => 'Read Counter Created At',
            'parent' => 'Counter',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
          Permission::create([
            'name' => 'Read Counter Updated At',
            'parent' => 'Counter',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Create Counter',
            'parent' => 'Counter',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Edit Counter',
            'parent' => 'Counter',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Update Counter',
            'parent' => 'Counter',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Delete Counter',
            'parent' => 'Counter',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Buttons Counter',
            'parent' => 'Counter',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Column Hide Counter',
            'parent' => 'Counter',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Export PDF Counter',
            'parent' => 'Counter',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Export Excel Counter',
            'parent' => 'Counter',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Print Counter',
            'parent' => 'Counter',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Menu Counter',
            'parent' => 'Counter',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);


         // For Currency  -

        Permission::create([
            'name' => 'Read Currency',
            'parent' => 'Currency',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Currency Code',
            'parent' => 'Currency',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Currency Name1',
            'parent' => 'Currency',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Currency Local Name1',
            'parent' => 'Currency',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Currency Name2',
            'parent' => 'Currency',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Currency Local Name2',
            'parent' => 'Currency',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Currency Status',
            'parent' => 'Currency',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Currency Created By',
            'parent' => 'Currency',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
          Permission::create([
            'name' => 'Read Currency Updated By',
            'parent' => 'Currency',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
            Permission::create([
            'name' => 'Read Currency Created At',
            'parent' => 'Currency',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
          Permission::create([
            'name' => 'Read Currency Updated At',
            'parent' => 'Currency',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Create Currency',
            'parent' => 'Currency',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Edit Currency',
            'parent' => 'Currency',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Update Currency',
            'parent' => 'Currency',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Delete Currency',
            'parent' => 'Currency',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Buttons Currency',
            'parent' => 'Currency',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Column Hide Currency',
            'parent' => 'Currency',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Export PDF Currency',
            'parent' => 'Currency',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Export Excel Currency',
            'parent' => 'Currency',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Print Currency',
            'parent' => 'Currency',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Menu Currency',
            'parent' => 'Currency',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);


         // For Customer  -

        Permission::create([
            'name' => 'Read Customer',
            'parent' => 'Customer',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Customer Code',
            'parent' => 'Customer',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Customer Name1',
            'parent' => 'Customer',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Customer Local Name1',
            'parent' => 'Customer',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Customer Name2',
            'parent' => 'Customer',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Customer Local Name2',
            'parent' => 'Customer',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Customer Status',
            'parent' => 'Customer',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Customer Created By',
            'parent' => 'Customer',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
          Permission::create([
            'name' => 'Read Customer Updated By',
            'parent' => 'Customer',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
            Permission::create([
            'name' => 'Read Customer Created At',
            'parent' => 'Customer',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
          Permission::create([
            'name' => 'Read Customer Updated At',
            'parent' => 'Customer',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Create Customer',
            'parent' => 'Customer',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Edit Customer',
            'parent' => 'Customer',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Update Customer',
            'parent' => 'Customer',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Delete Customer',
            'parent' => 'Customer',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Buttons Customer',
            'parent' => 'Customer',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Column Hide Customer',
            'parent' => 'Customer',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Export PDF Customer',
            'parent' => 'Customer',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Export Excel Customer',
            'parent' => 'Customer',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Print Customer',
            'parent' => 'Customer',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Menu Customer',
            'parent' => 'Customer',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);


         // For Department  -

        Permission::create([
            'name' => 'Read Department',
            'parent' => 'Department',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Department Code',
            'parent' => 'Department',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Department Name1',
            'parent' => 'Department',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Department Local Name1',
            'parent' => 'Department',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Department Name2',
            'parent' => 'Department',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Department Local Name2',
            'parent' => 'Department',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Department Status',
            'parent' => 'Department',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Department Created By',
            'parent' => 'Department',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
          Permission::create([
            'name' => 'Read Department Updated By',
            'parent' => 'Department',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
            Permission::create([
            'name' => 'Read Department Created At',
            'parent' => 'Department',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
          Permission::create([
            'name' => 'Read Department Updated At',
            'parent' => 'Department',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Create Department',
            'parent' => 'Department',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Edit Department',
            'parent' => 'Department',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Update Department',
            'parent' => 'Department',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Delete Department',
            'parent' => 'Department',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Buttons Department',
            'parent' => 'Department',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Column Hide Department',
            'parent' => 'Department',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Export PDF Department',
            'parent' => 'Department',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Export Excel Department',
            'parent' => 'Department',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Print Department',
            'parent' => 'Department',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Menu Department',
            'parent' => 'Department',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);

         // For Designatuion  -

        Permission::create([
            'name' => 'Read Designatuion',
            'parent' => 'Designatuion',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Designatuion Code',
            'parent' => 'Designatuion',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Designatuion Name1',
            'parent' => 'Designatuion',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Designatuion Local Name1',
            'parent' => 'Designatuion',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Designatuion Name2',
            'parent' => 'Designatuion',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Designatuion Local Name2',
            'parent' => 'Designatuion',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Designatuion Status',
            'parent' => 'Designatuion',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Designatuion Created By',
            'parent' => 'Designatuion',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
          Permission::create([
            'name' => 'Read Designatuion Updated By',
            'parent' => 'Designatuion',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
            Permission::create([
            'name' => 'Read Designatuion Created At',
            'parent' => 'Designatuion',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
          Permission::create([
            'name' => 'Read Designatuion Updated At',
            'parent' => 'Designatuion',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Create Designatuion',
            'parent' => 'Designatuion',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Edit Designatuion',
            'parent' => 'Designatuion',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Update Designatuion',
            'parent' => 'Designatuion',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Delete Designatuion',
            'parent' => 'Designatuion',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Buttons Designatuion',
            'parent' => 'Designatuion',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Column Hide Designatuion',
            'parent' => 'Designatuion',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Export PDF Designatuion',
            'parent' => 'Designatuion',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Export Excel Designatuion',
            'parent' => 'Designatuion',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Print Designatuion',
            'parent' => 'Designatuion',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Menu Designatuion',
            'parent' => 'Designatuion',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);

         // For Employee  -

        Permission::create([
            'name' => 'Read Employee',
            'parent' => 'Employee',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Employee Code',
            'parent' => 'Employee',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Employee Name1',
            'parent' => 'Employee',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Employee Local Name1',
            'parent' => 'Employee',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Employee Name2',
            'parent' => 'Employee',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Employee Local Name2',
            'parent' => 'Employee',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Employee Status',
            'parent' => 'Employee',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Employee Created By',
            'parent' => 'Employee',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
          Permission::create([
            'name' => 'Read Employee Updated By',
            'parent' => 'Employee',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
            Permission::create([
            'name' => 'Read Employee Created At',
            'parent' => 'Employee',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
          Permission::create([
            'name' => 'Read Employee Updated At',
            'parent' => 'Employee',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Create Employee',
            'parent' => 'Employee',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Edit Employee',
            'parent' => 'Employee',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Update Employee',
            'parent' => 'Employee',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Delete Employee',
            'parent' => 'Employee',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Buttons Employee',
            'parent' => 'Employee',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Column Hide Employee',
            'parent' => 'Employee',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Export PDF Employee',
            'parent' => 'Employee',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Export Excel Employee',
            'parent' => 'Employee',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Print Employee',
            'parent' => 'Employee',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Menu Employee',
            'parent' => 'Employee',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);

         // For Loyality  -

        Permission::create([
            'name' => 'Read Loyality',
            'parent' => 'Loyality',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Loyality Code',
            'parent' => 'Loyality',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Loyality Name1',
            'parent' => 'Loyality',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Loyality Local Name1',
            'parent' => 'Loyality',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Loyality Name2',
            'parent' => 'Loyality',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Loyality Local Name2',
            'parent' => 'Loyality',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Loyality Status',
            'parent' => 'Loyality',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Loyality Created By',
            'parent' => 'Loyality',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
          Permission::create([
            'name' => 'Read Loyality Updated By',
            'parent' => 'Loyality',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
            Permission::create([
            'name' => 'Read Loyality Created At',
            'parent' => 'Loyality',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
          Permission::create([
            'name' => 'Read Loyality Updated At',
            'parent' => 'Loyality',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Create Loyality',
            'parent' => 'Loyality',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Edit Loyality',
            'parent' => 'Loyality',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Update Loyality',
            'parent' => 'Loyality',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Delete Loyality',
            'parent' => 'Loyality',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Buttons Loyality',
            'parent' => 'Loyality',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Column Hide Loyality',
            'parent' => 'Loyality',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Export PDF Loyality',
            'parent' => 'Loyality',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Export Excel Loyality',
            'parent' => 'Loyality',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Print Loyality',
            'parent' => 'Loyality',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Menu Loyality',
            'parent' => 'Loyality',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);

         // For Outlet  -

        Permission::create([
            'name' => 'Read Outlet',
            'parent' => 'Outlet',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Outlet Code',
            'parent' => 'Outlet',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Outlet Name1',
            'parent' => 'Outlet',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Outlet Local Name1',
            'parent' => 'Outlet',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Outlet Name2',
            'parent' => 'Outlet',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Outlet Local Name2',
            'parent' => 'Outlet',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Outlet Status',
            'parent' => 'Outlet',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Outlet Created By',
            'parent' => 'Outlet',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
          Permission::create([
            'name' => 'Read Outlet Updated By',
            'parent' => 'Outlet',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
            Permission::create([
            'name' => 'Read Outlet Created At',
            'parent' => 'Outlet',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
          Permission::create([
            'name' => 'Read Outlet Updated At',
            'parent' => 'Outlet',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Create Outlet',
            'parent' => 'Outlet',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Edit Outlet',
            'parent' => 'Outlet',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Update Outlet',
            'parent' => 'Outlet',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Delete Outlet',
            'parent' => 'Outlet',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Buttons Outlet',
            'parent' => 'Outlet',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Column Hide Outlet',
            'parent' => 'Outlet',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Export PDF Outlet',
            'parent' => 'Outlet',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Export Excel Outlet',
            'parent' => 'Outlet',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Print Outlet',
            'parent' => 'Outlet',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Menu Outlet',
            'parent' => 'Outlet',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);

         // For Privilege Type  -

        Permission::create([
            'name' => 'Read Privilege Type',
            'parent' => 'Privilege Type',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Privilege Type Code',
            'parent' => 'Privilege Type',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Privilege Type Name1',
            'parent' => 'Privilege Type',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Privilege Type Local Name1',
            'parent' => 'Privilege Type',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Privilege Type Name2',
            'parent' => 'Privilege Type',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Privilege Type Local Name2',
            'parent' => 'Privilege Type',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Privilege Type Status',
            'parent' => 'Privilege Type',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Privilege Type Created By',
            'parent' => 'Privilege Type',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
          Permission::create([
            'name' => 'Read Privilege Type Updated By',
            'parent' => 'Privilege Type',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
            Permission::create([
            'name' => 'Read Privilege Type Created At',
            'parent' => 'Privilege Type',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
          Permission::create([
            'name' => 'Read Privilege Type Updated At',
            'parent' => 'Privilege Type',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Create Privilege Type',
            'parent' => 'Privilege Type',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Edit Privilege Type',
            'parent' => 'Privilege Type',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Update Privilege Type',
            'parent' => 'Privilege Type',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Delete Privilege Type',
            'parent' => 'Privilege Type',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Buttons Privilege Type',
            'parent' => 'Privilege Type',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Column Hide Privilege Type',
            'parent' => 'Privilege Type',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Export PDF Privilege Type',
            'parent' => 'Privilege Type',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Export Excel Privilege Type',
            'parent' => 'Privilege Type',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Print Privilege Type',
            'parent' => 'Privilege Type',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Menu Privilege Type',
            'parent' => 'Privilege Type',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);

         // For Resume Education  -

        Permission::create([
            'name' => 'Read Resume Education',
            'parent' => 'Resume Education',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Resume Education Level Of Education',
            'parent' => 'Resume Education',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Resume Education From To',
            'parent' => 'Resume Education',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Resume Education School',
            'parent' => 'Resume Education',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Resume Education Order',
            'parent' => 'Resume Education',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Resume Education Description',
            'parent' => 'Resume Education',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Resume Education Status',
            'parent' => 'Resume Education',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Resume Education Created By',
            'parent' => 'Resume Education',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
          Permission::create([
            'name' => 'Read Resume Education Updated By',
            'parent' => 'Resume Education',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
            Permission::create([
            'name' => 'Read Resume Education Created At',
            'parent' => 'Resume Education',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
          Permission::create([
            'name' => 'Read Resume Education Updated At',
            'parent' => 'Resume Education',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Create Resume Education',
            'parent' => 'Resume Education',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Edit Resume Education',
            'parent' => 'Resume Education',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Update Resume Education',
            'parent' => 'Resume Education',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Delete Resume Education',
            'parent' => 'Resume Education',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Buttons Resume Education',
            'parent' => 'Resume Education',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Column Hide Resume Education',
            'parent' => 'Resume Education',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Export PDF Resume Education',
            'parent' => 'Resume Education',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Export Excel Resume Education',
            'parent' => 'Resume Education',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Print Resume Education',
            'parent' => 'Resume Education',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Menu Resume Education',
            'parent' => 'Resume Education',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);

         // For Resume Experience  -

        Permission::create([
            'name' => 'Read Resume Experience',
            'parent' => 'Resume Experience',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Resume Experience Job Title',
            'parent' => 'Resume Experience',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Resume Experience From To',
            'parent' => 'Resume Experience',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Resume Experience Company',
            'parent' => 'Resume Experience',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Resume Experience Order',
            'parent' => 'Resume Experience',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Resume Experience Description',
            'parent' => 'Resume Experience',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Resume Experience Status',
            'parent' => 'Resume Experience',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
         Permission::create([
            'name' => 'Read Resume Experience Created By',
            'parent' => 'Resume Experience',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
          Permission::create([
            'name' => 'Read Resume Experience Updated By',
            'parent' => 'Resume Experience',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
            Permission::create([
            'name' => 'Read Resume Experience Created At',
            'parent' => 'Resume Experience',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
          Permission::create([
            'name' => 'Read Resume Experience Updated At',
            'parent' => 'Resume Experience',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Create Resume Experience',
            'parent' => 'Resume Experience',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Edit Resume Experience',
            'parent' => 'Resume Experience',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Update Resume Experience',
            'parent' => 'Resume Experience',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Delete Resume Experience',
            'parent' => 'Resume Experience',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Buttons Resume Experience',
            'parent' => 'Resume Experience',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Column Hide Resume Experience',
            'parent' => 'Resume Experience',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Export PDF Resume Experience',
            'parent' => 'Resume Experience',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Export Excel Resume Experience',
            'parent' => 'Resume Experience',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Table Print Resume Experience',
            'parent' => 'Resume Experience',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        Permission::create([
            'name' => 'Menu Resume Experience',
            'parent' => 'Resume Experience',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        // Menu Resume Start
        Permission::create([
            'name' => 'Menu Resume',
            'parent' => 'Resume',
            'guard_name' => 'web',
            'status' => '1',
            'created_by' => '1',
            'updated_by' => '1',
        ]);
        // Menu Resume end
    }
}
