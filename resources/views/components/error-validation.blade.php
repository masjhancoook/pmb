@props(['name'])
<div>
    @error($name)
        <span class="text-xs text-red-500 font-poppins">{{ $message }}</span>
    @enderror
</div>
