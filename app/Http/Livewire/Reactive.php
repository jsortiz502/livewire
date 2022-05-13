<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Reactive extends Component
{
    public $count = 0;
    //Funcion para incrementar el valor
    public function increment()
    {
        $this->count++;
    }
    //Funcion para disminuir el valor
    public function decrement()
    {
        $this->count--;
    }
    //Se retorna a la vista que deseamos
    public function render()
    {
        return view('livewire.reactive');
    }
}
