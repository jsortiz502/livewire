
<!-- Aqui se llama al livewire para darle la funcionalidad
solo hay dos funciones la de incrementar y decremento osea disminuir -->

<div style="text-align: center">
    <input type="text" placeholder="Agregue una descripcion" fa-border>
    <br>
    <button wire:click="increment" style="color: rgb(232, 5, 5)">+</button>
    <h1>{{ $count }}</h1>
    <button wire:click="decrement" style="color: rgb(255, 0, 0)">-</button>
</div>
