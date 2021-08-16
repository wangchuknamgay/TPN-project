@extends('layouts.admin')

@section('content')
<div class="padding">
	<div class=" card">
	Announcement | History 
	</div>
	<br>
	<div class="card">
		<table class="table table-dark table-hover">
		  <thead>
		   <th>Title</th>
		   <th>Files</th>
		   <th>Type</th>
		   <th>Description</th>
		   <th>Action</th>
		  </thead>
		  <tbody>
		    @foreach($announcements as $post)
		    <tr>
		    	<td>{{ $post->title }}</td>
		    	<td>
		    		<?php if($post->files == ""){echo "- Null -";}else{
		    		?>
		    		{{ $post->files }}
		    		<?php } ?>	
		    	</td>
		    	<td>{{ $post->type }}</td>
		    	<td><?php echo $post->descriptions; ?></td>
		    	<td>edit / <i class="icon-trash menu-icon"></i></td>
		    </tr>
		    @endforeach
		  </tbody>
		</table>
	</div>
	<button type="button" class="floatingButton" data-toggle="modal" data-target="#announcementModal">&nbsp<i class="icon-plus menu-icon">&nbsp</i></button>
	
</div>

<div id="announcementModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
      	<form action="{{ url('createannouncement') }}" method="post" enctype="multipart/form-data">
      	 {{ csrf_field() }}
        	<input type="text" name="title" class="form-control" placeholder="Title" required ><br>
        	<textarea name="descriptions" required></textarea><br>
        	<script>
                CKEDITOR.replace( 'descriptions' );
            </script>
            &nbsp &nbsp
            <input class="form-check-input" type="radio" name="type" id="general" value="general" checked=""><label class="form-check-label">General &nbsp &nbsp &nbsp</label>
			<input class="form-check-input" type="radio" name="type" id="vacancy" value="vacancy"><label class="form-check-label">Vacancy &nbsp &nbsp &nbsp</label>
			<input class="form-check-input" type="radio" name="type" id="tender" value="tender"><label class="form-check-label">Tender</label><br><br>
			<input type="file" name="fileupload">
      </div>
      <div class="modal-footer">
        <input type="submit" name="" class="btn btn-success" >
      </div>
      </form>
    </div>

  </div>
</div>
@endsection
