<div class="container"   >
    <div class="row">
    <div class="offset-2 col-lg-8 col-md-8">
    
    <form action={{route('category.form.update', $data->id)}} method="POST">
    <input type="hidden" name="_method" value="PUT">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="form-group" >
        <label for="exampleInputName">Name</label>
        <input type="text" id="Name" name="name"  class="form-control" aria-describedby="NameHelp" placeholder="Enter Name " value="{{ old('name') }}"required/>
        <small id="Name" class="form-text text-muted"></small>
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
      
    
    </form>
    </div>
    </div>
    </div>