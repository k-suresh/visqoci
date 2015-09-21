<?php include("header.php");?>
<div class="templatemo-content-wrapper">
  <div class="templatemo-content">
    <ol class="breadcrumb">
      <li><a href="<?php echo $this->config->site_url()."dashboard/index";?>">Admin Panel</a></li>
      <li><a href="<?php echo $this->config->site_url()."dashboard/index";?>">Manage Quotes</a></li>
      <li class="active">Search Quotes</li>
    </ol>
<h1>Search Quotation</h1>
          <p class="margin-bottom-15">Please enter product details.</p>
            <div class="col-md-12">
             <form role="form" name="templatemo-quotation-form" action="searchquote" method="post" id="templatemo-preferences-form">
                <div class="row">
                 <div class="col-md-6 margin-bottom-15">
                     <label for="chemicalname" class="control-label">Chemical Name</label>
                     <input type="text" name="chemicalname" class="form-control" id="chemicalname" value='<?php echo $chemicalName;?>'>                
                </div>
				</div>
				<div class="row">
                <div class="col-md-6 margin-bottom-15">
                    <label for="casnumber" class="control-label">CAS Number</label>
                    <input type="text" name="casnumber" class="form-control" id="casnumber" value='<?php echo $CASNumber;?>'>             
                </div>
				</div>
				<div class="row">
                <div class="col-md-6 margin-bottom-15">
                    <input type="submit" name="submit" class="form-control" id="Search" value="Search">     
                </div>
				</div>		
			</form>
			</div>
<?php
if (isset($rowData))
{
?>
		  <h2>Search results</h2>
<div class="row">
	<div class="col-md-12">
		<div class="btn-group pull-right" id="templatemo_sort_btn">
			<ul class="dropdown-menu" role="menu">
				  <li><a href="#">First Name</a></li>
				  <li><a href="#">Last Name</a></li>
				  <li><a href="#">Username</a></li>
			</ul>
		</div>
		<div class="table-responsive">
			<h4 class="margin-bottom-15">New Users Table</h4>
			<table class="table table-striped table-hover table-bordered">
			<thead>
				<tr>
				  <th>#</th>
				  <th>Chemical Name</th>
				  <th>CASNumber</th>
				  <th>Quantity</th>
				  <!--<th>Contact Person</th>
				  <th>Source Details</th>-->
				  <th>Cost of Product</th>		  
				  <th>Phone</th>
				  <th>email</th>
				  <th>Delivery Period</th>
				  <th>Quotation Date</th>
				</tr>
			</thead>
			<tbody>
				 <?php 		
				 $loop=1;
				 foreach ($rowData as $row) { ?>
				<tr>
				  <td><?php echo $loop++;?></td>
				  <td><?php echo $row->chemicalname?></td>
				  <td><?php echo $row->casnumber ?></td>
				  <td><?php echo $row->quantity ?></td>
				  <!--<td><?php echo $row->contactperson?></td>
				  <td><?php echo $row->sourcedetails?></td>-->				  
				  <td><?php echo $row->costofproduct ?></td>
				  <td><?php echo $row->phone ?></td>
				  <td><?php echo $row->email ?></td>
				  <td><?php echo $row->deliverytime ?></td>
				  <td><?php echo $row->quotationdate ?></td>  
				</tr>
				<?php } ?>
			</tbody>
			</table>
		</div>
		  <ul class="pagination pull-right">
			<li class="disabled"><a href="#">«</a></li>
			<li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
			<li><a href="#">2 <span class="sr-only">(current)</span></a></li>
			<li><a href="#">3 <span class="sr-only">(current)</span></a></li>
			<li><a href="#">4 <span class="sr-only">(current)</span></a></li>
			<li><a href="#">5 <span class="sr-only">(current)</span></a></li>
			<li><a href="#">»</a></li>
		  </ul>  
		</div>
</div>		
<?php } ?>
  <?php include("footer.php");?>