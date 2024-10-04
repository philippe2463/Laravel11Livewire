<div>
    <form wire:submit.prevent="submit">
        <label >Index de l'utilisateur</label>
        <input wire:model.defer="index" type="text"/>
        <p style="color: red">{{ $errors->first('index') }}</p>
        <label>Note</label>
        <input wire:model.defer="note" type="text"/>
        <p style="color: red">{{ $errors->first('note') }}</p>
        <button type="submit">
            Noter
        </button>
    </form>
</div>