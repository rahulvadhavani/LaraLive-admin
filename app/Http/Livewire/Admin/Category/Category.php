<?php

namespace App\Http\Livewire\Admin\Category;

use App\Models\Category as CategoryModel;
use Livewire\Component;

class Category extends Component
{
    public $page = 'Category';
    public $name,$modalData,$modalStatus,$categories,$category_id;
    public $curPage = 'Category';
    public $recordId = 0;
    public function render()
    {
        return view('livewire.admin.category.category');
    }
    
    public function mount()
    {
        // $this->resetAll();
        $this->categories = CategoryModel::getCategories();
    }

    public function hydrate()
    {
        $this->resetErrorBag();
        $this->resetValidation();
    }
    
    
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    protected function rules()
    {
        $customRule = $this->recordId == 0 ? 'required' : 'required|exists:categories,id';
        $arr = [
            'recordId' => $customRule,
            'name' => 'required',
            'category_id' => 'nullable|exists:categories,id',
        ];
        return $arr;
    } 

    protected $listeners = ['view','edit'];


    public function view($id)
    {
        $category = CategoryModel::where('id',$id)->select('id','name','alias','status','created_at')->first();
        $this->modalData = $category;
        $this->modalStatus = $category->status;
        $this->dispatchBrowserEvent('viewModal');
    }
    
    public function edit($id)
    {
        $category = CategoryModel::where('id',$id)->select('id','name','category_id')->first();        
        $this->recordId = $id;
        $this->name = $category->name;
        $this->category_id = $category->category_id;
        $this->dispatchBrowserEvent('addUpdateModal');
    }
   

    public function viewAddModal()
    {
        $this->recordId = 0;
        $this->name = '';
        $this->dispatchBrowserEvent('addUpdateModal');
    }

    public function submit() 
    {
        $validatedData = $this->validate();
        CategoryModel::updateOrCreate(['id' =>$validatedData['recordId'] ],['name' => $validatedData['name'],'category_id' => $validatedData['category_id']]);
        $res = $validatedData['recordId'] != 0 ? success('Category Updated successfully.') : success('Category added successfully.');
        $this->dispatchBrowserEvent('close-modal');
        $this->refreshData();
        $this->recordId = 0;
        $this->category_id = null;
        $this->categories = CategoryModel::getCategories();
        $this->dispatchBrowserEvent('alert',$res);
    }

    public function refreshData()
    {
        $this->emit('refresh');
    }
    // public function resetModal()
    // {
    //     $this->reset();
    // }

    

}
