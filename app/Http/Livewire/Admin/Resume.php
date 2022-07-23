<?php

namespace App\Http\Livewire\Admin;

use App\Models\ContactUs;
use App\Models\Resume as ResumeModal;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationData;
use Livewire\Component;
use Livewire\WithFileUploads;



class Resume extends Component
{
    use WithFileUploads;
    public $page = 'Resume';
    public $education, $sumary,$experience;
    public $updateMode = false;
    public $sumaryInput = [];
    public $educationInput = [];
    public $experienceInput = [];
    public $sumaryIndex = 1;
    public $educationIndex = 1;
    public $experienceIndex = 1;
    public $resume_file;
    public $resumeFile = false;

    public function addSumary($sumaryIndex)
    {
        $sumaryIndex = $sumaryIndex + 1;
        $this->sumaryIndex = $sumaryIndex;
        array_push($this->sumaryInput ,$sumaryIndex);
    }

    public function removeSumary($sumaryIndex)
    {
        unset($this->sumaryInput[$sumaryIndex]);
    }

    public function addEducation($educationIndex)
    {
        $educationIndex = $educationIndex + 1;
        $this->educationIndex = $educationIndex;
        array_push($this->educationInput ,$educationIndex);
    }

    public function removeEducation($educationIndex)
    {
        unset($this->educationInput[$educationIndex]);
    }
    public function addExperience($experienceIndex)
    {
        $experienceIndex = $experienceIndex + 1;
        $this->experienceIndex = $experienceIndex;
        array_push($this->experienceInput ,$experienceIndex);
    }

    public function removeExperience($experienceIndex)
    {
        unset($this->experienceInput[$experienceIndex]);
    }

    public function render()
    {
        return view('livewire.admin.resume');
    }

    public function mount(){
        $resume = ResumeModal::get();
        foreach($resume as $value){
            if($value->type == "resume_file"){
                $this->resumeFile = true;
                continue;
            }
            $this->{$value->type} = $value->data;
            $indexKey = $value->type."Index";
            $experienceKey = $value->type."Input";
            foreach($value->data as $key => $value2){
                if($key == 0 ){
                    continue;
                }
                $this->{$indexKey} = $key;
                array_push($this->{$experienceKey} ,$key);
            }
        }

    }

    private function resetInputFields(){
        $this->education ="";
        $this->sumary ="";
        $this->experience ="";
    }

    
    protected $rules = [
        'resume_file' => 'nullable|mimes:pdf|max:10000',
        'sumary.0.title' => 'required',
        'sumary.0.value' => 'required',
        'sumary.*.title' => 'required',
        'sumary.*.value' => 'required',
        'education.0.degree' => 'required',
        'education.0.institute' => 'required',
        'education.0.year' => 'required',
        'education.0.address' => 'required',
        'education.0.description' => 'required',
        'education.*.degree' => 'required',
        'education.*.institute' => 'required',
        'education.*.year' => 'required',
        'education.*.address' => 'required',
        'education.*.description' => 'required',
        'experience.0.job_title' => 'required',
        'experience.0.company' => 'required',
        'experience.0.year' => 'required',
        'experience.0.address' => 'required',
        'experience.0.description' => 'required',
        'experience.*.job_title' => 'required',
        'experience.*.company' => 'required',
        'experience.*.year' => 'required',
        'experience.*.address' => 'required',
        'experience.*.description' => 'required',
        
    ];
    protected $messages = [
        'sumary.title.0.required' => 'Title field is required',
        'sumary.value.0.required' => 'Value field is required',
        'sumary.title.*.required' => 'Title field is required',
        'sumary.value.*.required' => 'Value field is required',
        'education.0.degree.required' => 'Degree field is required',
        'education.0.institute.required' => 'Institute field is required',
        'education.0.year.required' => 'Year field is required',
        'education.0.address.required' => 'Address field is required',
        'education.0.description.required' => 'Description field is required',
        'education.*.degree.required' => 'Degree field is required',
        'education.*.institute.required' => 'Institute field is required',
        'education.*.year.required' => 'Year field is required',
        'education.*.address.required' => 'Address field is required',
        'education.*.description.required' => 'Description field is required',
        'experience.0.job_title.required' => 'Job title field is required',
        'experience.0.company.required' => 'Company field is required',
        'experience.0.year.required' => 'Year field is required',
        'experience.0.address.required' => 'Address field is required',
        'experience.0.description.required' => 'Description field is required',
        'experience.*.job_title.required' => 'Job title field is required',
        'experience.*.company.required' => 'Company field is required',
        'experience.*.year.required' => 'Year field is required',
        'experience.*.address.required' => 'Address field is required',
        'experience.*.description.required' => 'Description field is required',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function store()
    {
        $validatedData = $this->validate();
        foreach($validatedData as $key => $value){
            if($key == "resume_file" && $value != null){
                
                $value = $this->resume_file->storeAs('resume/pdfs',"rv-resume.pdf", 'userPublic');
                ResumeModal::updateOrCreate(['type' => $key],['data' => $value ]);
            }else{
                ResumeModal::updateOrCreate(['type' => $key],['data' => json_encode($value)]);
            }
        }
        $res = success('Resume updated successfully.');
        $this->dispatchBrowserEvent('alert',$res);
    }
}
