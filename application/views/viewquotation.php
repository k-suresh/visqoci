
<?php include("header.php");?>
<div class="templatemo-content-wrapper">
  <div class="templatemo-content">
    <ol class="breadcrumb">
      <li><a href="<?php echo $this->config->site_url()."dashboard/index";?>">Admin Panel</a></li>
      <li><a href="<?php echo $this->config->site_url()."dashboard/index";?>">Manage Quotes</a></li>
      <li class="active">Tables</li>
    </ol>
		  <h2>Quotation Listing</h2>
			<div class="row">
            <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-striped table-hover table-bordered">
                <thead>
                    
                </thead>
                <tbody>
				 <?php 		
				 $loop=1;
				 foreach ($data as $row) { ?>
				 <div class="viewquotation">
					  
					  <label>Chemical Name</label>: <?php echo $row->chemicalname?><br>
					  <label>CASNumber</label>: <?php echo $row->casnumber?><br>
					  <label>Quantity</label>: <?php echo $row->quantity?><br>
					  <label>Contact Person</label>: <?php echo $row->contactperson?><br>
					  <label>Source Details</label>: <?php echo $row->sourcedetails?>	<br>  
					  <label>Cost of Product</label>: <?php echo $row->costofproduct?><br>
					  <label>Phone</label>: <?php echo $row->phone?><br>
					  <label>email</label>: <?php echo $row->email?><br>
					  <label>Delivery Period</label>: <?php echo $row->deliverytime?><br>
					  <label>Quotation Date</label>: <?php echo $row->quotationdate?></td>						  
					</div>
				<?php } ?>
                </tbody>
                </table>
					<div class="row">
					<div class="col-md-6 margin-bottom-15">
					<a href="<?php echo $this->config->site_url()."dashboard/index";?>"  class="btn btn-info" role="button">Back to List</a>
                     
					</div>
				</div>
            </div>
			
                <!--<?php echo $pagination;?>-->
            </div>
			</div>
	</div>
</div>

  <?php include("footer.php");?>