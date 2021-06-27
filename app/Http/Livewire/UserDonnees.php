<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Pagination\Paginator;


class UserDonnees extends Component
{
   
    use WithPagination;

  
    public $search = '';
    public $orderField = "name";
    public $orderDirection ="ASC";

    protected $queryString =[
        "search" => ['except'=> ''],
        "page" => ['except' => '']
    ];
    

    public function paginationView()
    {
        return('vendor.pagination.bootstrap-4');
    }
    
    public function setorderField(string $name)
    {
        if($this->orderField == $name)
        {
            $this->orderDirection = $this->orderDirection == 'ASC' ? 'DESC':'ASC';
        }else{

        $this->orderField = $name;
       $this->orderDirection = "ASC";
    }
    }

    public function render()
    {
        return view('livewire.user-donnees',
        [ 
        'users' => User::where('name','LIKE',"%{$this->search}%")
        ->orderBy($this->orderField,$this->orderDirection)
        ->paginate(5)
       
    
    ]);
    }
}
