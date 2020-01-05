<!-- First, extends to the CRUDBooster Layout -->
@extends('crudbooster::admin_template')
@section('content')
  <!-- Your html goes here -->
  <div class='panel panel-default'>
    <div class='panel-heading'>Add Form</div>
    <div class='panel-body'>
      <form method='post' action='{{CRUDBooster::mainpath('add-save')}}'>
        <div class='form-group'>
          <label>Products Name</label>
          <input type='text' name='name' required class='form-control'/>
        </div>
         <div class="form-group">
            <label for="category_id">Select Category</label>
            <select name="category_id" class="form-control">
              <option value="default">Select Category</option>
              @foreach($result as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
              @endforeach
            </select>
          </div>
          
        <div class='panel-footer'>
          <input type='submit' class='btn btn-primary' value='Save changes'/>
        </div>
      </form>
    </div>
  </div>
@endsection