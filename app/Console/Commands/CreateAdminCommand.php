<?php

declare(strict_types=1);

namespace App\Console\Commands;

use App\Models\ProfileUser;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

/**
 * @class CreateAdminCommand
 *
 * @author scott-tresor <scotttresor@gmail.com>
 */
class CreateAdminCommand extends Command
{
    protected $signature = 'ngoma:add-user';

    protected $description = 'Creation of a user with higher priorities';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle(): void
    {
        $this->comment('Add User Command Interactive Wizard');

        process :
        $name = ucwords($this->anticipate('name', ['admin']));
        $email = strtolower($this->ask('email'));
        $password = $this->secret('password');

        $validator = validator(
            compact('name', 'email', 'password'),
            [
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'string', 'min:8']
            ]
        );

        if (! $validator->fails()) {
            try {
                $password = Hash::make($password);

                $user = User::query()
                    ->create(compact('name', 'email', 'password'));

                $user->save();
                $this->createProfile($user);
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

    private function createProfile(User $user): void
    {
        ProfileUser::query()
            ->create([
                'user_id' => $user->id
            ]);
    }
}
