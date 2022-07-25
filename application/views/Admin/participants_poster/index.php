  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Poster Digital</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Daftar Peserta</a></li>
              <li class="breadcrumb-item active">Poster Digital</li>
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
                      <th>Nama</th>
                      <th>Phone</th>
                      <th>Email</th>
                      <th>Institution</th> 
                      <th>Akun IG</th> 
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($posters as $poster): ?>
                    <tr>
                      <td width="150">
                        <?php echo $poster->user_id ?>
                      </td>
                      <td>
                        <?php echo $poster->name ?>
                      </td>
                      <td>
                        <?php echo $poster->phone ?>
                      </td>
                      <td>
                        <?php echo $poster->email ?>
                      </td>   
                      <td>
                        <?php echo $poster->institution ?>
                      </td>   
                      <td>
                        <?php echo $poster->username_ig ?>
                      </td> 
                      <td width="250">
                        <a href="<?php echo site_url() ?>/admin/participants_poster/id_card/<?php echo $poster->user_id ?>" class="btn btn-primary">ID Card</a>  
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
 