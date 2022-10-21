<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use DanHarrin\LivewireRateLimiting\Exceptions\TooManyRequestsException;
use DanHarrin\LivewireRateLimiting\WithRateLimiting;
use Filament\Http\Responses\Auth\LoginResponse;
use Livewire\Component;
use Illuminate\Validation\ValidationException;


class Register extends Component
{
    use WithRateLimiting;

    public $name = '';

    public $email = '';

    public $password = '';

    public $password_confirmation = '';

    protected $rules = [
        'name' => 'required|min:3|max:50',
        'email' => 'required|email|unique:users,email',
        'password' => 'min:6|required_with:password_confirmation|confirmed',
        'password_confirmation' => 'min:6'
    ];

    public function saveUser()
    {
        $this->validate();


        try {
            $this->rateLimit(5);
        } catch (TooManyRequestsException $exception) {
            throw ValidationException::withMessages([
                'email' => __('filament::login.messages.throttled', [
                    'seconds' => $exception->secondsUntilAvailable,
                    'minutes' => ceil($exception->secondsUntilAvailable / 60),
                ]),
            ]);
        }

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password,
        ]);

        auth()->login($user);

        return app(LoginResponse::class);
    }

    public function render()
    {
        return view('livewire.auth.register');
    }
}
