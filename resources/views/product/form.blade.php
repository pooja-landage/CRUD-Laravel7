<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title">Add Blog</h4>
              <p class="card-category">Complete your profile</p>
            </div>
            <div class="card-body">
            
              <form action={{route('product.form.submit')}} method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                <div class="col-md-12">
                    <label class="bmd-label-floating"></label>
                    <div class="form-group">
                            @foreach($categories as $category)

                            <label><input type="checkbox" name="category_id" value="{{$category->id}}">{{$category->name}}</label>
                            
                            @endforeach
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">Name</label>
                      <input type="text" id="Name" name="name"  class="form-control" aria-describedby="TiNametleHelp"  value="{{ old('name') }}"required/>
                      <small id="Name" class="form-text text-muted"></small>
                    </div>
                  </div>
                  
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">Price</label>
                      <input type="text" id="Price" name="price"  class="form-control" aria-describedby="PriceHelp"  value="{{ old('price') }}"required/>
                      <small id="Price" class="form-text text-muted"></small>
                    </div>
                  </div>
                  
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">Description</label>
                      <textarea type="text" id="Description" name="description" class="form-control" ></textarea>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">Photo</label>
                      <!-- <input type="text" class="form-control"> -->
                    </div>
                  </div>
                  
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                     <input id="customerFile" name="photo" type="file" class="custom-file-input" >
                     <label for="customerFile"class="custom-file-label" >Choose File</label></div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary pull-right">Submit</button>
                <div class="clearfix"></div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>