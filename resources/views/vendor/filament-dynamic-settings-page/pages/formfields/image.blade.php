<input wire:model.lazy="form.{{ $item['id'] }}.value"
    style="border: 1px solid rgb(209 213 219/var(--tw-border-opacity));"
    class="block w-full border-2 transition duration-75 rounded-lg shadow-sm focus:border-primary-500 focus:ring-1 focus:ring-inset focus:ring-primary-500 disabled:opacity-70  border-gray-100 p-1 "
    type="file">

@if ($form[$item['id']]['value'] instanceof \Livewire\TemporaryUploadedFile)
    <span class="text-sm font-bold mt-1">پیش نمایش:</span>
    <div style="border: 1px dashed rgb(209 213 219/var(--tw-border-opacity));"
        class="w-full border-dashed border-4 border-gray-200 rounded-md mt-2 p-6">
        <img width="300" class="w-full rounded-md" src="{{ $form[$item['id']]['value']->temporaryUrl() }}">
    </div>
@else
    @if ($form[$item['id']]['value'])
        <div style="border: 1px dashed rgb(209 213 219/var(--tw-border-opacity));"
            class="w-full border-dashed border-4 border-gray-200 rounded-md mt-2 p-6">
            <img width="300" class="w-full rounded-md" src="{{ asset('/storage/' . $form[$item['id']]['value']) }}">
        </div>
    @endif
@endif
