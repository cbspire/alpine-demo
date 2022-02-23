<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Arr;

class PageSpeed extends Component
{

    public $search = '';
    public $response = '';
    public $performance = 0;

    public $listeners = ['search' => 'onSearch'];
 
    public function onSearch()
    {
        $response = Http::timeout(90)->get('https://www.googleapis.com/pagespeedonline/v5/runPagespeed', [
            'url'      => $this->search,
            'key'      => 'AIzaSyAuDe5VtIwhpOCRTaXUfvPR9egyGHTzsxI',
            'strategy' => 'desktop'
        ]);

        $body = $response->body();

        $jsonBody = json_decode($body, true);
        $this->response = $jsonBody;

        $this->performance = intval(Arr::get($jsonBody, 'lighthouseResult.categories.performance.score', 0) * 100);
    }

    public function render()
    {
        return view('livewire.page-speed');
    }
}
