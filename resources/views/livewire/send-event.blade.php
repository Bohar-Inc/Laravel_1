<div>
    <h3>Let's send an event</h3>
    <input wire:model.blur='message' type="text"/>
    <button wire:click='sendMessage'>Send Message</button>
    <button wire:click='$refresh'>Reset Component</button>
</div>
