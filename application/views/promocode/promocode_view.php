<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>promocode |promocode_list</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/css/AdminLTE.min.css') ?>">
    
  </head>
  <div class="content-wrapper" >
  <section class="content-header">
    <h1>
       <?= $pTitle ?>
        <small><?= $pDescription ?></small>
    </h1>
    <ol class="breadcrumb">
    <li><a href="<?= base_url('Dashboard')?>"><i class="fa fa-star-o" aria-hidden="true"></i>Home</a></li>
     <li><?= $menu ?></li>
     <li class="active"><?= $smenu ?></li>
    </ol>
  </section>
  <section class="content">
    <div class="row">
      <div class="col-md-12">
          <?php if($this->session->flashdata('message')) { 
              $flashdata = $this->session->flashdata('message'); ?>
              <div class="alert alert-<?= $flashdata['class'] ?>">
                 <button class="close" data-dismiss="alert" type="button">×</button>
                 <?= $flashdata['message'] ?>
              </div>
          <?php } ?>
      </div>
      <div class="col-xs-12">
      <div class="box box-warning"> 
        <div class="box-header with-border">
          <div class="col-md-6"><h3 class="box-title">PromoCode List</h3></div>
          <div class="col-md-6" align="right">
            
          <a class="btn btn-sm btn-primary" href="<?= base_url('Dashboard') ?>">Back</a>
          </div>
        </div>
      <div class="box-body">
        <table id="driverTable" class="table table-bordered table-striped datatable ">
          <thead>
            <tr>
              <th class="hidden">ID</th>

              <th width="11%;">Coupon Code</th>
              <th width="11%;">Usage Limit</th>
              <th width="11%;">Percentage Discount</th>
              <th width="14%;">Active From</th> 
              <th width="14%;">Active To</th>
              <th width="5%;">Status</th>
              <th width="17%;">Action</th>
            </tr>
          </thead> 
          <tbody>
            <?php
            if(!empty($customerData)){
              foreach($customerData as $promocode) {
               ?>
               <tr>
                 <th class="hidden"><?= $promocode->promo_id ?></th>
                 <td class="center"><?= $promocode->promo_code ?></th> 
                 <td class="center"><?= $promocode->usage_limit ?></th> 
                 <td class="center"><?= $promocode->discount?></th> 
                 <td class="center"><?= $promocode->starting_date ?></th> 
                 <td class="center"><?= $promocode->ending_date ?></th> 
                 <td class="center"><?= ($promocode->status == '1')?'Active':'Inactive'?></td>
                 <td class="center">	 
                    <a class="btn btn-sm btn-primary" id="viewPromocode" promo_id="<?= encode_param($promocode->promo_id) ?>">
                      <i class="fa fa-fw fa-eye"></i>View
                    </a>
                    <a class="btn btn-sm btn-danger" 
                      href="<?= base_url('Promocode/editpromocode/'.encode_param($promocode->promo_id)) ?>">
                      <i class="fa fa-fw fa-edit"></i>Edit
                    </a> 
                    <a class="btn btn-sm btn-danger" 
                      href="<?= base_url("Promocode/changeStatus/".encode_param($promocode->promo_id))."/2" ?>" 
                      onClick="return doconfirm()">
                      <i class="fa fa-fw fa-trash"></i>Delete
                    </a>    
                  </td>
                </tr>
            <?php 
              } 
            }?>
          </tbody>
        </table>
      </div>
    </div>
  </section>
</div>