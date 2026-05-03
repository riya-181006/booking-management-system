<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class InstallAdmin extends Command
{
    protected $signature = 'install:admin';

    protected $description = 'Install System Admin';

    public function handle()
    {
        $user = new User([
            'name' => 'BMS Admin',
            'email' => 'bms@opmail.com',
            'phone_no' => '9639639655',
            'password' => Hash::make('secret'),
            'user_type' => 1
        ]);

        if ($user->save()) {
            $this->info('Account Insert Successful');
        } else {
            $this->info('Account Insert Failed');
        }
    }
}