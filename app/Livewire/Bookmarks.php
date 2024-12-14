<?php

namespace App\Livewire;

use App\Notifications\AnnoyUser;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Bookmarks extends Component
{
    public string $name ='';
    public string $url ='';

    public function save()
    {
        Bookmarks::create([
            'name' => $this->name,
            'url' => $this->url,
            'user_id' => Auth::user()->id,
        ]);
    }

    public function sendNotification()
    {
        sleep(3);
        Auth::user()->notify(new AnnoyUser());
    }

    public function mount()
    {
        Auth::loginUsingId(2);
    }

    public function delete($id)
    {
        $bookmark = Bookmarks::find($id);

        $bookmark->delete();
    }

    public function render()
    {
        return view('livewire.bookmarks',[
            'bookmarks' => Auth::user()->bookmarks,
        ]);
    }
}
