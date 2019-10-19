

<table class="table table-striped table-bordered" id="drivers">
	<thead>
		<tr>
			<th scope="col">Person Id</th>
			<th scope="col">Person Name</th>
      <th scope="col">Civil Status</th>
      <th scope="col">Address</th>
      <th scope="col">Gender</th>
      <th scope="col">Age</th>
      <th scope="col">Born</th>
      <th scope="col">Died</th>  
      <th scope="col">Section</th>   
      <th scope="col">Location</th>  
      <th scope="col">Type</th>  
      <th scope="col">Photo</th>
      <th scope="col">GravePic</th>   
      <th scope="col">Options</th> 
		</tr>
	</thead>
<?php
	$sql = "SELECT * FROM cemetery_table_people";
	$result = mysqli_query($conn, $sql);
	while($data = mysqli_fetch_assoc($result)){
?>
		<tr>

			<td><?php echo $data['people_id']; ?></td>
			<td><?php echo $data['first_name'] . ' ' . $data['last_name']; ?></td>
      <td><?php echo $data['civil_status']; ?></td>
      <td><?php echo $data['address']; ?></td>
      <td><?php echo $data['sex']; ?></td>
      <td><?php echo $data['age']; ?></td>
      <td><?php echo $data['borndate']; ?></td>
      <td><?php echo $data['dieddate']; ?></td>
      <td><?php echo $data['categories']; ?></td>
      <td><?php echo $data['location']; ?></td>
      <td><?php echo $data['type']; ?></td>
      <td><?php echo $data['photo']; ?></td>
      <td><?php echo $data['gravepic']; ?></td>


			<td><button class="open-homeEvents btn btn-primary" data-id="<?php echo $data['people_id'] ?>"  data-toggle="modal" data-target="#modalHomeEvents">Update</button></td>
		</tr>
<?php
	}
?>
</table>


<!-- MODAL CONTENT for edit ga libog ko anang modal sho ba-->

<div id="modalHomeEvents" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="height:50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <form method="post" action="controller/ibjt/schedule_controller.php">
        <div class="modal-body">
         <label>Scheduling</label>     
        <input type="hidden" name="driver_id" id="eventId"/>
        </div>
        <input type="time" name="time" class="form-control">
        <input type="date" name="date" class="form-control">
        <div class="modal-footer">
          <input type="submit" class="btn btn-primary" value="Submit" name="submit" style="background-color:rgb(0,30,66); ">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
        </div>
        </form>
      </div>

    </div>
  </div>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script>
$(document).on("click", ".open-homeEvents", function () {
     var eventId = $(this).data('id');
     $('#idHolder').html( eventId );
     $('#eventId').val(eventId);
});	
$(document).ready(function() {
    $('#drivers').DataTable(1);
} );
</script>
