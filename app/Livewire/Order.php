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
    $pesanandulu = Pesanan::where('user_id', Auth()->user()->id)->where('food_id', $this->chosenFood)->first();

    if (isset($pesanandulu)) {
      $pesanandulu->update([
        'jumlah' => $pesanandulu->jumlah + $this->jumlah,
      ]);
    } else {
      DB::table('pesanans')->insert([
        'user_id' => Auth()->user()->id,
        'food_id' => $this->chosenFood,
        'jumlah' => $this->jumlah,
        'created_at' => now(),
        'updated_at' => now(),
      ]);
    }
    $this->chosenFood = NULL;
    $this->jumlah = NULL;

    $this->boot();
  }

  public function deletePesan($id)
  {
    DB::table('pesanans')->where('id', $id)->delete();

    $this->boot();
  }
}
