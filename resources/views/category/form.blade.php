<div class="card-body">
    <form action={{route('category.submit')}} method="POST">
        @csrf
      <div class="row">
          
      <div class="row">
          
          <div class="col-md-6">
            <div class="form-group">
              <label class="bmd-label-floating">Name</label>
              <input type="text" id="Name" name="name"  class="form-control" aria-describedby="NameHelp"  value="{{ old('name') }}"required/>
              <small id="Name" class="form-text text-muted"></small>
            </div>
          </div>
          {{-- <div class="col-md-4">
            <div class="form-group">
              <label class="bmd-label-floating">slug</label>
              <input type="text" id="Slug" name="slug"  class="form-control" aria-describedby="slugHelp"  value="{{ old('slug') }}"required/>
              <small id="Slug" class="form-text text-muted"></small>
            </div>
          </div> --}}
        </div>
        <button type="submit" class="btn btn-primary pull-right">Summit</button>
        <div class="clearfix"></div>
      </form>
    </div>