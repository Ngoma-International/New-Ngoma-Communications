<?php

declare(strict_types=1);

namespace App\Console\Commands;

use App\Events\AdminEvent;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class CreateAdminCommand extends Command
{
    protected $signature = 'ngoma:add-user';

    protected $description = 'Creation of a user with higher priorities';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $this->comment('Add User Command Interactive Wizard');

        process :
        $name = ucwords($this->anticipate('name', ['admin']));
        $email = strtolower($this->ask('email'));
        $password = $this->secret('password');
        $password_confirmation = $this->secret('confirm password');

        $validator = validator(
            compact('name', 'email', 'password', 'password_confirmation'),
            [
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'string', 'min:8', 'confirmed'],
            ]
        );

        if (! $validator->fails()) {
            try {
                $password = Hash::make($password);

                $user = User::query()
                    ->create(compact('name', 'email', 'password'));

                $user->save();
                $this->info(sprintf('User %s <%s> created', $name, $email));
                exit();
            } catch (\Exception $exception) {
                $this->error('Something went wrong run the command with -v for more details');
            }
        } else {
            $this->error('some values are wrong !');
            $this->table(['Errors'], $validator->errors()->messages());
            goto process;
        }
    }
}
