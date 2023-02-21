<?php

namespace App\Http\Livewire;

use App\Models\Book;
use Livewire\Component;

class Catalog extends Component{
  /* Wire models */
  public $search;
  public $location;
  public $transmissions;

  public function updatedTransmissions()
  {
    if (!is_array($this->transmissions)) return;

    $this->transmissions = array_filter($this->transmissions, function ($transmission) {
      return $transmission != false;
    });
  }

  public function render()
  {
      return view('livewire.catalog', [
          'listings' => Book::whereLike('model', $this->search ?? '')
              ->when($this->location, function ($query, $location) {
                  return $query->where('location_id', $location);
              })
              ->when($this->transmissions, function ($query, $transmissions) {
                  return $query->whereIn('transmission', $transmissions);
              })
              ->get(),
      ]);
  }
  
}