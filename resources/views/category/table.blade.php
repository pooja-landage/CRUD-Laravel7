<div class="card-body">
    <div class="table-responsive">
      <table class="table">
       <a  class="btn btn-primary" href={{route('category.form')}} >{{__('Add Record')}}</a><br/><br/>
        <br/>
        <thead class=" text-primary">
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Actions</th>
        @foreach($data as $d)

          <tr>
          <th >{{$d->id}}</th>
          <td>{{$d->name}}</td>
          <td><a class="btn btn-primary" href={{route('category.edit',$d->id)}}>Edit</a>
            <a class="btn btn-primary" href={{route('category.form.delete',$d->id)}} onclick="alert('Successfully Deleted!')">Delete</a></td>  
          </tr>

        @endforeach
        </tbody>
      </table>
    </div>
  </div>