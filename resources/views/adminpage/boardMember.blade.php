
@extends('layouts.admin')

@section('content')
<script>
	$('.datepicker').datepicker();
</script>

<div class="padding">
	<div class=" card">
	Board Member
	</div>
	<br>
	<div class="card">
		<table class="table table-hover">
		  <thead class="table-dark">
		   <th>Name</th>
		   <th>Designation</th>
		   <th>Year Joined</th>
		   <th>Action</th>
		  </thead>
		  <tbody>
		     @foreach($boardmember as $data)
		    <tr >
		    	<td>{{ $data->name }}</td>
		    	<td>{{ $data->designation }}</td>
		    	<td>{{ $data->year }}</td>
		    	<td>
                    <div class="btn-group btn-group-sm">
				        <a class="btn btn-xs  btn-info" onclick="edit({{ $data }})"><i class="fas fa-edit">Edit</i></a>
				        <a class="btn btn-xs btn-danger" onclick="deleteData({{ $data->id }})"><i class="fas fa-trash-alt">Delete</i></a>
				      
				    </div>
		    	</td>
		    </tr>
		    @endforeach
		  </tbody>
		</table>
	</div>
	<button type="button" class="floatingButton" data-toggle="modal" data-target="#boardModal">&nbsp<i class="icon-plus menu-icon">&nbsp</i></button>
	
</div>

<div id="boardModal" id="board-modal" class="modal fade" role="dialog" data-backdrop="static">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
      	<h5 class="modal-title">
      		<strong>Add Board Member </strong>
      	</h5>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
      	<form  method="post" enctype="multipart/form-data">
      	 {{ csrf_field() }}
      		<input type="hidden" id="id" name="id">
        	<input type="text" id="name" name="name" class="form-control" placeholder="Name" required ><br>
        	<input type="text" id="designation" name="designation" class="form-control" placeholder="Designation" required ><br>

        	<input type="date" id="year" name="year" class="form-control datepicker" placeholder="Year Joined" required ><br>
        	
        	<textarea id="descriptions" class="materialize-textarea" name="descriptions"></textarea><br>
        	<script>
                CKEDITOR.replace( 'descriptions' );
            </script>
         
         	<label>Image<span class="text-danger">*</span></label> &nbsp; &nbsp; &nbsp; &nbsp;
			<input type="file" name="fileupload">
      </div>
      <div class="modal-footer">
        <input type="submit" name="" class="btn btn-success" onclick="saveOrUpdate()" >
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
      </form>
    </div>

  </div>
</div>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript">

	function saveOrUpdate() {
		let name = $("#name").val();
      	let id = $("#id").val();
      	let designation = $("#designation").val();
      	let descriptions = $("#descriptions").val();
      	let year = $("#year").val();

      	alert(designation);

      	$.ajax({
	        url: "saveBoardMember",
	        type:"POST",
	        data:{
	          name:name,
	          id:id,
	          designation:designation,
	          descriptions:descriptions,
	          year: year
	        },
	        success:function(response){
	          if(response) {
	            alert("data Save Succesfully.")
	          }
	        },
       });
	}
	
    function edit(data) {
    	$('#boardModal').modal('show');
    	$("#id").val(data.id);
    	$("#name").val(data.name);
    	$("#designation").val(data.designation);
    	$("#year").val(data.year);

    	CKEDITOR.instances['descriptions'].setData(data.descriptions);
    	
    }

    function deleteData(id){
    	let url = "{{ route('deleteDetails', ':id') }}";
	    url = url.replace(':id', id);
	    // document.location.href=url;

	    swal({
		  title: "Are you sure?",
		  text: "You won't be able to revert this!",
		  icon: "warning",
		  buttons: true,
		  dangerMode: true,
		})
		.then((willDelete) => {
		  if (willDelete) {
		  	document.location.href=url;
		    swal("Data deleted successfully.", {
		      icon: "success",
		    });
		  }
		});
    }
</script>
@endsection



