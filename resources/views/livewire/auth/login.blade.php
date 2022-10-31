<div>
    <form wire:submit.prevent="authenticate"
        class="needs-validation @if ($errors->any()) was-validated @endif" autocomplete="off" novalidate>

        @error('message')
            <div class="alert alert-danger" role="alert">
                {{ $message }}
            </div>
        @enderror
        <div class="mb-3">
            <label class="form-label" for="si-email">آدرس ایمیل</label>
            <input wire:model='email' class="form-control" type="email" id="si-email" autocomplete="false"
                placeholder="setin@gmail.com" required>
            <div class="invalid-feedback">لطفا یک آدرس ایمیل معتبر ارائه کنید</div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="si-password">پسورد</label>
            <div class="password-toggle">
                <input wire:model='password' class="form-control" type="password" id="si-password" required>
                <label class="password-toggle-btn" aria-label="نمایش/پنهان کردن">
                    <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                </label>
            </div>
        </div>
        <div class="mb-3 d-flex flex-wrap justify-content-between">
            <div class="form-check mb-2">
                <input class="form-check-input" type="checkbox" id="si-remember">
                <label class="form-check-label" for="si-remember">به خاطر سپردن</label>
            </div><a class="fs-sm" href="#">فراموشی رمز ؟ </a>
        </div>
        <button class="btn-spinner btn btn-primary btn-shadow d-block w-100">
            <div wire:loading.delay wire:target="authenticate">
                <x-spinner />
            </div>
            ورود
        </button>
    </form>
</div>
