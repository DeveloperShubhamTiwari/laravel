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
                         <li class="breadcrumb-item"><a href="{{  url('admin')}}">Home</a></li>
                         <li class="breadcrumb-item active" aria-current="page">View Testimonials</li>
                      </ol>
                   </nav>
                </div>
             </div>
          </div>
          <div class="card-box mb-30">
             <div class="pd-20">
                <div class="clearfix">
                   <div class="pull-left">
                      <h4 class="text-blue h4">Testimonials</h4>
                      <p class="mb-30">All Testimonials records</p>
                   </div>
                   <div class="pull-right">
                      <a href="{{ route('admin.testimonials.add') }}" class="btn btn-primary btn-sm" ><i class="fa fa-list"></i> Add Testimonials</a>
                   </div>
                </div>
                <div class="pd-20 card-box mb-30">
                   <table class="table table-bordered" id="myTable">
                      <thead>
                         <tr>
                            <th scope="col">Sr.No</th>
                            <th scope="col">Name</th>
                            <th scope="col">Designation</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                         </tr>
                      </thead>
                      <tbody>
                         @foreach ($testimonials as $key => $value)
                         <tr>
                            <th scope="row">{{ $key + 1 }}</th>
                            <td>{{ $value->name }}</td>
                            <td>{{ $value->designation }}</td>
                            <td><span class="badge badge-primary">{{ $value->status }}</span></td>
                            <td>
                               <a href="{{ route('admin.testimonials.edit', $value->id) }}"><span class="badge badge-primary">Edit</span></a>
                               <a onclick="deleteData('{{ route('admin.testimonials.delete', $value->id) }}')"  ><span class="badge badge-danger">Delete</span></a>
                            </td>
                         </tr>
                         @endforeach
                      </tbody>
                   </table>
                </div>
             </div>
          </div>
       </div>
       <div class="footer-wrap pd-20 mb-20 card-box">
          DeskApp - Bootstrap 4 Admin Template By <a href="https://github.com/dropways" target="_blank">Ankit Hingarajiya</a>
       </div>
    </div>
 </div>
