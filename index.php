<<<<<<< HEAD
<<<<<<< HEAD
<?php require_once('./config.php'); ?>
 <!DOCTYPE html>
<html lang="en" class="" style="height: auto;">
<?php require_once('inc/header.php') ?>
  <body class="layout-top-nav dark-mode" data-new-gr-c-s-check-loaded="14.991.0" data-gr-ext-installed="" style="height: auto;">
    <div class="wrapper">
     <?php require_once('inc/topBarNav.php') ?>
     <?php if($_settings->chk_flashdata('success')): ?>
      <script>
        alert_toast("<?php echo $_settings->flashdata('success') ?>",'success')
      </script>
      <?php endif;?>   
      <?php if($_settings->chk_flashdata('warning')): ?>
      <script>
        alert_toast("<?php echo $_settings->flashdata('warning') ?>",'warning')
      </script>
      <?php endif;?>  
     <?php $page = isset($_GET['page']) ? $_GET['page'] : 'home';  ?>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper pt-3  mx-0 px-0" style="min-height: 567.854px;">
     
        <!-- Main content -->
        <section class="content mx-0 px-0">
            <?php 
              if(!file_exists($page.".php") && !is_dir($page)){
                  include '404.html';
              }else{
                if(is_dir($page))
                  include $page.'/index.php';
                else
                  include $page.'.php';

              }
            ?>
        </section>
        <!-- /.content -->
  <div class="modal fade" id="confirm_modal" role='dialog'>
    <div class="modal-dialog modal-md modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title">Confirmation</h5>
      </div>
      <div class="modal-body">
        <div id="delete_content"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id='confirm' onclick="">Continue</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="uni_modal" role='dialog'>
    <div class="modal-dialog modal-md modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title"></h5>
      </div>
      <div class="modal-body">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id='submit' onclick="$('#uni_modal form').submit()">Save</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
      </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="uni_modal_right" role='dialog'>
    <div class="modal-dialog modal-full-height  modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span class="fa fa-arrow-right"></span>
        </button>
      </div>
      <div class="modal-body">
      </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="viewer_modal" role='dialog'>
    <div class="modal-dialog modal-md" role="document">
      <div class="modal-content">
              <button type="button" class="btn-close" data-dismiss="modal"><span class="fa fa-times"></span></button>
              <img src="" alt="">
      </div>
    </div>
  </div>
      </div>
      <!-- /.content-wrapper -->
      <?php require_once('inc/footer.php') ?>
  </body>
</html>
=======
<?php require_once('./config.php'); ?>
 <!DOCTYPE html>
<html lang="en" class="" style="height: auto;">
<?php require_once('inc/header.php') ?>
  <body class="layout-top-nav dark-mode" data-new-gr-c-s-check-loaded="14.991.0" data-gr-ext-installed="" style="height: auto;">
    <div class="wrapper">
     <?php require_once('inc/topBarNav.php') ?>
     <?php if($_settings->chk_flashdata('success')): ?>
      <script>
        alert_toast("<?php echo $_settings->flashdata('success') ?>",'success')
      </script>
      <?php endif;?>   
      <?php if($_settings->chk_flashdata('warning')): ?>
      <script>
        alert_toast("<?php echo $_settings->flashdata('warning') ?>",'warning')
      </script>
      <?php endif;?>  
     <?php $page = isset($_GET['page']) ? $_GET['page'] : 'home';  ?>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper pt-3  mx-0 px-0" style="min-height: 567.854px;">
     
        <!-- Main content -->
        <section class="content mx-0 px-0">
            <?php 
              if(!file_exists($page.".php") && !is_dir($page)){
                  include '404.html';
              }else{
                if(is_dir($page))
                  include $page.'/index.php';
                else
                  include $page.'.php';

              }
            ?>
        </section>
        <!-- /.content -->
  <div class="modal fade" id="confirm_modal" role='dialog'>
    <div class="modal-dialog modal-md modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title">Confirmation</h5>
      </div>
      <div class="modal-body">
        <div id="delete_content"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id='confirm' onclick="">Continue</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="uni_modal" role='dialog'>
    <div class="modal-dialog modal-md modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title"></h5>
      </div>
      <div class="modal-body">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id='submit' onclick="$('#uni_modal form').submit()">Save</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
      </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="uni_modal_right" role='dialog'>
    <div class="modal-dialog modal-full-height  modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span class="fa fa-arrow-right"></span>
        </button>
      </div>
      <div class="modal-body">
      </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="viewer_modal" role='dialog'>
    <div class="modal-dialog modal-md" role="document">
      <div class="modal-content">
              <button type="button" class="btn-close" data-dismiss="modal"><span class="fa fa-times"></span></button>
              <img src="" alt="">
      </div>
    </div>
  </div>
      </div>
      <!-- /.content-wrapper -->
      <?php require_once('inc/footer.php') ?>
  </body>
</html>
>>>>>>> repo1/main
=======

<?php 
$date_from = isset($_GET['date_from']) ? $_GET['date_from'] : date("Y-m-d",strtotime(date("Y-m-d"). ' -1 week'));;
$date_to = isset($_GET['date_to']) ? $_GET['date_to'] : date("Y-m-d");;

