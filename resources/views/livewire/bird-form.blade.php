<div>
    <form wire:submit='submit'>
        <div>
            <label for="birdCount">Bird Count</label>
            <input wire:model='birdCount' type="number" />
        </div>
      <div>
          <label for="notes">Notes </label>
          <textarea wire:model='notes'></textarea>
      </div>
      <button>Add a new bird count entry</button>
    </form>

    <div>
        @foreach($entries as $entry)
            <div>
                {{$entry->bird_count}}
            </div>
            <div>
                {{$entry->notes}}
            </div>
        @endforeach
    </div>

</div>
