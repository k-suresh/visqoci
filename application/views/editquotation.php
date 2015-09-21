<!DOCTYPE html>
<?php include("header.php");?>
<div class="templatemo-content-wrapper">
  <div class="templatemo-content">
    <ol class="breadcrumb">
      <li><a href="<?php echo $this->config->site_url()."dashboard/index";?>">Admin Panel</a></li>
      <li><a href="<?php echo $this->config->site_url()."dashboard/index";?>">Manage Quotes</a></li>
      <li class="active">Add</li>
    </ol>			
    <h1>Quotation</h1>
        <p class="margin-bottom-15">please edit and submit the form</p>
         <div class="col-md-12">
            <form role="form" name="templatemo-quotation-form" action="<?php echo $this->config->site_url()."dashboard/edit_productinput/".$id;?>" method="post" id="templatemo-preferences-form">
              	<?php    foreach ($data as $row) { ?>
				<div class="row">
                <div class="col-md-6 margin-bottom-15">
                    <label for="chemicalname" class="control-label">Chemical Name</label>
                    <input type="text" name="chemicalname" class="form-control" id="ChemicalName" value="<?php echo $row->chemicalname?>">                  
                </div>
				</div>
				<div class="row"> 
                <div class="col-md-6 margin-bottom-15">
					<label for="casnumber" class="control-label">CAS Number</label>
                    <input type="text" name="casnumber" class="form-control" id="CASNumber" value="<?php echo $row->casnumber?>">                 
                </div>
                </div>
				<div class="row">
				<div class="col-md-6 margin-bottom-15">
                    <label for="quantity" class="control-label">Quantity</label>
                    <input type="text" name="quantity" class="form-control" id="Quantity" value="<?php echo $row->quantity?>" >                 
                </div>
				</div>
				<div class="row">
				<div class="col-md-12 margin-bottom-15">
				    <label for="form" class="control-label">Form</label><br>
                    <label class="radio-inline">
					<input type="radio" name="form" id="inlineRadio1" value="powder" checked> Powder
					</label>
					<label class="radio-inline">
					<input type="radio" name="form" id="inlineRadio2" value="liquid"> Liquid
					</label>                  
                </div> 
				</div>	
				<div class="row">
                <div class="col-md-6 margin-bottom-15">
                    <label for="contactperson" class="control-label">Contact Person</label>
                    <input type="text" name="contactperson" class="form-control" id="ChemicalName" value="<?php echo $row->contactperson?>">                  
                </div>
				</div>
				<div class="row">
                <div class="col-md-6 margin-bottom-15">
                    <label for="sourcedetails" class="control-label">Source Details</label>
					<textarea rows="4" cols="50" name="sourcedetails" ><?php echo $row->sourcedetails?></textarea>
				</div> 
				</div>
				<div class="row">
                <div class="col-md-6 margin-bottom-15">
                   <label for="phone" class="control-label">Phone</label>
                   <input type="text" name="phone" class="form-control" id="Phone" value="<?php echo $row->phone?>">                
                </div>
				</div>
				<div class="row">
				<div class="col-md-6 margin-bottom-15">
                    <label>Email address</label>
					<input type="email" name="email" class="form-control" id="email" value="<?php echo $row->email?>">
                </div>
				</div>
				<div class="row">
				<div class="col-md-6 margin-bottom-15">
                    <label for="costofproduct" class="control-label">Cost of Product</label>
                    <input type="text" name="costofproduct" class="form-control" id="CostofProduct" value="<?php echo $row->costofproduct?>">             
                </div>
				</div>
				<div class="row">
				<div class="col-md-6 margin-bottom-15">
                    <label for="deliverytime" class="control-label">Delivery Period</label>
                    <input type="text" name="deliverytime" class="form-control" id="Deliverytime" value="<?php echo $row->deliverytime?>">             
                </div>  
				</div>
				<div class="row">
                <div class="col-md-6 margin-bottom-15">
                    <label for="quotationdate" class="control-label">Quotation Date</label>
                    <input type="text" name="quotationdate" class="form-control" id="ChemicalName" value="<?php echo $row->quotationdate?>">                  
                </div>
				</div>
				<div class="row">				  
                <div class="row templatemo-form-buttons">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-default">Reset</button>    
                </div>
				</div>
				</div>
				<?php } ?>
            </form>
        </div>
		
 </div>
</div>
	  <script src="js/jquery.min.js"></script>
	  <script src="js/bootstrap.min.js"></script>
	  <script src="js/templatemo_script.js"></script>
</html>
  <?php include("footer.php");?>