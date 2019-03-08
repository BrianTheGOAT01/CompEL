<header class="bp-header cf">
    <h1 class="bp-header__title black">Statistics</h1>
    <p class="bp-header__desc peterriver">Here's the statistics of the file you uploaded </p>
</header>

<div class="body_content">
	
	<div class="inline-b">
		<p class="inline-b">Sort by</p> &nbsp;
		<div class="sel sel--black-panther montserrat inline-b">
	    	<select name="select-profession" id="select-profession" class="montserrat">
		    <option value="" disabled>Select Category</option>
		    <option value="hacker">Hacker</option>
		    <option value="gamer">Gamer</option>
		    <option value="developer">Developer</option>
		    <option value="programmer">Programmer</option>
		    <option value="designer">Designer</option>
		  </select>
		</div>
	</div>

	<table  class="table">
		<thead>
			<th>Name</th>
			<th>Uploaded By</th>
			<th>Date Uploaded</th>
			<th>Downloaded</th>
		</thead>
		<tbody>
			@for($i = 0; $i<= 9; $i++)
			<tr>
				
				<td>as</td>
				<td>as</td>
				<td>as</td>
				<td>as</td>
				
			</tr>
			@endfor
		</tbody>
	</table>
	
</div>