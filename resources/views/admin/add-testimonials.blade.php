<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
       <div class="min-height-200px">
          <div class="page-header">
             <div class="row">
                <div class="col-md-6 col-sm-12">
                   <div class="title">
                      <h4>Testimonials Master</h4>
                   </div>
                   <nav aria-label="breadcrumb" role="navigation">
                      <ol class="breadcrumb">
                         <li class="breadcrumb-item"><a href="{{url('')}}">Home</a></li>
                         <li class="breadcrumb-item active" aria-current="page">Add Testimonials</li>
                      </ol>
                   </nav>
                </div>
               
             </div>
          </div>
          <!-- Default Basic Forms Start -->
          <div class="pd-20 card-box mb-30">
             <div class="clearfix">
                <div class="pull-left">
                   <h4 class="text-blue h4">Testimonials</h4>
                   <p class="mb-30">Add A new record</p>
                </div>
                <div class="pull-right">
                   <a href="{{ route('admin.testimonials.view') }}" class="btn btn-primary btn-sm" ><i class="fa fa-list"></i> View Testimonials</a>
                </div>
             </div>
             <form action="{{ isset($data) ? route('admin.testimonials.save', $data->id) : route('admin.testimonials.save') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                   <label class="col-sm-12 col-md-2 col-form-label" for="name">Name</label>
                   <div class="col-sm-12 col-md-10">
                      <input class="form-control" type="text" name="name" id="name" placeholder="Enter Name" value="{{ isset($data->name) ? $data->name : '' }}">
                   </div>
                </div>

                <input type="hidden" name="old_image" value="{{ isset($data->image) ? $data->image : '' }}" >


                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label" for="designation">Designation</label>
                    <div class="col-sm-12 col-md-10">
                       <input class="form-control" type="text" name="designation" id="designation" placeholder="Enter Designation" value="{{ isset($data->designation) ? $data->designation : '' }}">
                    </div>
                 </div>

                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label" for="short_description">Short Description</label>
                    <div class="col-sm-12 col-md-10">
                        <textarea name="short_description" class="form-control" id="short_description" cols="5" rows="5">{{ isset($data->short_description) ? $data->short_description : '' }}</textarea>
                    </div>
                 </div>



                <div class="form-group row">
                   <label class="col-sm-12 col-md-2 col-form-label">Image</label>
                   <div class="col-sm-12 col-md-10">
                     <input class="form-control"  name="image" value="{{ isset($data->image) ? $data->image : '' }}" type="file">
                      @if(!empty($data->image))
                   <div>
                     <img src="{{ asset('uploads/' . $data->image) }}" alt="Uploaded Image" class="mt-3 mx-3" style="height: 80px;width:80px;">
                   </div>
                   @endif
                   </div>
                </div>




                <div class="form-group row">
                   <label class="col-sm-12 col-md-2 col-form-label">Image Alt</label>
                   <div class="col-sm-12 col-md-10">
                     <input class="form-control" name="alt" placeholder="Enter Image Alt"  value="{{ isset($data->alt) ? $data->alt : '' }}" type="text">
                   </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-12 col-md-2 col-form-label">Status</label>
                  <div class="col-sm-12 col-md-10">
                      <input value="Active" name="status" type="radio" id="active" {{ isset($data) && $data->status == 'Active' ? 'checked' : '' }}>
                      <label class="col-sm-12 col-md-2 col-form-label" for="active">Active</label>
                      <input value="Inactive" name="status" type="radio" id="inactive" {{ isset($data) && $data->status == 'Inactive' ? 'checked' : '' }}>
                      <label class="col-sm-12 col-md-2 col-form-label" for="inactive">Inactive</label>
                  </div>
              </div>

                <div class="form-group row">
                <div class="pull-left">
                  <button type="submit" class="btn btn-primary btn-sm mx-2 mt-2"><i class="fa fa-save"></i> Submit</button>
               </div>
            </div>
             </form>
          </div>
       </div>
    </div>
    <div class="footer-wrap pd-20 mb-20 card-box">
       DeskApp - Bootstrap 4 Admin Template By <a href="https://github.com/dropways" target="_blank">Ankit Hingarajiya</a>
    </div>
 </div>
 </div>