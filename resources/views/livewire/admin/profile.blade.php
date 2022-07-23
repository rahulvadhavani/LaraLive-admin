<div class="section-body mt-4">
   <div class="container-fluid">
      <div class="row clearfix">
         <div class="col-lg-4 col-md-12">
            <div class="card">
               <!-- <img class="card-img-top" src="{{$userimage}}" alt="Card image cap"> -->
               <label id="profile_img" style="height: 305px;">
                  @if ($image)
                     @php $imgurl = $image->temporaryUrl() @endphp
                  @else
                     @php $imgurl = $userimage @endphp
                  @endif
                  <div class="profile-pic h-100" style="background-image: url({{$imgurl}})">
                        <label for="fileToUpload" ><i class="fa fa-pencil"></i></label>
                  </div>
               </label>
               <input type="File" wire:model="image" id="fileToUpload">
               @error('image') <span class="error text-danger">{{ $message }}</span> @enderror
               <div class="card-body">
                  <h5 class="card-title"><b>Name: </b>{{$first_name.' '.$last_name}}</h5>
                  <h5 class="card-title"><b>UserName: </b> {{$user_name}}</h5>
                  <p class="card-text">-</p>
                  <div class="row">
                     <div class="col-4">
                        <h6><strong>3265</strong></h6>
                        <span>Post</span>
                     </div>
                     <div class="col-4">
                        <h6><strong>1358</strong></h6>
                        <span>Followers</span>
                     </div>
                     <div class="col-4">
                        <h6><strong>10K</strong></h6>
                        <span>Likes</span>
                     </div>
                  </div>
               </div>
               <ul class="list-group list-group-flush">
                  <li class="list-group-item">{{$email}}</li>
                  <li class="list-group-item">{{$phone}}</li>
               </ul>
               <!-- <div class="card-body">
                  <a href="javascript:void(0);" class="card-link">View More</a>
                  <a href="javascript:void(0);" class="card-link">Another link</a>
               </div> -->
            </div>
         </div>
         <!-- phone image email user_name last_name first_name  --> 
         <div class="col-lg-8 col-md-12">
            <div class="tab-content" id="pills-password">
               <div class="tab-pane fade active show" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                  <form wire:submit.prevent="submit" method="POST" id="profile_form">
                     <div class="card">
                        <div class="card-body">
                           <div class="row clearfix"> 
                              <div class="col-sm-6 col-md-6">
                                 <div class="form-group">
                                    <label class="form-label">First Name</label>
                                    <input class="form-control" placeholder="First name" wire:model.lazy="first_name" type="text">
                                    @error('first_name') <span class="error text-danger" >{{ $message }}</span> @enderror
                                 </div>
                              </div>
                              <div class="col-sm-6 col-md-6">
                                 <div class="form-group">
                                    <label class="form-label">Last Name</label>
                                    <input wire:model.lazy="last_name" type="text" class="form-control" placeholder="Last Name">
                                    @error('last_name') <span class="error text-danger err_margin">{{ $message }}</span> @enderror
                                 </div>
                              </div>  
                              <div class="col-sm-6 col-md-6">
                                 <div class="form-group">
                                    <label class="form-label">Username</label>
                                    <input wire:model.lazy="user_name" type="text" class="form-control" placeholder="Username">
                                    @error('user_name') <span class="error text-danger err_margin">{{ $message }}</span> @enderror
                                 </div>
                              </div>                         
                              <div class="col-sm-6 col-md-6">
                                 <div class="form-group">
                                    <label class="form-label">Mobile</label>
                                    <input wire:model.lazy="phone" type="number" class="form-control" placeholder="Mobile">
                                    @error('phone') <span class="error text-danger err_margin">{{ $message }}</span> @enderror
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="card-footer text-right">
                           <button type="submit" class="btn btn-primary">Update Profile</button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
            <div class="tab-content" id="pills-password">
               <div class="tab-pane fade active show" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                  <form wire:submit.prevent="updatePassword" method="POST" id="password_form">
                     <div class="card">
                        <div class="card-body">
                           <div class="row clearfix"> 
                              <div class="col-sm-6 col-md-6">
                                 <div class="form-group">
                                    <label class="form-label">Old Password</label>
                                    <input class="form-control" placeholder="Old Password" wire:model.lazy="old_password" type="password">
                                    @error('old_password') <span class="error text-danger" >{{ $message }}</span> @enderror
                                 </div>
                              </div>
                              <div class="col-sm-6 col-md-6">
                                 <div class="form-group">
                                    <label class="form-label">New Password</label>
                                    <input wire:model.lazy="password" type="password" class="form-control" placeholder="New Password">
                                    @error('password') <span class="error text-danger err_margin">{{ $message }}</span> @enderror
                                 </div>
                              </div>  
                              <div class="col-sm-6 col-md-6">
                                 <div class="form-group">
                                    <label class="form-label">Confirm Password</label>
                                    <input wire:model.lazy="password_confirmation" type="password" class="form-control" placeholder="Confirm Password">
                                    @error('password') <span class="error text-danger err_margin">{{ $message }}</span> @enderror
                                 </div>
                              </div>                         
                           </div>
                        </div>
                        <div class="card-footer text-right">
                           <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@section('page')
{{$page}}
@endsection