@extends('backend.dashboard')
@section('main_content')
<div class="app-content content menu ">
    <div class="content-wrapper">
      <div class="content-body">
        <!-- Basic form layout section start -->
        <section id="configuration">
          <div class="row">
            <div class="col-12">
              <div class="card rounded pad-20">
                <div class="card-content collapse show">
                  <div class="card-body  card-dashboard">
                    <div class="row">
                      <div class="col-xl-12 col-12">
                      @if(Session::has('message'))
                      <p class="{{Session::get('class')}}">{{Session::get('message')}}</p>
                      @endif
                      <h1 class="pull-left">Add Services</h1>
                      </div>

                      <p>
                        <a class="btn btn-primary" href="{{route('addservice-form')}}"><span class="glyphicon glyphicon-plus"></span> Add Book</a>
                    </p>
                    </div>
                    <div class="clearfix"></div>
                    <div class="maain-tabble table-responsive">
                      <table class="table table-striped table-bordered zero-configuration">
                        <thead>

                          <tr>

                            <th>S.no</th>
                            <th>Service Heading</th>
                            <th>Icon Heading</th>
                            <th>Description</th>
                            <th>Icon Image</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                       @foreach ($ourservices as $overservice)
                       <tr>
                           <td>{{$overservice['id']}}</td>
                            <td>{{$overservice['service_heading']}}</td>
                            <td>{{$overservice['icon_heading']}}</td>
                            <td>{!!$overservice['description']!!}</td>
                            <td>
                               <img src="{{asset('/images/' . $overservice['icon_image'])}}" style="width:80px"  alt="">
                            </td>
                            <td></td>
                            <td><div class="btn-group mr-1 mb-1">
                                <button type="button" class="btn btn-drop-table btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-ellipsis-v"></i></button>
                                <div class="dropdown-menu" >
                                  <a class="dropdown-item" href="#" > <i class="fa fa-eye"></i>View </a>
                                  <a class="dropdown-item" href="{{route('editform-service',$overservice['id'])}}"  > <i class="fa fa-edit"></i>Edit</a>
                                  <a class="dropdown-item" href="{{route('delete',$overservice['id'])}}" > <i class="fa fa-trash"></i>Delete</a></div>
                              </div>
                            </td>
                            @endforeach
                        </tr>

                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <!--main card end-->

              </div>
            </div>
          </div>
        </section>
        <!-- // Basic form layout section end -->
      </div>
    </div>
  </div>

  <!-- ////////////////////////////////////////////////////////////////////////////-->


  <!-- block modal start here-->
  <div class="login-fail-main">
   <div class="featured inner">
     <div class="modal fade bd-example-delete-modal-lg another-modal another-modal-with-buttons delete-modal " tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
       <div class="modal-dialog modal-lgg">
         <div class="modal-content">
             <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
           <div class="payment-modal-main">
             <div class="payment-modal-inner">
               <form action="">
                 <div class="row">
                   <div class="col-12">
                     <img src="images/block-icon.png" class="img-fluid" alt="">
                     <p>Are you sure you want to unblock this user?</p>
                   </div>
                   <div class="col-12 text-center">
                     <button type="button" class="blue-btn mr-1" data-dismiss="modal">No</button>
                    button type="button" class="blue-btn" id="delete-menu">Yes </button>
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

  <!-- block modal end here-->


  <!--confirm block  modal start here-->
  <div class="login-fail-main">
   <div class="featured inner">
     <div class="modal fade confirm-delete-modal another-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
       <div class="modal-dialog modal-lgg">
         <div class="modal-content">
           <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
           <div class="payment-modal-main">
             <div class="payment-modal-inner">
               <form action="">
                 <div class="row">
                   <div class="col-12">
                   <img src="images/check.png" class="img-fluid" alt="">
                     <p>Abc user has been unblocked</p>
                   </div>
                   <div class="col-12 text-center">
                     <button type="button" class="blue-btn" data-dismiss="modal">Got It </button>
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
@stop
