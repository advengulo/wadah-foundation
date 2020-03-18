<?php include 'header.php' ;?>
<?php 
  $data = file_get_contents('user.json');
  $user = json_decode($data, true);

  $user = $user["user"];
?>
<div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-warning">Inaktif</h6>
    </div>
    <div class="card-body">
      <form action="#">

        <div class="form-group row">
          <label class="col-xl-2 offset-xl-3 col-form-label" for="wilayah">Pilih Wilayah : </label>
          <div class="col-xl-4">
            <select class="form-control" name="wilayah" id="selectWilayah">
              <option value="1">Jakarta</option>
              <option value="2">Bandung</option>
              <option value="3">Medan</option>
              <option value="4">Surabaya</option>
            </select>
          </div>
        </div>
        
        <div class="form-group row">
          <label class="col-xl-2 offset-xl-3 col-form-label" for="satuan">Pilih Nama Satuan : </label>
          <div class="col-xl-4">
            <select class="form-control" name="satuan" id="satuan">
              <option value="1">Paud A</option>
              <option value="2">Paud B</option>
              <option value="3">Paud C</option>
              <option value="4">Paud D</option>
            </select>
          </div>
        </div>
      </form>
      <div class="table-responsive">
     
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          
        <thead>
            <tr id="search-top">
              <th>ID</th>
              <th>Nama</th>
              <th>Status</th>
              <th></th>
            </tr>
            
            <tr>
              <th>ID</th>
              <th>Nama</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>

          <tbody>
            <?php foreach ($user as $row): ?>
            <tr>
              <td><?= $row["id"] ?></td>
              <td><?= $row["nama"] ?></td>
              <td><?php if($row["status"] == "Inaktif") echo'<span class="badge badge-danger">' . $row["status"] . '</span>'; else echo $row["status"]; ?> </td>
              <td class="text-center">
                <i class="fa fa-user" style="color:#00838F"></i>
                <i class="fas fa-edit" style="color:#FDD835"></i>
                <i class="fas fa-trash-alt" style="color:#D32F2F"></i>
              </td>
            </tr>
            <?php endforeach; ?>
            
          </tbody>
          
        </table>
       
      </div>
    </div>
  </div>

  <?php include 'footer.php' ;?>