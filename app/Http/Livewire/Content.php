<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Content extends Component
{
    public $contents;
    public $modalContent;
    public $showModal = false;

    public function mount(){
        $this->contents = [
            0 => [
                'id' => 1,
                'header' => 'Test Başlık',
                'content' => 'Content live wire content lorem ipsum dolor sit amet.live wire content lorem ipsum dolor sit amet.live wire content lorem ipsum dolor sit amet.'
            ],
            1 => [
                'id' => 2,
                'header' => 'Test Başlık',
                'content' => 'Content live wire content lorem ipsum dolor sit amet.live wire content lorem ipsum dolor sit amet.live wire content lorem ipsum dolor sit amet.'
            ],
            2 => [
                'id' => 3,
                'header' => 'Test Başlık',
                'content' => 'Content live wire content lorem ipsum dolor sit amet.live wire content lorem ipsum dolor sit amet.live wire content lorem ipsum dolor sit amet.'
            ]
        ];
    }

    public function showModal($id){
        $singleContent = $this->contents;
        $this->modalContent = $singleContent[$id];
        $this->showModal = true;
    }

    public function closeModal(){
        $this->showModal = false;
    }

    public function render()
    {
        return view('livewire.content');
    }
}
