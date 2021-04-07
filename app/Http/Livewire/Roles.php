<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Roles extends Component
{
    use AuthorizesRequests;
    
    public function render()
    {
        //$this->authorize('permission:role-list|role-create|role-edit|role-delete', ['only' => ['index','store']]);
        $this->authorize('permission:role-create', ['only' => ['create','store']]);
        //$this->authorize('permission:role-edit', ['only' => ['edit','update']]);
        //$this->authorize('permission:role-delete', ['only' => ['destroy']]);

        return view('livewire.roles');
    }
}
