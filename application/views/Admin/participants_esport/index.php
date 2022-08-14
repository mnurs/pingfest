  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Esport</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Daftar Peserta</a></li>
              <li class="breadcrumb-item active">Esport</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid"> 
         <!-- DataTables -->
          <div class="card">
            <div class="card-header">
              <!-- <a href="<?php echo site_url('admin/products/add') ?>"><i class="fas fa-plus"></i> Add New</a> -->
            </div>
            <div class="card-body">

              <div class="table-responsive">
                <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Username</th>
                      <th>Nama Ketua</th>
                      <th>Phone</th> 
                      <th>Nama Tim</th>>
                      <th>Email</th> 
                      <th>Daftar anggota</th> 
                      <th>Nickname</th> 
                      <th>ID Account</th> 
                      <th>Institution</th>  
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($esports as $esport): ?>
                    <tr>
                      <td width="150">
                        <?php echo $esport->user_id ?>
                      </td>
                      <td>
                        <?php echo $esport->leader ?>
                      </td>
                      <td>
                        <?php echo $esport->phone ?>
                      </td>
                      <td>
                        <?php echo $esport->team_name ?>
                      </td>
                      <td class="small">
                        <ul>
                          <?php $data = json_decode($esport->email, TRUE)['data'] ?> 
                          <?php for ($i=0;$i<count($data);$i++): ?>
                          <li><?php echo $data[$i]; ?></li> 
                          <?php endfor; ?>
                        </ul> 
                      </td>   
                      <td class="small">
                        <ul>
                          <?php $data = json_decode($esport->member, TRUE)['data'] ?> 
                          <?php for ($i=0;$i<count($data);$i++): ?>
                          <li><?php echo $data[$i]; ?></li> 
                          <?php endfor; ?>
                        </ul> 
                      </td>   
                      <td class="small">
                        <ul>
                          <?php $data = json_decode($esport->account_nickname, TRUE)['data'] ?> 
                          <?php for ($i=0;$i<count($data);$i++): ?>
                          <li><?php echo $data[$i]; ?></li> 
                          <?php endfor; ?>
                        </ul> 
                      </td> 
                      <td class="small">
                        <ul>
                          <?php $data = json_decode($esport->account_id, TRUE)['data'] ?> 
                          <?php for ($i=0;$i<count($data);$i++): ?>
                          <li><?php echo $data[$i]; ?></li> 
                          <?php endfor; ?>
                        </ul> 
                      </td> 
                      <td>
                        <?php echo $esport->institution ?>
                      </td>    
                     
                      <td width="250">
                        <a href="<?php echo site_url() ?>/admin/participants_esport/id_card/<?php echo $esport->user_id ?>" class="btn btn-primary">ID Card</a>  
                      </td>
                    </tr>
                    <?php endforeach; ?> 

                  </tbody>
                </table>
              </div>
            </div>
          </div>
        <!-- DataTables -->
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
 