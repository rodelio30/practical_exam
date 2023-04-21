<h5>Entries List</h5>
  <table id="example" class="table" style="width:100%">
  <thead>
      <tr>
          <th>Name</th>
          <th>Description</th>
          <th>Reason</th>
          <th>Target Date</th>
          <th>Completed Date</th>
          <th>Action</th>
      </tr>
  </thead>
  <tbody>
<?php 
  $result = mysqli_query($conn, "select id, name, description, reason, target_date, completed_date from entries ORDER BY id") or die("Query for latest reservist....");
  while (list($id, $name, $description, $reason, $target_date, $completed_date) = mysqli_fetch_array($result)) { 
    echo "
    <form method='post' action='entries_query.php'>
      <tr>	
          <td>
            <input type='text' class='form-control' value='$name' id='name' name='name'>
          </td>
          <td>
            <input type='text' class='form-control' value='$description' id='description' name='description'>
          </td>
          <td>
            <input type='text' class='form-control' value='$reason' id='reason' name='reason'>
          </td>
          <td>
            <input type='date' class='form-control' value='$target_date' id='target_date' name='target_date'>
          </td>
          <td>
            <input type='date' class='form-control' value='$completed_date' id='completed_date' name='completed_date'>
          </td>
            <input type='hidden'value='$id' id='id' name='id'>
          <td>
            <button type='submit' class='btn btn-outline-primary' name='update'>Update</button>
            |
            <button type='submit' class='btn btn-outline-danger' name='delete'>Delete</button>
          </td>
      </tr>
    </form>
    ";

  }
?>
</tbody>
<tfoot>
  <tr>
  </tr>
</tfoot>
</table>
<hr>
<main class="d-flex w-100 ">
  <div class="container d-flex flex-column">
      <div class="row mt-2">
        <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
          <div class="d-table-cell align-middle">
            <h6>Add new Entries</h6>
            <div class="card">
              <div class="card-body">
                <form method="post" action="entries_query.php" autocomplete="off">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Name" required>
                  </div>
                  <br>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Description</label>
                    <input type="text" class="form-control" id="description" name="description" placeholder="Enter Description" >
                  </div>
                  <br>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Reason</label>
                    <input type="text" class="form-control" id="reason" name="reason" placeholder="Enter Your Reason" >
                  </div>
                  <br>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Target Date</label>
                    <input type="date" class="form-control" id="target_date" name="target_date" >
                  </div>
                  <br>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Completed Date</label>
                    <input type="date" class="form-control" id="completed_date" name="completed_date">
                  </div>
                  <br>
                      <button type="submit" class="btn btn-outline-success" name="submit" style="float: right">Add</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</main>