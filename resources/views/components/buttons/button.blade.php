@props(['type' => 'button'])
<button type="{{ $type }}"
    class="rounded-full bg-blue-700 px-5 py-2.5 text-[14px] font-semibold text-white transition duration-150 ease-in-out hover:bg-blue-800">
    {{ $slot }}
</button>
