@guest
    <!-- ورود/ثبت نام modal-->
    <div class="modal fade" id="signin-modal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-secondary">
                    <ul class="nav nav-tabs card-header-tabs" role="tablist">
                        <li class="nav-item"><a class="nav-link fw-medium active" href="#signin-tab" data-bs-toggle="tab"
                                role="tab" aria-selected="true"><i class="ci-unlocked me-2 mt-n1"></i>ورود</a></li>
                        <li class="nav-item"><a class="nav-link fw-medium" href="#signup-tab" data-bs-toggle="tab"
                                role="tab" aria-selected="false"><i class="ci-user me-2 mt-n1"></i>ثبت نام</a></li>
                    </ul>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body tab-content py-4">
                    <div class="tab-pane fade show active" id="signin-tab">
                        <livewire:auth.login />
                    </div>
                    <div class="tab-pane fade" id="signup-tab">
                        <livewire:auth.register>
                    </div>
                    {{-- <div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
@endguest


{{-- <div class="modal-body tab-content py-4">

    <livewire:auth.login />

    <livewire:auth.register>
</div> --}}
