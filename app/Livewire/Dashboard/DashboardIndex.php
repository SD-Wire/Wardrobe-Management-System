<?php

namespace App\Livewire\Dashboard;

use Livewire\Component;

class DashboardIndex extends Component
{
    public function render()
    {
        return view('livewire.dashboard.dashboard-index')->layout('components.layouts.base');
    }
}