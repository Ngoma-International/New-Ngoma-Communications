<?php

declare(strict_types=1);

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Traits\RedirectRoute;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Contracts\Validation\Validator as Validation;

class RegisterController extends Controller
{
    use RegistersUsers;
    use RedirectRoute;

    protected string $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest');
    }


    /**
     * Get a validator for an incoming registration request.
     *
     * @param array<array> $data
     * @return Validation|\Illuminate\Validation\Validator
     */
    protected function validator(array $data): Validation|\Illuminate\Validation\Validator
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * @param array<Request> $data
     * @return Model|Builder
     */
    protected function create(array $data): Model|Builder
    {
        return User::query()
            ->create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make((string)$data['password']),
            ]);
    }
}
