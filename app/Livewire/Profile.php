<?php

namespace App\Livewire;

use Livewire\Component;

class Profile extends Component
{
  public function render()
  {
    return view('profile')->title('Profile - Del Cafetaria');
  }
}
