<div>
    <h1>Bookmarks</h1>
    <p>User: {{Auth::user()->name}}</p>
    <form wire:submit='save'>
        <input type="text" wire:model='name'/>
        <input type="text" wire:model='url'/>
        <button type="submit">Save</button>
    </form>

    <form wire:submit='sendNotification'>
        <p wire:loading='sendNotification'>This is being sent to {{Auth::user()->name}}</p>
        <button type="submit" wire:confirm='Are you sure to send notification?'>Send Notification</button>
    </form>

    <button wire:click='sendNotification' wire:confirm="">Notify</button>

    <div>
        @foreach($bookmarks as $bookmark)
            <div wire:key="{{$bookmark->id}}">
                <p>{{$bookmark->name}}</p>
                <p>{{$bookmark->url}}</p>
                <button wire:click='delete({{$bookmark->id}})'>Delete</button>
            </div>
        @endforeach
    </div>
</div>
