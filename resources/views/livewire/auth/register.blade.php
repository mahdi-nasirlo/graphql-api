<div>
    {{-- <div id="signup-tab" class="tab-pane fade"> --}}
    <form wire:submit.prevent='saveUser'
        class="needs-validation was-validated @if ($errors->any()) was-validated @endif" autocomplete="off"
        novalidate="">
        <div class="mb-3">
            <label class="form-label" for="su-name">نام کامل</label>
            <input wire:model='name' autocomplete="off" class="form-control" type="text" id="su-name" required="">
            <div class="invalid-feedback">لطفا نام خود را وارد کنید</div>
        </div>
        <div class="mb-3">
            <label for="su-email">آدرس ایمیل</label>
            <input wire:model='email' class="form-control" type="email" id="su-email" placeholder="setin@gmail.com"
                required="">
            {{-- <div class="invalid-feedback">لطفا یک آدرس ایمیل معتبر ارائه کنید</div> --}}
            @error('email')
                <div class="text-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label" for="su-password">پسورد</label>
            <div class="password-toggle">
                <input wire:model='password' class="form-control" type="password" id="su-password" required="">
                <label class="password-toggle-btn" aria-label="نمایش/پنهان کردن">
                    <input id="password" invalid="true" class="password-toggle-check is-invalid" type="checkbox"><span
                        class="password-toggle-indicator"></span>
                </label>
            </div>

            <script>
                // document.getElementById("password").setCustomValidity('sdfds');
                document.getElementById("password").setErrors({
                    'incorrect': true
                })
            </script>
            @error('password')
                <div class="text-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label" for="su-password-confirm">تکرار پسورد</label>
            <div class="password-toggle">
                <input wire:model='password_confirmation' class="form-control" type="password" id="su-password-confirm"
                    required="">
                <label class="password-toggle-btn" aria-label="نمایش/پنهان کردن">
                    <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                </label>
            </div>
        </div>
        <button class="btn-spinner btn btn-primary btn-shadow d-block w-100">
            <div wire:loading.delay wire:target="saveUser">
                <x-spinner />
            </div>
            ثبت نام
        </button>
    </form>
</div>
