    <div class="section-body mt-4">
        <div class="container-fluid">
            <div class="tab-content">
                <div class="tab-pane fade active show" id="addnew" role="tabpanel">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">{{$page}}</h3>
                                </div>
                                <form class="card-body">
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-12">
                                                <b>Sumary</b>
                                            </div>
                                            <div class="col-12 px-5 py-3">
                                                <div class=" add-input">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label>Title</label>
                                                                <input type="text" wire:model.lazy="sumary.0.title" type="text" placeholder="Title" class="form-control" >
                                                                @error('sumary.0.title') <span class="error text-danger err_margin">{{ $message }}</span> @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-7">
                                                        <div class="form-group">
                                                            <label>Value</label>
                                                                <input type="text" wire:model.lazy="sumary.0.value" type="text" placeholder="Value" class="form-control" >
                                                                @error('sumary.0.value') <span class="error text-danger err_margin">{{ $message }}</span> @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2 d-flex flex-column justify-content-center align-items-center mt-1">
                                                            <label></label>
                                                            <button class="btn text-white btn-success btn-sm" wire:click.prevent="addSumary({{$sumaryIndex}})"><i class="fa fa-plus fa2" aria-hidden="true"></i></button>
                                                        </div>
                                                    </div>
                                                    @foreach($sumaryInput as $key => $value)
                                                    <div class=" add-input">
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label>Title</label>
                                                                    <input type="text" wire:model="sumary.{{ $value }}.title" type="text" placeholder="Title" class="form-control" >
                                                                    @error('sumary.'.$value.'.title') <span class="error text-danger err_margin">{{ $message }}</span> @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-md-7">
                                                                <div class="form-group">
                                                                    <label>Value</label>
                                                                    <input type="text" wire:model="sumary.{{ $value }}.value" type="text" placeholder="Value" class="form-control" >
                                                                    @error('sumary.'.$value.'.value') <span class="error text-danger err_margin">{{ $message }}</span> @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2 d-flex flex-column justify-content-center align-items-center mt-1">
                                                                <label></label>
                                                                <button class="btn text-white btn-danger btn-sm" wire:click.prevent="removeSumary({{$key}})"><i class="fa fa-minus fa2" aria-hidden="true"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <b>Education</b>
                                            </div>
                                            <div class="col-12 px-5 py-3">
                                                <div class=" add-input">
                                                    <div class="row">
                                                        <div class="col-md-10">
                                                            <div class="row">
                                                                <!--  -->
                                                                <div class="col-md-5">
                                                                    <div class="form-group">
                                                                        <label>Degree</label>
                                                                        <input type="text" wire:model.lazy="education.0.degree" type="text" placeholder="Degree" class="form-control" >
                                                                        @error('education.0.degree') <span class="error text-danger err_margin">{{ $message }}</span> @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-7">
                                                                    <div class="form-group">
                                                                        <label>Institute</label>
                                                                        <input type="text" wire:model.lazy="education.0.institute" type="text" placeholder="Institute" class="form-control" >
                                                                        @error('education.0.institute') <span class="error text-danger err_margin">{{ $message }}</span> @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-5">
                                                                    <div class="form-group">
                                                                        <label>Year</label>
                                                                        <input type="text" wire:model.lazy="education.0.year" type="text" placeholder="year" class="form-control" >
                                                                        @error('education.0.year') <span class="error text-danger err_margin">{{ $message }}</span> @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-7">
                                                                    <div class="form-group">
                                                                        <label>Address</label>
                                                                        <input type="text" wire:model.lazy="education.0.address" type="text" placeholder="Address" class="form-control" >
                                                                        @error('education.0.address') <span class="error text-danger err_margin">{{ $message }}</span> @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label>description</label>
                                                                        <textarea wire:model.lazy="education.0.description" rows="4" class="form-control no-resize" placeholder="Description"></textarea>
                                                                        @error('education.0.description') <span class="error text-danger err_margin">{{ $message }}</]span> @enderror
                                                                    </div>
                                                                </div>
                                                                <!--  -->
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2 d-flex flex-column justify-content-start align-items-center mt-1">
                                                            <label></label>
                                                            <button class="btn text-white btn-success btn-sm" wire:click.prevent="addEducation({{$educationIndex}})"><i class="fa fa-plus fa2" aria-hidden="true"></i></button>
                                                        </div>
                                                    </div>
                                                    @foreach($educationInput as $key => $value)
                                                    <br><br>
                                                    <div class=" add-input">
                                                        <div class="row">
                                                            <div class="col-md-10">
                                                                <div class="row">
                                                                <!--  -->
                                                                    <div class="col-md-5">
                                                                        <div class="form-group">
                                                                            <label>Degree</label>
                                                                            <input type="text" wire:model.lazy="education.{{$value}}.degree" type="text" placeholder="Degree" class="form-control" >
                                                                            @error('education.'.$value.'.degree') <span class="error text-danger err_margin">{{ $message }}</span> @enderror
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-7">
                                                                        <div class="form-group">
                                                                            <label>Institute</label>
                                                                            <input type="text" wire:model.lazy="education.{{$value}}.institute" type="text" placeholder="Institute" class="form-control" >
                                                                            @error('education.'.$value.'.institute') <span class="error text-danger err_margin">{{ $message }}</span> @enderror
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-5">
                                                                        <div class="form-group">
                                                                            <label>Year</label>
                                                                            <input type="text" wire:model.lazy="education.{{$value}}.year" type="text" placeholder="Year" class="form-control" >
                                                                            @error('education.'.$value.'.year') <span class="error text-danger err_margin">{{ $message }}</span> @enderror
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-7">
                                                                        <div class="form-group">
                                                                            <label>Address</label>
                                                                            <input type="text" wire:model.lazy="education.{{$value}}.address" type="text" placeholder="Address" class="form-control" >
                                                                            @error('education.'.$value.'.address') <span class="error text-danger err_margin">{{ $message }}</span> @enderror
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label>description</label>
                                                                            <textarea wire:model.lazy="education.{{$value}}.description" rows="4" class="form-control no-resize" placeholder="Description"></textarea>
                                                                            @error('education.'.$value.'.description') <span class="error text-danger err_margin">{{ $message }}</]span> @enderror
                                                                        </div>
                                                                    </div>
                                                                    <!--  -->
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2 d-flex flex-column justify-content-start align-items-center mt-1">
                                                                <label></label>
                                                                <button class="btn text-white btn-danger btn-sm" wire:click.prevent="removeEducation({{$key}})"><i class="fa fa-minus fa2" aria-hidden="true"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-12">
                                                <b>Experience</b>
                                            </div>
                                            <div class="col-12 px-5 py-3">
                                                <div class=" add-input">
                                                    <div class="row">
                                                        <div class="col-md-10">
                                                            <div class="row">
                                                                <!--  -->
                                                                <div class="col-md-5">
                                                                    <div class="form-group">
                                                                        <label>Job title</label>
                                                                        <input type="text" wire:model.lazy="experience.0.job_title" type="text" placeholder="Job_title" class="form-control" >
                                                                        @error('experience.0.job_title') <span class="error text-danger err_margin">{{ $message }}</span> @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-7">
                                                                    <div class="form-group">
                                                                        <label>Company</label>
                                                                        <input type="text" wire:model.lazy="experience.0.company" type="text" placeholder="Company" class="form-control" >
                                                                        @error('experience.0.company') <span class="error text-danger err_margin">{{ $message }}</span> @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-5">
                                                                    <div class="form-group">
                                                                        <label>Year</label>
                                                                        <input type="text" wire:model.lazy="experience.0.year" type="text" placeholder="year" class="form-control" >
                                                                        @error('experience.0.year') <span class="error text-danger err_margin">{{ $message }}</span> @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-7">
                                                                    <div class="form-group">
                                                                        <label>Address</label>
                                                                        <input type="text" wire:model.lazy="experience.0.address" type="text" placeholder="Address" class="form-control" >
                                                                        @error('experience.0.address') <span class="error text-danger err_margin">{{ $message }}</span> @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label>description</label>
                                                                        <textarea wire:model.lazy="experience.0.description" rows="4" class="form-control no-resize" placeholder="Description"></textarea>
                                                                        @error('experience.0.description') <span class="error text-danger err_margin">{{ $message }}</]span> @enderror
                                                                    </div>
                                                                </div>
                                                                <!--  -->
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2 d-flex flex-column justify-content-start align-items-center mt-1">
                                                            <label></label>
                                                            <button class="btn text-white btn-success btn-sm" wire:click.prevent="addExperience({{$experienceIndex}})"><i class="fa fa-plus fa2" aria-hidden="true"></i></button>
                                                        </div>
                                                    </div>
                                                    @foreach($experienceInput as $key => $value)
                                                    <br><br>
                                                    <div class=" add-input">
                                                        <div class="row">
                                                            <div class="col-md-10">
                                                                <div class="row">
                                                                <!--  -->
                                                                    <div class="col-md-5">
                                                                        <div class="form-group">
                                                                            <label>Job title</label>
                                                                            <input type="text" wire:model.lazy="experience.{{$value}}.job_title" type="text" placeholder="Job_title" class="form-control" >
                                                                            @error('experience.'.$value.'.job_title') <span class="error text-danger err_margin">{{ $message }}</span> @enderror
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-7">
                                                                        <div class="form-group">
                                                                            <label>Company</label>
                                                                            <input type="text" wire:model.lazy="experience.{{$value}}.company" type="text" placeholder="Company" class="form-control" >
                                                                            @error('experience.'.$value.'.company') <span class="error text-danger err_margin">{{ $message }}</span> @enderror
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-5">
                                                                        <div class="form-group">
                                                                            <label>Year</label>
                                                                            <input type="text" wire:model.lazy="experience.{{$value}}.year" type="text" placeholder="Year" class="form-control" >
                                                                            @error('experience.'.$value.'.year') <span class="error text-danger err_margin">{{ $message }}</span> @enderror
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-7">
                                                                        <div class="form-group">
                                                                            <label>Address</label>
                                                                            <input type="text" wire:model.lazy="experience.{{$value}}.address" type="text" placeholder="Address" class="form-control" >
                                                                            @error('experience.'.$value.'.address') <span class="error text-danger err_margin">{{ $message }}</span> @enderror
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label>description</label>
                                                                            <textarea wire:model.lazy="experience.{{$value}}.description" rows="4" class="form-control no-resize" placeholder="Description"></textarea>
                                                                            @error('experience.'.$value.'.description') <span class="error text-danger err_margin">{{ $message }}</]span> @enderror
                                                                        </div>
                                                                    </div>
                                                                    <!--  -->
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2 d-flex flex-column justify-content-start align-items-center mt-1">
                                                                <label></label>
                                                                <button class="btn text-white btn-danger btn-sm" wire:click.prevent="removeExperience({{$key}})"><i class="fa fa-minus fa2" aria-hidden="true"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <b>Resume File</b>
                                            </div>
                                            <div class="col-md-12 px-5 py-3">
                                                <div class="row">
                                                    <div class="form-group col-md-6 col-sm-12">
                                                        <label><b>File</b></label>
                                                        <div class="custom-file">
                                                            <input wire:model.lazy="resume_file"  type="file" class="form-control custom-file-input" id="customFile">
                                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-6 col-sm-12 px-4 py-4">
                                                    @if ($resumeFile)
                                                    <i class="fa fa-file-pdf-o" style="color: limegreen; font-size:40px;" aria-hidden="true"></i>
                                                    @else
                                                    <i class="fa fa-upload text-success" style="font-size:40px;" aria-hidden="true"></i>
                                                    @endif
                                                    </div>
                                                    @error('resume_file') <span class="error text-danger err_margin">{{ $message }}</span> @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-12 p-2 text-center">
                                            <button type="button" wire:click.prevent="store()" class="btn btn-success btn-sm">Save</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @section('page')
    {{$page}}
    @endsection
