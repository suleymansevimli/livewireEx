<?php

namespace App\Http\Livewire\Admin;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Livewire\Component;

class Slider extends Component
{
    public $app;
    public $desc = 'asc';
    public $data = [];

    public function mount($model,$column=[],$desc = 'asc') {
       $componentModel =  $this->preMount($this->app,$column,$desc);
    }

    public function preMount($model,$column=[],$desc = 'asc'){
        $modelName = Str::studly(Str::singular($column['name']));
        $name = 'App\\'.$modelName;

        $model = $name::query()->find($column['id']);
        $revision = $model->name;
//        $data = $model->query();
//        if (is_array($column)):
//            $data->where(function($q) use ($column){
//               $firstQuery = $q->where($column[0]['name'],$column[0]['val']);
//               for ($i=1;$i<count($column)-1;$i++):
//                    $firstQuery->orWhere($column[$i]['name'],$column[$i]['val']);
//               endfor;
//            });
//        endif;
//
//        $this->data = $data->orderBy('id',$desc)->get();

    }


    public function render()
    {
        return view('livewire.admin.slider');
    }
}
