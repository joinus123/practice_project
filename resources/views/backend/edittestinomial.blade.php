
@extends('backend.dashboard')
@section('main_content')
<div class="app-content content add-item admin-profile">
    <div class="content-wrapper">
      <div class="content-body">
        <!-- Basic form layout section start -->
        <section id="configuration">
          <div class="row">
                      <div class="col-lg-6 offset-lg-3 col-12">
                        <div class="box">
                         <div class="col-12 d-flex justify-content-between align-items-center">
                        <h1 class="pull-left">Edit Testinomial</h1>

                        </div>
                        <form action="{{route('update-testinomial',$edittestinomial['id'])}}" method="post"  enctype="multipart/form-data">
                            @csrf
                           <div class="row">

                             <div class="col-12 form-group">
                               <label for="">Client Name </label>
                               <input  type="text" contenteditable="true" spellcheck="true" value="{{$edittestinomial->client_name}}"  name="clinet_name" class="form-control">
                             </div>

                              <div class="col-12 form-group">
                               <label> Description</label>
                               <textarea class="editor form-control" rows="3"   id="section_one_box_two_text"  name="description" required>{!!$edittestinomial->description!!}
                                 </textarea>
                            </div>

                             <div class="col-12 form-group">
                               <div class="attached"> <img src="{{asset('/images/'.$edittestinomial->client_image)}}" style="width:80px" alt="">
                                 <button name="file" type="button"  class="camera-btn" onclick="document.getElementById('upload').click()"><i class="fa fa-camera"></i></button>
                                 <input type="file" name= "client_image" id="upload" name="file">
                               </div>
                             </div>
                               <div class="col-12 form-group text-center">
                               <button type="submit" class="blue-btn w-100" >Update</button>
                             </div>
                           </div>
                         </form>
                        </div>

                        </div>
                      </div>
                    </div>
        </section>
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
   <button type="button" class="blue-btn" id="delete-menu">Yes </button>
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





























