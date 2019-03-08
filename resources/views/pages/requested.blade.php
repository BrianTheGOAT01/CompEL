<header class="bp-header cf">
    <h1 class="bp-header__title black">Requested</h1>
    <p class="bp-header__desc peterriver">Here's the literature that users requested</p>
</header>

<div class="body_content">

	<h1 class="nothing center">There's no any suggestion yet</h1>

	<table  class="table">
		<thead>
			<th>Name</th>
			<th>Requested By</th>
			<th>Date Requested</th>
			<th>Action</th>
		</thead>
		<tbody>
			@for($i = 0; $i<= 9; $i++)
			<tr>
				
				<td>as</td>
				<td>as</td>
				<td>as</td>
				<td>
					<button class="btn btn-primary">Accept</button>
					<button class="btn btn-danger">Reject</button>
				</td>
				
			</tr>
			@endfor
		</tbody>
	</table>
</div>