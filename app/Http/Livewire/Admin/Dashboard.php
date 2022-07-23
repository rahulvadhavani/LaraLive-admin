<?php

namespace App\Http\Livewire\Admin;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Support\Facades\Cache;
use Livewire\Component;

class Dashboard extends Component
{
    public $page = 'dashboard';
    public $cards = [];

    public function mount(){
        $data =[];
        $statistics = Cache::remember('statistics',60*15,function(){
            return [
                'blogCount' => Blog::count(),
                'categoryCount' => Category::count()
            ];
        });
        $data['Blogs'] = ['count' => $statistics['blogCount'],'route' => route('blogs')];
        $data['Categories'] = ['count' => $statistics['categoryCount'],'route' =>route('category')];
        $this->cards = $data;
    }

    public function render()
    {
        return view('livewire.admin.dashboard');
    }
}
