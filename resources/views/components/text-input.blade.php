@props([
    'label',
    'name',
    'type' => 'text',
    'value' => old($name),
    'id' => $name,
    'placeholder' => '',
    'required' => '',
    'disabled' => false,
    'uppercase' => false,
])
<div>
    <label for="{{ $id }}" class="text-sm text-gray-800 font-poppins">{{ $label }}
        <span class="text-red-500">{{ $required }}</span></label>
    <div class="mt-2.5">
        <input type="{{ $type }}" name="{{ $name }}" value="{{ $value }}" id="{{ $id }}"
            placeholder="{{ $placeholder }}" @if ($disabled) disabled @endif
            @if ($disabled) cursor-not-allowed @endif
            class="block w-full px-3 text-sm  @if ($disabled) cursor-not-allowed bg-gray-200/75 @endif transition-all duration-200 bg-white border border-gray-200 rounded-sm font-poppins h-11 placeholder:text-xs focus:outline-none focus:border-blue-500 caret-blue-500 @if ($uppercase) uppercase @endif " />
    </div>
</div>
