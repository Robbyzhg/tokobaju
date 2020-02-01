  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-7 connectedSortable">
          
        <div class="container-fluid">
          <div class="row">
            <?php foreach($product as $product) : ?>
              <div class="card" style="width: 16rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title"> <?php echo $product->nama_product ?> </h5>
                  <p class="card-text"><?= $product->deskripsi ?></p>
                  <span class="badge badge-success">Rp. <?= $product->harga_product ?></span>
                  <br>
                  <a href="#" class="btn btn-primary">Tambah ke keranjang</a>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>

        </section>
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-5 connectedSortable">

        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  