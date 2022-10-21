<?php

namespace App\Http\Livewire\Auth;

use DanHarrin\LivewireRateLimiting\Exceptions\TooManyRequestsException;
use DanHarrin\LivewireRateLimiting\WithRateLimiting;
use Filament\Facades\Filament;
use Filament\Http\Responses\Auth\Contracts\LoginResponse;
use Illuminate\Validation\ValidationException;
use Livewire\Component;

class Login extends Component
{
    use WithRateLimiting;

    public $email = '';

    public $password = '';

    public $remember = false;

    protected $rules = [
        'password' => 'required',
        'email' => 'required|email',
    ];

    public function mount(): void
    {
        if (Filament::auth()->check()) {
            redirect()->intended(Filament::getUrl());
        }
    }

    public function authenticate(): ?LoginResponse
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

        if (!Filament::auth()->attempt([
            'email' => $this->email,
            'password' => $this->password,
        ])) {
            throw ValidationException::withMessages([
                'message' => __('filament::login.messages.failed'),
            ]);
        }

        return app(LoginResponse::class);
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
