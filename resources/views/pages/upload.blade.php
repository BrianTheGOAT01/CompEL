<header class="bp-header cf">

	<div class="col-sm-8 inline-b">
		<h1 class="bp-header__title black">Upload</h1>
		<p class="bp-header__desc peterriver">add new literature </p>
	</div>

</header>

<div class="content">

<form enctype="multipart/form-data" action="#" method="post">
	<div class="upload-c1 upload-grid">

		<div class="upload-grid-item1">
			<div class="google_group">      
		      <input class="google_input" type="text" required>
		      <span class="highlight"></span>
		      <span class="bar"></span>
		      <label class="google_label">Title</label>
		    </div>

		    <div class="google_group">      
		      <input class="google_input" type="text" required>
		      <span class="highlight"></span>
		      <span class="bar"></span>
		      <label class="google_label">Author</label>
		    </div>

		    <div class="google_group">      
		      <textarea rows="4" cols="50" class="google_input"></textarea>
		      <span class="highlight"></span>
		      <span class="bar"></span>
		      <label class="google_label">Details</label>
		    </div>

		     
			{{-- <ul class="colors">
			  <span style="font-family: sans-serif; color:#777">Tag Color:</span>
			  <li style="background: #F95;"></li>  
			  <li style="background: #6AD;"></li>
			  <li style="background: #E77;"></li>
			  <li style="background: #6C7;"></li>
			  <li style="background: #AAA;"></li>
			  
			</ul> --}}


			{{-- <h1 id="title">tags<span>.css</span></h1> --}}

			<p>Genre</p>
			<label for="tag-typer">
			<div id="tags">
			  <input id="tag-typer" class="hidden" type="text" placeholder="Add tag..."/>
			  
			</div>
			</label>

		    <button class="file-upload-btn" type="button" data-toggle="modal" data-target="#selectGenreUpload">Select</button>
		</div>

		<div class="upload-grid-2">
			
			<div class="file-upload">
			  <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Upload Cover Photo</button>

			  <div class="image-upload-wrap">
			    <input class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" />
			    <div class="drag-text">
			      <h3>Drag and drop a file or select Upload Cover Photo</h3>
			    </div>
			  </div>
			  <div class="file-upload-content">
			    <img class="file-upload-image" src="#" alt="your image" />
			    <div class="image-title-wrap">
			      <button type="button" onclick="removeUpload()" class="remove-image">Remove <span class="image-title">Uploaded Image</span></button>
			    </div>
			  </div>
			</div>
			<br>
			<div class="custom-file-upload-video">
			    <label for="file">Upload Video for Tutorial: </label> 
			    <input type="file" id="file" name="myfiles[]" multiple />
			</div>


		</div>


    </div>
</form>

</div>

