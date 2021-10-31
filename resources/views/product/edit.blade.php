<div class="container"   >
    <form action={{route('product.form.update', $data->id)}} method="POST">
    <input type="hidden" name="_method" value="PUT">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
    
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
            
            
      
      <button type="submit" class="btn btn-primary">Submit</button>
      
    
    </form>
    </div>