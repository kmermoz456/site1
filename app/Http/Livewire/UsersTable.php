<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UsersTable extends Component
{

    use WithPagination;
    public function paginationView()
    {
        return('vendor.pagination.bootstrap-4');
    }
      
      public string $search ="";
      public $orderName = "id";
      public $orderDirection = "ASC";

      protected $queryString = [
          "search" => ['except' =>""]
      ];

      public function pagination(string $name)
      {
          if($name === $this->orderName)
          {
              $this->orderDirection = $this->orderDirection === "ASC" ? "DESC" :"ASC";
          }else
          {
              $this->orderName = $name;
              $this->reset('orderDirection');
          }

      }

    public function render()
    {
        return view('livewire.users-table',[
            'users'=> User::where('name','LIKE',"%{$this->search}%")
            ->orderby($this->orderName,$this->orderDirection)
            ->paginate(10),
        ]);
    }
}
