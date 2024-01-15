<?php

namespace App\Livewire;

use App\Models\Food;
use App\Models\Pesanan;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Order extends Component
{
  public $foods;
  public $pesanan;
  public $chosenFood;
  public $jumlah;

  public function render()
  {
    return view('order')->title('Order - Del Cafetaria');
  }

  public function boot()
  {
    $this->foods = Food::get();
    $this->pesanan = Pesanan::get();
  }

  public function addPesanan()
  {
    DB::table('pesanans')->insert([
      'user_id' => Auth()->user()->id,
      'food_id' => $this->chosenFood,
      'jumlah' => $this->jumlah,
      'created_at' => now(),
      'updated_at' => now(),
    ]);

    $this->chosenFood = NULL;
    $this->jumlah = NULL;
  }
}
