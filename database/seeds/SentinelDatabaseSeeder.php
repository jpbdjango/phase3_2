<?php

use Illuminate\Database\Seeder;

class SentinelDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create Users
        DB::table('users')->truncate();

        $admin = Sentinel::getUserRepository()->create(array(
            'email'    => 'admin@admin.com',
            'password' => '111111'
        ));

        $manager = Sentinel::getUserRepository()->create(array(
            'email'    => 'manager@manager.com',
            'password' => '111111'
        ));

        $player = Sentinel::getUserRepository()->create(array(
            'email'    => 'player@player.com',
            'password' => '111111'
        ));

        // Create Activations
        DB::table('activations')->truncate();
        $code = Activation::create($admin)->code;
        Activation::complete($admin, $code);
        $code = Activation::create($manager)->code;
        Activation::complete($manager, $code);
        $code = Activation::create($player)->code;
        Activation::complete($player, $code);

        // Create Roles
        DB::table('roles')->truncate();
        
        $adminRole = Sentinel::getRoleRepository()->create(array(
            'name' => 'Admin',
            'slug' => 'admin',
            'permissions' => array(
                'users.create' => true,
                'users.update' => true,
                'users.view' => true,
                'users.destroy' => true,
                'roles.create' => true,
                'roles.update' => true,
                'roles.view' => true,
                'roles.delete' => true
            )
        ));
        $managerRole = Sentinel::getRoleRepository()->create(array(
            'name' => 'Manager',
            'slug' => 'manager',
            'permissions' => array()
        ));
        $playerRole = Sentinel::getRoleRepository()->create(array(
            'name' => 'Joueur',
            'slug' => 'joueur',
            'permissions' => array()
        ));

        // Assign Roles to Users
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('role_users')->truncate();
        
        $adminRole->users()->attach($admin);
        $managerRole->users()->attach($manager);
        $playerRole->users()->attach($player);

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
