@props(['checked' => false, 'label' => '', 'name' => ''])

<label class="flex items-center justify-between mb-3">
    <span class="text-sm">{{ $label }}</span>
    <input type="checkbox" name="{{ $name }}" value="1" {{ $checked ? 'checked' : '' }}
        class="h-5 w-5 accent-red-600">
</label>
