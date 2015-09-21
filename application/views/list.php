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
                    <tr>
					  <th>#</th>
					  <th>Chemical Name</th>
					  <th>CASNumber</th>
					  <th>Quantity</th>
					  <!--<th>Contact Person</th>
					  <th>Source Details</th>
					  <th>Cost of Product</th>		  
					  <th>Phone</th>
					  <th>email</th>
					  <th>Delivery Period</th>-->
					  <th>Quotation Date</th>
					  <th>Action</th>
                    </tr>
                </thead>
                <tbody>
				 <?php 		
				 $loop=1;
				 foreach ($data as $row) { ?>
					<tr>
					  <td><?php echo $loop++;?></td>
					  <td><?php echo $row->chemicalname?></td>
					  <td><?php echo $row->casnumber?></td>
					  <td><?php echo $row->quantity?></td>
					  <!--<td><?php echo $row->contactperson?></td>
					  <td><?php echo $row->sourcedetails?></td>		  
					  <td><?php echo $row->costofproduct?></td>
					  <td><?php echo $row->phone?></td>
					  <td><?php echo $row->email?></td>
					  <td><?php echo $row->deliverytime?></td>-->
					  <td><?php echo $row->quotationdate?></td>
					  <td><a href="<?php echo $this->config->site_url()."dashboard/editquotation/".$row->id?>" class="btn btn-default">Edit</a>
						  <a href="<?php echo $this->config->site_url()."dashboard/viewquotation/".$row->id?>" class="btn btn-default">View</a>
						  <?php echo anchor('dashboard/delete/'.$row->id, 'Delete', array('class' =>'btn btn-default','onClick' => "return confirm('Are you sure you want to delete the current record?')"));?> 
					  </td>	  
					</tr>
				<?php } ?>
                </tbody>
                </table>
            </div>
                <?php echo $pagination;?>
            </div>
			</div>
	</div>
</div>


  <?php include("footer.php");?>