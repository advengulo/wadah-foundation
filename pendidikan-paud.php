<?php include 'header.php' ;?>
<?php 
  $data = file_get_contents('wilayah-paud.json');
  $wilayah_paud = json_decode($data, true);

  $wilayah_pauds = $wilayah_paud["data-paud"];
?>
<div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data PAUD</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
     
        <table class="table table-bordered" id="dataTablePaud" width="100%" cellspacing="0">
          
        <thead>
            <tr id="search-top">
              <th>Wilayah</th>
              <th>Nama_PAUD</th>
              <th>Total Anak</th>
              <!-- <th>Action</th> -->
              <th></th>
            </tr>
            
            <tr>
              <th>Wilayah</th>
              <th>Nama Paud</th>
              <th>Total Anak</th>
              <th>Action</th>
            </tr>
          </thead>

          <tbody>
            <?php foreach ($wilayah_pauds as $wilayah): ?>
              <tr>
                <td><?= $wilayah["wilayah"] ?></td>   
                <td></td>
                <td><?= $wilayah["total"] ?></td>
                <td>
                    <a href="table.php"><button class="btn btn-warning block">Anak</button></a>
                    <button class="btn btn-info block" data-toggle="modal" data-target="#wilayahprofile">Profile</button>
                </td>
              </tr>
            <?php foreach ($wilayah['list-paud'] as $paud): ?>
              <tr>
                <td></td>
                <td><?= $paud["nama-paud"] ?></td>
                <td><?= $paud["total"] ?></td>
                <td>
                    <a href="table.php"><button class="btn btn-warning block">Anak</button></a>
                    <button class="btn btn-info block" data-toggle="modal" data-target="#unitprofile">Profile</button>
                </td>
                
              </tr>
            <?php
              endforeach;
            endforeach; ?>
            
            <!--- Modal -->
            <div class="modal fade bd-example-modal-lg" id="unitprofile" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">PAUD - A</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <!-- table -->
                    <div class="container-fluid">
                      <div class="row underline-div">
                        <div class="col-md-4 col-sm-4 col-4">Nama Paud</div>
                        <div class="col-md-8 col-sm-8 col-4 leftline-col">Paud A Sejahtera</div>
                      </div>
                      <div class="row underline-div">
                        <div class="col-md-4 col-sm-4 col-4">Alamat</div>
                        <div class="col-md-8 col-sm-8 col-4 leftline-col">Jl. HM Tohir</div>
                      </div>
                      <div class="row underline-div">
                        <div class="col-md-4 col-sm-4 col-4">Penanggung Jawab</div>
                        <div class="col-md-8 col-sm-8 col-4 leftline-col">Mr. X</div>
                      </div>
                    </div>
                    <!-- endoftable -->
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
            <!--- endofmodal -->

          </tbody>
          
        </table>
       
      </div>
    </div>
  </div>
  
  

  <?php include 'footer.php' ;?>
  