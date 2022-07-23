<?php

namespace App\Http\Livewire\Admin;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithFileUploads;

class Profile extends Component
{
    use WithFileUploads;
    public $first_name,$last_name,$user_name,$phone,$email,$password,$password_confirmation,$old_password = '';
    public $page = 'profile';
    public $fileTitle, $fileName, $image, $userimage;

    protected function rules(){
        $rules = [
            'first_name' => ['required','min:2','max:100'],
            'last_name' => ['required','min:2','max:100'],
            'user_name' => ['required','min:2','max:100'],
            'phone' => ['required','min:10','max:15'],
            'image' => ['nullable','image','mimes:jpeg,jpg,png,gif','max:1024'],
        ];
        return $rules;
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit() {
        $validatedData = $this->validate();
        $user = \App\Models\User::where('id',auth()->user()->id)->first();
        unset($validatedData['image'],$validatedData['password'],$validatedData['password_confirmation'],$validatedData['old_password']);
        if($this->image != ''){
        $validatedData['image'] = $this->image->store('users', ['disk' => 'userPublic']);
            $oldImg = $user->getRawOriginal('image');
            $this->unlinkImg($oldImg);
        }
        $user->update($validatedData);
        $res = success('Profile Updated successfully.');
        $this->dispatchBrowserEvent('alert',$res);
    }

    public function updatePassword() {
        $validatedData = $this->validate([
            'old_password' => ['required', function($attribute,$value,$fail){
                if(!Hash::check($value,Auth::user()->password)){
                    $fail("Old password didn't match");
                }
            }],
            'password' => ['required_with:old_password','confirmed']
        ]);
        $user = \App\Models\User::where('id',auth()->user()->id)->first();
        $validatedData['password'] = Hash::make($validatedData['password']);
        $user->update($validatedData);
        $this->reset(['password','password_confirmation','old_password']);
        $res = success('Password reset successfully.');
        $this->dispatchBrowserEvent('alert',$res);
    }

    public function unlinkImg($img){
        if (\File::exists(public_path('uploads/users/'.$img))) {
            \File::delete(public_path('uploads/users/'.$img));
        }     
    }

    public function mount()
    {
        $user = \App\Models\User::where('id',auth()->user()->id)->first();
        $this->email = $user->email;
        $this->phone = $user->phone;
        $this->user_name = $user->user_name;
        $this->last_name = $user->last_name;
        $this->first_name = $user->first_name;
        $this->userimage = $user->image;

    }

    public function render()
    {
        return view('livewire.admin.profile');
    }
}