?>
<style>
	.hide-print{
		display:none;
	}
</style>
<div class="card card-outline card-primary">
	<div class="card-header">
		<h3 class="card-title">Transaction Reports</h3>
		<div class="card-tools">
			<!-- <button href="?page=history/manage_record" class="btn btn-flat btn-primary"><span class="fas fa-print"></span>  Create New</button> -->
		</div>
	</div>
	<div class="card-body">
		<div class="container-fluid">
			<div class="col-12">
				<form action="" id="filter">
				<div class="row align-items-end">
					<div class="form-group col-md-4">
						<label for="date_from" class="control-label">Date From</label>
						<input type="date" name="date_from" class="form-control" value="<?php echo $date_from ?>" required>
					</div>
					<div class="form-group col-md-4">
						<label for="date_to" class="control-label">Date To</label>
						<input type="date" name="date_to" class="form-control" value="<?php echo $date_to ?>" required>
					</div>
					<div class="form-group col-md-4">
						<button class="btn btn-flat btn-primary">Filter</button>
						<button class="btn btn-flat btn-success" type="button" id="print"><i class="fa fa-print"></i> Print</button>
					</div>
				</div>
				</form>
			</div>
			<div class="container-fluid" id="print_out">
				<div class="hide-print">
					<?php if($date_from == $date_to): ?>
						<h3 class="text-center">As of <?php echo date("F d, Y",strtotime($date_from)) ?></h3>
					<?php else: ?>
					<h3 class="text-center"></h3>
						<h3 class="text-center">As of <?php echo date("F d, Y",strtotime($date_from)) ?> - <?php echo date("F d, Y",strtotime($date_to)) ?></h3>
					<?php endif; ?>
				</div>
			<table class="table table-bordered table-striped">
				<colgroup>
					<col width="5%">
					<col width="15%">
					<col width="20%">
					<col width="20%">
					<col width="25%">
					<col width="15%">
				</colgroup>
				<thead>
					<tr>
						<th>#</th>
						<th>Date Created</th>
						<th>Transaction Code</th>
						<th>Client</th>
						<th>Info</th>
						<th>Amount</th>
					</tr>
				</thead>
				<tbody>
					<?php 
					$i = 1;
					$uwhere =" where date(t.date_created) BETWEEN '{$date_from}' and '{$date_to}' ";
					
					$sql = "SELECT t.*,c.name as company,concat(lastname,', ', firstname,' ',middlename) as user from `transaction_list` t inner join company_list c on t.company_id = c.id inner join users u on t.user_id = u.id {$uwhere} order by unix_timestamp(t.`date_created`) desc ";
					$qry = $conn->query($sql);
					while($row = $qry->fetch_assoc()):
					?>
						<tr>
							<td class="text-center align-middle py-1 px-2"><?php echo $i++; ?></td>
							<td class="align-middle py-1 px-2"><?php echo date("Y-m-d H:i",strtotime($row['date_created'])) ?></td>
							<td class="align-middle py-1 px-2"><?php echo $row['tracking_code'] ?></td>
							<td class="align-middle py-1 px-2"><?php echo $row['user'] ?></td>
							<td class="align-middle py-1 px-2">
								<dl class="lh-1">
									<dt class="my-0 py-0 text-info">Account Name:</dt>
									<dd class="my-0 py-0 pl-3"><?php echo $row['account_name'] ?></dd>
									<dt class="my-0 py-0 text-info">Account #:</dt>
									<dd class="my-0 py-0 pl-3"><?php echo $row['account_number'] ?></dd>
								</dl>
							</td>
							<td class="text-right align-middle py-1 px-2"><?php echo number_format($row['payable_amount'],2) ?></td>
						</tr>
					<?php endwhile; ?>
				</tbody>
			</table>
		</div>
		</div>
	</div>
</div>
<script>
	$(function(){
		$('#filter').submit(function(e){
			e.preventDefault();
			location.href="./?page=reports&"+$(this).serialize();
		})
		$('#print').click(function(){
            start_loader()
            var _el = $('<div>')
            var _head = $('head').clone()
                _head.find('title').text("Transaction Details - Print View")
            var p = $('#print_out').clone()
            p.find('hr.border-light').removeClass('.border-light').addClass('border-dark')
            p.find('.btn').remove()
            _el.append(_head)
            _el.append('<div class="d-flex justify-content-center">'+
                      '<div class="col-1 text-right">'+
                      '<img src="<?php echo validate_image($_settings->info('logo')) ?>" width="65px" height="65px" />'+
                      '</div>'+
                      '<div class="col-10">'+
                      '<h4 class="text-center"><?php echo $_settings->info('name') ?></h4>'+
                      '<h4 class="text-center">Transaction Report</h4>'+
                      '</div>'+
                      '<div class="col-1 text-right">'+
                      '</div>'+
                      '</div><hr/>')
            _el.append(p.html())
            var nw = window.open("","","width=1200,height=900,left=250,location=no,titlebar=yes")
                     nw.document.write(_el.html())
                     nw.document.close()
                     setTimeout(() => {
                         nw.print()
                         setTimeout(() => {
                            nw.close()
                            end_loader()
                         }, 200);
                     }, 500);

        })
	})
	
</script>
>>>>>>> repo2/main
