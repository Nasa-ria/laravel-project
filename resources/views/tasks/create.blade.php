
@extends('layouts.app') 

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add tasks') }}  </div> 
            </div>
        </div>
    </div>
</div>

<form> 
  <div class="form-group">
    <label for="tittle">title</label>
    <input type="text" class="form-control" id="title" placeholder="title of your task">
  </div>

  <div class="form-group">
    <label for="body">body</label>
    <input type="text" class="form-control" id="body" placeholder="what's your task about">
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="Email Address">Email</label>
      <input type="email" class="form-control" id="Email Address">
     </div>
      </div>

      <div class="form-group">
    <label for="mobile number">mobile number</label>
    <input type="text" class="form-control" id="mobile number" placeholder="mobile number">
  </div>

  <div>
    <br>
             <button type="submit" class="btn btn-primary">Save</button>
</div>
     
</form>

                  </div>
              </div>
         </div>
     </div>
</div>

@endsection
 