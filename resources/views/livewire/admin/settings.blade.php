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
                                <form class="card-body" wire:submit.prevent="submit" method="POST">
                                    <div class="row clearfix">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <label>Support Email</label>
                                                <input type="text" wire:model.lazy="support_email" type="email" placeholder="Support Email" class="form-control" >
                                                @error('support_email') <span class="error text-danger err_margin">{{ $message }}</span> @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <label>Contact</label>
                                                <input type="text" wire:model.lazy="contact" type="number" placeholder="Contact" class="form-control" >
                                                @error('contact') <span class="error text-danger err_margin">{{ $message }}</span> @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" wire:model.lazy="address" type="text" placeholder="Address" class="form-control" >
                                                @error('address') <span class="error text-danger err_margin">{{ $message }}</span> @enderror
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6 col-sm-12">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label><b>Logo image</b></label>
                                                    <div class="custom-file">
                                                        <input wire:model.lazy="logo_image"  type="file" class="form-control custom-file-input" id="customFile1">
                                                        <label class="custom-file-label" for="customFile1">Choose file</label>
                                                    </div>
                                                @error('logo_image') <span class="error text-danger err_margin">{{ $message }}</span> @enderror
                                                </div>
                                                <div class="col-md-6 mt-1">
                                                    @if ($logo_image)
                                                    <img class="preview_image w-25 ml-2" id="preview_image" src="{{ $logo_image->temporaryUrl() }}">
                                                    @elseif($logo_image_url != '')
                                                    <img class="preview_image w-25 ml-2" src="{{ $logo_image_url }}">
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-12">
                                                    <b>Social Handles</b>
                                                </div>
                                                <div class="col-12">
                                                    <div class="row m-2 p-3">
                                                        <div class="col-md-6 col-sm-12">
                                                            <div class="form-group">
                                                                <label>Facebook</label>
                                                                <input type="text" wire:model.lazy="facebook" type="text" placeholder="Facebook" class="form-control" >
                                                                @error('facebook') <span class="error text-danger err_margin">{{ $message }}</span> @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-sm-12">
                                                            <div class="form-group">
                                                                <label>Twitter</label>
                                                                <input type="text" wire:model.lazy="twitter" type="text" placeholder="Twitter" class="form-control" >
                                                                @error('twitter') <span class="error text-danger err_margin">{{ $message }}</span> @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-sm-12">
                                                            <div class="form-group">
                                                                <label>LinkedIN</label>
                                                                <input type="text" wire:model.lazy="linkedin" type="text" placeholder="LinkedIN" class="form-control" >
                                                                @error('linkedin') <span class="error text-danger err_margin">{{ $message }}</span> @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-sm-12">
                                                            <div class="form-group">
                                                                <label>Instagram</label>
                                                                <input type="text" wire:model.lazy="instagram" type="text" placeholder="Instagram" class="form-control" >
                                                                @error('instagram') <span class="error text-danger err_margin">{{ $message }}</span> @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 p-2 text-center">
                                            <button type="submit" class="btn btn-primary">Submit</button>
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
