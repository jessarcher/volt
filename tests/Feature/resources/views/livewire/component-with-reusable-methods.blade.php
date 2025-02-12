<div>
    <br/>
    Counter: {{ $counter }}.
    <br/>
    <button wire:click="increment">
        Increment Counter
    </button>
</div>

<?php

use function Livewire\Volt\{protect, mount, state};

state(['counter' => 0]);

$actualIncrement = protect(function () {
    $this->counter++;
});

mount(function () use ($actualIncrement) {
    $actualIncrement();
    $this->actualIncrement();
});

$incrementAsMethod = fn () => $this->actualIncrement();
$incrementAsCallable = fn () => $actualIncrement();
