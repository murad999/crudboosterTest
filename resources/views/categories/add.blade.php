<!-- First, extends to the CRUDBooster Layout -->
@extends('crudbooster::admin_template')
@section('content')
  <!-- Your html goes here -->
  <div class='panel panel-default'>
    <div class='panel-heading'>Add Form</div>
    <div class='panel-body'>
      <form method='POST' action='{{CRUDBooster::mainpath('add-save')}}'>
        <div class='form-group'>
          <label>Category Name</label>
          <input type='text' name='name' required class='form-control'/>
        </div>
      </form>
    </div>
    <div class='panel-footer'>
      <input type='submit' class='btn btn-primary' value='Save'/>
    </div>
  </div>
@endsection