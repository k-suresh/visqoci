<?php include("header.php");?>
<div class="templatemo-content-wrapper">
  <div class="templatemo-content">
    <ol class="breadcrumb">
      <li><a href="<?php echo $this->config->site_url()."/dashboard/index";?>">Admin Panel</a></li>
      <li>Upload File</li>
    </ol>
<h1>Upload File</h1>
      <p class="margin-bottom-15">Please uplaod EXcel file.</p>
	   
         <div class="col-md-12">
            <form role="form" name="templatemo-quotation-form" action="uploadexcel" method="post" id="templatemo-preferences-form" enctype="multipart/form-data">
                <div class="row">
                 <div class="col-md-6 margin-bottom-15">         
                    <input type="file" name="upfile" class="form-control" id="upfile" value="upload">                  
                 </div>
				 </div>
				 <div class="row">
                  <div class="col-md-6 margin-bottom-15">
				  <input type="submit" name="submit" class="form-control" id="uploadsubmit" value="submit">     
                  </div>
				  </div>		
			</form>
		</div>
				 
				 
<?php include("footer.php");?>