<div>
    @if (session()->has('message'))
        <div class="alert alert-primary">
            {{ session('message') }}
        </div>
    @endif
    <input wire:model="search" type="text"  class="form-control mb-4" placeholder="Cari..">
    @foreach ($students as $student)
        <livewire:student-single :student="$student" :key="$student->id"/>
    @endforeach
</div>