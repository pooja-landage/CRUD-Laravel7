<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title ">Product Table</h4>
              <p class="card-category"> Here is Product List</p>
            </div>
            <div class="card-body">
            
            <a  class="btn btn-primary" href={{route('product.form')}} >{{__('Add Record')}}</a><br/>
           
              <div class="table-responsive">
                <table class="table">
                  <thead class=" text-primary">
                  <th scope="col">ID</th>
                  <th scope="col">Name</th>
                 
                  <th scope="col">Actions</th>
                  </thead>
                  <tbody>
                  @foreach($data as $d)

                  <tr>

                  <th scope="row">{{$d->id}}</th>
                  <td>{{$d->name}}</td>
                  <td><a class="btn btn-primary" href={{route('product.form.edit',$d->id)}}>Edit</a>
                    <a class="btn btn-primary" href={{route('product.form.delete',$d->id)}} onclick="alert('Successfully Deleted!')">Delete</a>
                  </td>  
                  </tr>
                   @endforeach  
                </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        
        </div>    