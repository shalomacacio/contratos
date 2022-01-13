@extends('layouts.admin')

@section('content')
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Contratos</h3>
      </div>
    </div>

    <div class="clearfix"></div>

    <div class="">

      <div class="col-md-12 col-sm-12  ">
        <div class="x_panel">
          <div class="x_title">
            <h2><i class="fa fa-bars"></i> Novo Contrato</h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            
          <form class="form-label-left input_mask">
            <div class="col-md-3 col-xs-3">
              <!-- required for floating -->
              <!-- Nav tabs -->
              <div class="nav nav-tabs flex-column  bar_tabs" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link active" id="v-pills-contrato-tab" data-toggle="pill" href="#v-pills-contrato" role="tab" aria-controls="v-pills-contrato" aria-selected="true">Home</a>
                <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</a>
                <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</a>
                <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a>
              </div>
            </div>

            <div class="col-md-9 col-xs-9">
              <!-- Tab panes -->

                <div class="tab-content" id="v-pills-tabContent">
                  <div class="tab-pane fade show active" id="v-pills-contrato" role="tabpanel" aria-labelledby="v-pills-contrato-tab">@include('contratos._contrato')</div>
                  <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">... content</div>
                  <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...content</div>
                  <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...content</div>
                </div>
              </div>
          </form>

            <div class="clearfix"></div>

          </div>
        </div>
      </div>
  </div>
  <div class="clearfix"></div>
</div>
<!-- /page content -->
@endsection