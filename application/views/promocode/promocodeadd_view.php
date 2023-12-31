<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Promocode |add promocode</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/css/AdminLTE.min.css') ?>">
    
  </head>
  <div class="content-wrapper">
  <section class="content-header">
    <h1><?= $pTitle ?><small><?= $pDescription ?></small></h1>
    <ol class="breadcrumb">
    <li><a href="<?= base_url('Dashboard')?>"><i class="fa fa-star-o" aria-hidden="true"></i>Home</a></li>
     <li><?= $menu ?></li>
     <li class="active"><?= $smenu ?></li>
    </ol>
  </section>
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <?php 
        $url = (!isset($promo_id) || empty($promo_id))?'Promocode/createpromocode':'Promocode/updatepromocode/'.$promo_id;
        if($this->session->flashdata('message')) { 
          $flashdata = $this->session->flashdata('message'); ?>
          <div class="alert alert-<?= $flashdata['class'] ?>">
            <button class="close" data-dismiss="alert" type="button">×</button>
            <?= $flashdata['message'] ?>
          </div>
        <?php } ?>
      </div>
      <div class="col-md-12">
        <div class="box box-warning">
          <div class="box-body">
            <form role="form" action="<?= base_url($url) ?>" method="post" 
              class="validate" data-parsley-validate="" enctype="multipart/form-data">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Promocode Name</label>
                  <input type="text" class="form-control required" data-parsley-trigger="change"
                  data-parsley-minlength="2"
                  name="promo_code" required="" placeholder="Enter promocode Name" value="<?= (isset($promo_data->promo_code))?$promo_data->promo_code:'' ?>">
                  <span class="glyphicon form-control-feedback"></span>
                </div>
                <div class="form-group">
                  <label>Usage Count</label>
                  <input type="text" class="form-control required" data-parsley-trigger="change"
                  data-parsley-minlength="2"
                  name="usage_count" required="" placeholder="Enter Usage Count" value="<?= (isset($promo_data->usage_count))?$promo_data->usage_count:'' ?>">
                  <span class="glyphicon form-control-feedback"></span>
                </div>
               
                <div class="form-group">
                  <label>Usage Limit</label>
                  <input type="text" class="form-control required" data-parsley-trigger="change"
                  data-parsley-minlength="2"
                  name="usage_limit" required="" placeholder="Enter Usage Limit" value="<?= (isset($promo_data->usage_limit))?$promo_data->usage_limit:'' ?>">
                  <span class="glyphicon form-control-feedback"></span>
                </div>
                </div>
              <div class="col-md-6">
              <div class="form-group">
                  <label>Percentage Discount</label>
                  <input type="text" class="form-control required" data-parsley-trigger="change"
                  data-parsley-minlength="2"
                  name="discount" required="" placeholder="Enter Percentage Discount" value="<?= (isset($promo_data->discount))?$promo_data->discount:'' ?>">
                  <span class="glyphicon form-control-feedback"></span>
                </div>
              <div class="form-group">
                  <label>Active From</label>
                  <input type="datetime-local" class="form-control " data-parsley-trigger="change"  
                  data-parsley-minlength="2" required="" name="starting_date" placeholder="Enter starting date"  value="<?= (isset($promo_data->starting_date))?$promo_data->starting_date:'' ?>">
                  <span class="glyphicon form-control-feedback"></span>
                </div>
                <div class="form-group">
                  <label>Active To</label>
                  <input type="datetime-local" class="form-control " data-parsley-trigger="change" 
                  data-parsley-minlength="2" required="" name="ending_date" placeholder="Enter ending date" value="<?= (isset($promo_data->ending_date))?$promo_data->ending_date:'' ?>">
                  <span class="glyphicon  form-control-feedback"></span>
                </div>
              </div>
              <div class="col-md-12">      
                <div class="box-footer textCenterAlign">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a href="<?= base_url('Promocode/listpromocode') ?>" class="btn btn-primary">Cancel</a>
                </div>        
              </div>        
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>