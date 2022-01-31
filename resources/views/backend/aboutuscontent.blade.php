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
                <h1 class="pull-left">About Site Page</h1>

              </div>
              <form action="{{route('process-aboutus')}}" method="post" enctype="multipart/form-data">

                @csrf
                <div class="row">
                  <div class="col-12 form-group">
                    <label for="">Aboutus heading</label>
                    <input type="text" contenteditable="true" spellcheck="true" name="aboutus_h1" class="form-control" value="{{isset($dataviews[0]['aboutus_h1'])?$dataviews[0]['aboutus_h1']:NULL}}">
                  </div>

                  <div class="col-12 form-group">
                    <label for="">Aboutus heading Two</label>
                    <input type="text" contenteditable="true" spellcheck="true" name="aboutus_h2" class="form-control" value="{{isset($dataviews[0]['aboutus_h2'])?$dataviews[0]['aboutus_h2']:NULL}}">
                  </div>

                  <div class="col-12 form-group">
                    <label>Aboutus paragraph</label>
                  </div>
                  <textarea class="editor form-control" rows="3" id="aboutus_p1" name="aboutus_p1" required>{!!isset($dataviews[0]['aboutus_p1'])?$dataviews[0]['aboutus_p1']:NULL!!}</textarea>

                  <div class="col-12 form-group">
                    <label>Aboutus paragraph TWO</label>
                  </div>
                  <textarea class="editor form-control" rows="3" id="aboutus_p2" name="aboutus_p1" required>{!!isset($dataviews[0]['aboutus_p1'])?$dataviews[0]['aboutus_p1']:NULL!!}</textarea>

                  <div class="col-12 form-group">
                    <label for="">Aboutus Content Image</label>
                    <div class="attached"> <img src="{{asset('images/'.$a=isset($dataviews[0]['aboutus_content_img'])?$dataviews[0]['aboutus_content_img']:NULL)}}" style="width:80px" alt="">
                      <button name="file" type="button" class="camera-btn" onclick="document.getElementById('upload').click()"><i class="fa fa-camera"></i></button>
                      <input type="file" name="aboutus_content_img" id="upload">
                    </div>
                  </div>

                  <div class="col-12 form-group">
                    <label for="">Aboutus Content Image</label>
                    <div class="attached"><img src="{{asset('images/'.$a=isset($dataviews[0]['aboutus_slider_img'])?$dataviews[0]['aboutus_slider_img']:NULL)}}" style="width:80px" alt="">
                      <button name="file" type="button" class="camera-btn" onclick="document.getElementById('uploadimg').click()"><i class="fa fa-camera"></i></button>
                      <input type="file" name="s_image" id="uploadimg">
                    </div>
                  </div>

                  <div class="box-footer">
                    <input type="hidden" name="id" value="<?php if(isset($dataviews[0]['id'])){ echo $dataviews[0]['id'];}?>">
                    <button type="submit" class="btn btn-primary"><?php if(isset($dataviews[0]['id'])){echo "UPDATE";}else{echo "Submit";}?></button>
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
