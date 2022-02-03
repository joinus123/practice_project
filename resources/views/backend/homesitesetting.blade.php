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
                            @if(Session::has('message'))
                            <p class="{{Session::get('class')}}">{{Session::get('message')}}</p>
                            @endif
                         <div class="col-12 d-flex justify-content-between align-items-center">
                        <h1 class="pull-left">Home Site Page</h1>

                        </div>
                        <form action="{{route('register-home')}}" method="post"  enctype="multipart/form-data">
                            @csrf
                            <div class="box-body">
                                <div class="form-group">
                                    <label>Slider Paragraph</label>
                                    <textarea class="editor form-control" rows="3" id="section_one_text"    name="slider_p" required>{!! isset($homepage[0]['slider_p'])?$homepage[0]['slider_p']:NULL !!}
                                    </textarea>
                                 </div>
                                </div>


                           <div class="row">
                             <div class="col-12 form-group">
                               <label for="">Slider Heading</label>
                               <input type="text" contenteditable="true" spellcheck="true" name="slider_h" class="form-control" value="{{ isset($homepage[0]['slider_h'])?$homepage[0]['slider_h']:NULL}}">
                             </div>

                             <div class="col-12 form-group">
                                <label for="">Service Heading</label>
                                <input type="text" contenteditable="true" spellcheck="true" name="service_h"  value="{{ isset($homepage[0]['service_h'])?$homepage[0]['service_h']:NULL}}"    class="form-control" >
                              </div>

                              <div class="col-12 form-group">
                                <label for="">Donation Heading One</label>
                                <input type="text" contenteditable="true" spellcheck="true"    value="{{isset($homepage[0]['donation_h1'])?$homepage[0]['donation_h1']:NULL}}" name="donation_h1" class="form-control" >
                              </div>

                              <div class="col-12 form-group">
                                <label for="">Donation Heading Two</label>
                                <input type="text" contenteditable="true" spellcheck="true"   value="{{isset($homepage[0]['donation_h2'])?$homepage[0]['donation_h2']:NULL}}"   name="donation_h2" class="form-control" >
                              </div>

                              <div class="col-12 form-group">
                                <label for="">Footer Logo Heading</label>
                                <input type="text" contenteditable="true" spellcheck="true"    value="{{isset($homepage[0]['footer_logo_h'])?$homepage[0]['footer_logo_h']:NULL}}"       name="footer_logo_h" class="form-control" >
                              </div>


                              <div class="col-12 form-group">
                                <label for="">Copyright Text</label>
                                <input type="text" contenteditable="true" spellcheck="true" name="copyright_text"  value="{{isset($homepage[0]['copyright_text'])?$homepage[0]['copyright_text']:NULL}}"  class="form-control" >
                              </div>


                             <div class="col-12 form-group">
                                <label for="">Header Logo</label>
                               <div class="attached"> <img src="{{asset('images/'.$a=isset($homepage[0]['header_logo'])?$homepage[0]['header_logo']:Null)}}" style="width:80px"  alt="">
                                 <button name="file" type="button"  class="camera-btn" onclick="document.getElementById('upload').click()"><i class="fa fa-camera"></i></button>
                                 <input type="file" name="header_logo" id="upload"  name="file">
                               </div>
                             </div>

                             <div class="col-12 form-group">
                                <label for="">Slider Image</label>
                               <div class="attached"> <img src="{{asset('images/'.$a=isset($homepage[0]['slider_image'])?$homepage[0]['slider_image']:Null)}}" style="width:80px" alt="">
                                 <button name="file" type="button"  class="camera-btn" onclick="document.getElementById('upload').click()"><i class="fa fa-camera"></i></button>
                                 <input type="file" name="slider_image" id="upload"  name="file">
                               </div>
                             </div>


                             <div class="col-12 form-group">
                                <label for="">Footer Logo</label>
                               <div class="attached"> <img src="{{asset('images/'.$a=isset($homepage[0]['footer_logo'])?$homepage[0]['footer_logo']:NULL)}}" style="width:80px" alt="">
                                 <button name="file" type="button"  class="camera-btn" onclick="document.getElementById('upload').click()"><i class="fa fa-camera"></i></button>
                                 <input type="file" name="footer_logo" id="upload" name="file">
                               </div>
                             </div>

                             <div class="box-footer">
                                <input type="hidden" name="id" value="<?php if(isset($homepage[0]['id'])){ echo $homepage[0]['id'];}?>">
                                <button type="submit" class="btn btn-primary"><?php if(isset($homepage[0]['id'])){echo "UPDATE";}else{echo "Submit";}?></button>
                                <a href="" class="btn btn-danger">Dashboard</a>
                                <a href="" class="btn btn-info">Cancel</a>
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





























