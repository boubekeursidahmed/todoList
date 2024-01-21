<div>
    <h3 class="text-center">Ajouter une nouvelle tâche</h3>


    <div class="form-group">
        <label for="title">Titre</label>
        <input type="text" wire:model="title" class="form-control">
    </div>

    <div class="form-group">
        <button wire:click.prevent="addTask" class="btn btn-primary btn-block mt-2">Ajouter</button>
    </div>
    </form>
</div>
