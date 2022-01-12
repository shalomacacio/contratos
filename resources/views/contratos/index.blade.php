@extends('layouts.admin')

@section('content')
<!-- /page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Novo Contrato</h3>
      </div>
    </div>
    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
          <div class="x_title">
            <h2>Contrato <small>different form elements</small></h2>
            <div class="clearfix"></div>
          </div>


          <div class="x_content">
            <br />
            <form class="form-label-left input_mask">

              <div class="col-md-3 col-sm-3  form-group has-feedback">
                <input type="text" class="form-control has-feedback-left" id="nome" placeholder="Nome">
                <span class="glyphicon glyphicon-list-alt form-control-feedback left" aria-hidden="true"></span>
              </div>

              <div class="col-md-3 col-sm-3  form-group has-feedback">
                <input type="text" class="form-control has-feedback-left" id="numero" placeholder="Número">
                <span class="glyphicon glyphicon-list-alt form-control-feedback left" aria-hidden="true"></span>
              </div>

              <div class="col-md-3 col-sm-3  form-group has-feedback">
                <input type="text" class="form-control has-feedback-left" id="tipo" placeholder="Tipo Contrato">
                <span class="glyphicon glyphicon-list-alt form-control-feedback left" aria-hidden="true"></span>
              </div>

              <div class="col-md-3 col-sm-3  form-group has-feedback">
                <input type="text" class="form-control has-feedback-left" id="status" placeholder="Status">
                <span class="glyphicon glyphicon-list-alt form-control-feedback left" aria-hidden="true"></span>
              </div>

              <div class="col-md-3 col-sm-3  form-group has-feedback">
                <input type="text" class="form-control has-feedback-left" id="dt_inicio" placeholder="Data Inicial">
                <span class="glyphicon glyphicon-list-alt form-control-feedback left" aria-hidden="true"></span>
              </div>

              <div class="col-md-3 col-sm-3  form-group has-feedback">
                <input type="text" class="form-control has-feedback-left" id="dt_fim" placeholder="Duração do Contrato">
                <span class="glyphicon glyphicon-list-alt form-control-feedback left" aria-hidden="true"></span>
              </div>
              
              <div class="col-md-6 col-sm-6  form-group has-feedback">
                <input type="text" class="form-control" id="inputSuccess3" placeholder="Last Name">
                <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
              </div>

              <div class="col-md-6 col-sm-6  form-group has-feedback">
                <input type="email" class="form-control has-feedback-left" id="inputSuccess4" placeholder="Email">
                <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
              </div>

              <div class="col-md-6 col-sm-6  form-group has-feedback">
                <input type="tel" class="form-control" id="inputSuccess5" placeholder="Phone">
                <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
              </div>

              <div class="form-group row">
                <label class="col-form-label col-md-3 col-sm-3 ">Default Input</label>
                <div class="col-md-9 col-sm-9 ">
                  <input type="text" class="form-control" placeholder="Default Input">
                </div>
              </div>

              <div class="form-group row">
                <label class="col-form-label col-md-3 col-sm-3 ">Disabled Input </label>
                <div class="col-md-9 col-sm-9 ">
                  <input type="text" class="form-control" disabled="disabled" placeholder="Disabled Input">
                </div>
              </div>

              <div class="form-group row">
                <label class="col-form-label col-md-3 col-sm-3 ">Read-Only Input</label>
                <div class="col-md-9 col-sm-9 ">
                  <input type="text" class="form-control" readonly="readonly" placeholder="Read-Only Input">
                </div>
              </div>

              <div class="form-group row">
                <label class="col-form-label col-md-3 col-sm-3 ">Date Of Birth <span class="required">*</span>
                </label>
                <div class="col-md-9 col-sm-9 ">
                  <input class="date-picker form-control" placeholder="dd-mm-yyyy" type="text" required="required" type="text" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
                  <script>
                    function timeFunctionLong(input) {
                      setTimeout(function() {
                        input.type = 'text';
                      }, 60000);
                    }
                  </script>
                </div>
              </div>

              <div class="ln_solid"></div>

              <div class="form-group row">
                <div class="col-md-9 col-sm-9  offset-md-3">
                  <button type="button" class="btn btn-primary">Cancel</button>
                  <button class="btn btn-primary" type="reset">Reset</button>
                  <button type="submit" class="btn btn-success">Submit</button>
                </div>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /page content -->
  @endsection