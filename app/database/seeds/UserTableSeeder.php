<?php

class UserTableSeeder extends Seeder
{

    public function run()
    {
        // Create Groups
        Sentry::getGroupProvider()->create(array(
            'name'        => 'Customers'
        ));
        Sentry::getGroupProvider()->create(array(
            'name'        => 'Resellers'
        ));
        Sentry::getGroupProvider()->create(array(
            'name'        => 'Admins'
        ));

        // Delete an existing users
        $users = Sentry::getUserProvider()->findAll();
        foreach ($users as $user) {
            $user->delete();
        }

        // Add some random users
        for ($i = 0; $i < 99; $i++) {
            $unique = Str::random(10);
            $user = Sentry::getUserProvider()->create(array(
                'username' => $unique,
                'email' => $unique . '@customers.localhost',
                'password' => $unique,
                'first_name' => $this->randomName(),
                'last_name' => $this->randomName()
            ));

            $activationCode = $user->getActivationCode();
            $user->attemptActivation($activationCode);

            $userGroup = Sentry::getGroupProvider()->findByName('Customers');

            $user->addGroup($userGroup);
        }


        // Add an admin user
        $user = Sentry::getUserProvider()->create(array(
            'username' => 'admin',
            'email' => 'admin@admin.localhost',
            'password' => 'admin'
        ));

        $activationCode = $user->getActivationCode();
        $user->attemptActivation($activationCode);

        $userGroup = Sentry::getGroupProvider()->findByName('Admins');

        $user->addGroup($userGroup);
    }

    private function randomName() {
        $pool = 'abcdefghijklmnopqrstuvwxyz';

        return ucwords(substr(str_shuffle(str_repeat($pool, 5)), 0, 6));
    }

}