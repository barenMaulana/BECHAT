<div>
    <input wire:model="search" type="text"  class="form-control" placeholder="Cari..">
    @foreach ($students as $student)
        {{-- <livewire:student-single :student="$student" :key="$student->id" /> --}}
    @endforeach
</div>
