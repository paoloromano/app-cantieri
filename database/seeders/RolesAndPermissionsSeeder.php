<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        /**
         * Create permissions
         */
        $createUser = Permission::create(['slug' => 'create-user', 'name' => 'Create User']);
        $readUser = Permission::create(['slug' => 'read-user', 'name' => 'Read User']);
        $updateUser = Permission::create(['slug' => 'update-user', 'name' => 'Update User']);
        $deleteUser = Permission::create(['slug' => 'delete-user', 'name' => 'Delete User']);

        $createConsultancy = Permission::create(['slug' => 'create-consultancy', 'name' => 'Create Consultancy']);
        $readConsultancy = Permission::create(['slug' => 'read-consultancy', 'name' => 'Read Consultancy']);
        $updateConsultancy = Permission::create(['slug' => 'update-consultancy', 'name' => 'Update Consultancy']);
        $deleteConsultancy = Permission::create(['slug' => 'delete-consultancy', 'name' => 'Delete Consultancy']);

        $createClient = Permission::create(['slug' => 'create-client', 'name' => 'Create Client']);
        $readClient = Permission::create(['slug' => 'read-client', 'name' => 'Read Client']);
        $updateClient = Permission::create(['slug' => 'update-client', 'name' => 'Update Client']);
        $deleteClient = Permission::create(['slug' => 'delete-client', 'name' => 'Delete Client']);

        $createTender = Permission::create(['slug' => 'create-tender', 'name' => 'Create Tender']);
        $readTender = Permission::create(['slug' => 'read-tender', 'name' => 'Read Tender']);
        $updateTender = Permission::create(['slug' => 'update-tender', 'name' => 'Update Tender']);
        $deleteTender = Permission::create(['slug' => 'delete-tender', 'name' => 'Delete Tender']);

        /**
         * Create roles
         */
        $superAdmin = Role::create(['slug' => 'super-admin', 'name' => 'Owner']);
        $admin = Role::create(['slug' => 'admin', 'name' => 'Amministratore']);

        /**
         * Assign permissions to role
         */
        $superAdmin->Permissions()->sync([
            $createUser->id,
            $readUser->id,
            $updateUser->id,
            $deleteUser->id,

            $createConsultancy->id,
            $readConsultancy->id,
            $updateConsultancy->id,
            $deleteConsultancy->id,

            $createClient->id,
            $readClient->id,
            $updateClient->id,
            $deleteClient->id,

            $createTender->id,
            $readTender->id,
            $updateTender->id,
            $deleteTender->id
        ]);

        $admin->Permissions()->sync([
            $createUser->id,
            $readUser->id,
            $updateUser->id,
            $deleteUser->id,

            $createConsultancy->id,
            $readConsultancy->id,
            $updateConsultancy->id,
            $deleteConsultancy->id,

            $createClient->id,
            $readClient->id,
            $updateClient->id,
            $deleteClient->id,

            $createTender->id,
            $readTender->id,
            $updateTender->id,
            $deleteTender->id
        ]);

        /**
         * Create Super Admin and assign role.
         */
        User::create([
            'user_name' => 'Super Admin',
            'email'     => 'super.admin@yopmail.com',
            'password'  => Hash::make('admin@1234'),
            'role_id'   => $superAdmin->id
        ]);
    }
}
