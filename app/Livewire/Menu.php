<?php

namespace App\Livewire;

use App\Models\Food;
use Livewire\Component;

class Menu extends Component
{
  public $foods;

  public function render()
  {
    return view('menu')->title('Menu - Del Cafetaria');
  }

  public function boot()
  {
    $this->foods = Food::get();
  }
}
