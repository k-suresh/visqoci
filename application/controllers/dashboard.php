<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Dashboard extends CI_Controller 
{  
	public function __construct() 
	{	
			parent::__construct(); //for CI 2.x users
			// Validating User by checking session
			if($this->session->userdata('email') == ""  && is_array($this->session->userdata('role_id')))
			{
				$this->session->set_flashdata('msg','Kindly login to access the page.');
				redirect('login/index','Location');
			}
	}
    public function add()
	{
			$this->mytemplate->addCSS(array("templatemo_main"));
			$this->mytemplate->addJS(array("jquery.min","bootstrap.min","templatemo_script"));
			$data['assets'] = $this->mytemplate->load_JS_and_css();
			$this->load->view('quotation',$data);
	}
	public function viewquotation($id)
	{
			$this->mytemplate->addCSS(array("templatemo_main"));
			$this->mytemplate->addJS(array("jquery.min","bootstrap.min","templatemo_script"));
			$data['assets'] = $this->mytemplate->load_JS_and_css();
			$this->db->where('id', $id);
			$query = $this->db->get('quotation');
            $data['data'] = $query->result();
			$this->load->view('viewquotation',$data);
	}
		
	public function index()
	{                        
            $this->mytemplate->addCSS(array("templatemo_main"));
            $this->mytemplate->addJS(array("jquery.min","bootstrap.min","templatemo_script"));
            //Pagination
            $this->load->library('pagination');
            $currPage = ($this->uri->segment(3)) ? $this->uri->segment(3) : "" ;
            $config['per_page'] = 5;
            if($currPage<2)
                    $currPage = "";   
            $config['base_url'] = $this->config->site_url()."/dashboard/index";     


            $this->db->select("quotation.*");		
            $query = $this->db->get('quotation',$config['per_page'],$currPage);
            $data['data'] = $query->result();
            $config['cur_page'] = $data['cur_page'] = $currPage;
            $config['total_rows'] = $this->db->count_all_results('quotation');
            $this->pagination->initialize($config);	
            $data['pagination'] = $this->pagination->create_links();            
            $data['assets'] = $this->mytemplate->load_JS_and_css();
            
            $this->load->view('list',$data);
			
	}
	public function delete($id) {
	
			$this->db->where('id', $id);
			$this->db->delete('quotation'); 
			redirect('dashboard/index/?msg=1','Location');
	}
    public function save_productinput()
    {
			
		    $form_data = $this->input->post();
			$form_data = array(
		   'chemicalname' => $form_data['chemicalname'] ,
		   'casnumber' => $form_data['casnumber'],
		   'quantity' => $form_data['quantity'] ,
		   'form' => $form_data['form'] ,
		   'sourcedetails' => $form_data['sourcedetails'] ,
		   'phone' => $form_data['phone'] ,
		   'email' => $form_data['email'] ,
		   'costofproduct' => $form_data['costofproduct'] ,
		   'contactperson' => $form_data['contactperson'] , 
		   'quotationdate' => $form_data['quotationdate'] 
			);

			$this->db->insert('quotation', $form_data); 
			redirect('dashboard/index','Location');
    }
	public function edit_productinput($id)
    {
			
		    $form_data = $this->input->post();
			$form_data = array(
		   'chemicalname' => $form_data['chemicalname'] ,
		   'casnumber' => $form_data['casnumber'],
		   'quantity' => $form_data['quantity'] ,
		   'form' => $form_data['form'] ,
		   'sourcedetails' => $form_data['sourcedetails'] ,
		   'phone' => $form_data['phone'] ,
		   'email' => $form_data['email'] ,
		   'costofproduct' => $form_data['costofproduct'] ,
		   'contactperson' => $form_data['contactperson'] , 
		   'quotationdate' => $form_data['quotationdate'] 
			);
			
			$this->db->where('id', $id);
			$this->db->update('quotation', $form_data);
			$str = $this->db->last_query();
			//print_r($str);
			redirect('dashboard/index','Location');
    }

	public function searchquote()
	{
            $this->mytemplate->addCSS(array("templatemo_main"));
            $this->mytemplate->addJS(array("jquery.min","bootstrap.min","templatemo_script"));
			$data['assets'] = $this->mytemplate->load_JS_and_css();
			//$data['SupplierName'] = "";
			$data['chemicalName'] = "";
			$data['CASNumber'] = "";
			
		
			if (!empty($_POST))
			{			
				$form_data = $this->input->post();
				$chemicalName = $form_data['chemicalname'];
				$CASNumber = $form_data['casnumber'];
				//$SupplierName = $form_data['Search_SupplierName'];
				if($chemicalName != "")
				{
					$this->db->or_like('chemicalname', $chemicalName,'both'); 
					$data['chemicalname'] = $chemicalName;			
				}
				if($CASNumber != "")
				{
					$this->db->or_like('casnumber', $CASNumber,'both'); 
					$data['CASNumber'] = $CASNumber;
				}
				/*if($SupplierName != "")
				{
					$this->db->or_like('SupplierName', $SupplierName,'both'); 
					$data['SupplierName'] = $SupplierName;
				}*/
				$query = $this->db->get('quotation');
				if($query->num_rows > 0) 
				{
					foreach ($query->result() as $row)
					{  	
						 $rowData[] = $row;
					}
							$data['rowData'] = $rowData;
				}

				
			}
			$this->load->view('searchquote',$data);
	}
	public function editquotation($id)
	{
		$this->mytemplate->addCSS(array("templatemo_main"));
		$this->mytemplate->addJS(array("jquery.min","bootstrap.min","templatemo_script"));
		$data['assets'] = $this->mytemplate->load_JS_and_css();
		$data['chemicalname'] = "";
		$data['casumber'] = "";
		$this->db->where('id', $id);
		$query = $this->db->get('quotation');
        $data['data'] = $query->result();
		//print_r($data['data']);
		$data['id'] = $id;
		$this->load->view('editquotation',$data);	
			
			
	}
	
	public function uploadexcel()
	{	global $error;
		$this->mytemplate->addCSS(array("templatemo_main"));
		$this->mytemplate->addJS(array("jquery.min","bootstrap.min","templatemo_script"));
		$data['assets'] = $this->mytemplate->load_JS_and_css();
			
			if (isset($_POST["submit"]) == "submit")
			{	
				$form_data = $this->input->post();
				$target_dir = "files/";
				$target_file = $target_dir . basename($_FILES["upfile"]["name"]);
				if (move_uploaded_file($_FILES["upfile"]["tmp_name"], $target_file)) 
				{	
					$data['error']="The file ". basename( $_FILES["upfile"]["name"]). " has been uploaded.";
					$file = './'.$target_file.'';
					//echo $file;exit();
					$this->load->library('excel');
					$objPHPExcel = PHPExcel_IOFactory::load($file);
					$worksheetNames = $objPHPExcel->getSheetNames($file);
					$sheetData = array();
					foreach($worksheetNames as $key => $sheetName)
					{
						$objPHPExcel->setActiveSheetIndexByName($sheetName);
						$sheetData[$sheetName] = $objPHPExcel->getActiveSheet()->toArray(null, true,true,true);			
					}
					foreach($sheetData as $sheet => $allRows) 
					{
						$sheetFirstRow = 0;
						foreach($allRows as $sheet => $return)
						{
						
							if($sheetFirstRow >0 && (!empty($return['C'])) && (!empty($return['D'])) && (!empty($return['E'])) ) 
							{
								$insertValues[] = array(
							   'chemicalname' => $return['C'] ,
							   'casnumber' => $return['D'],
							   'quantity' => $return['E'] ,
							   'sourcedetails' => $return['G'] ,
							   'costofproduct' => $return['H'] ,
							   'contactperson' => $return['F'] , 
							   'quotationdate' => $return['B'] 
								);
							}
							else 
							{ 
								$sheetFirstRow++;
							}
						}	
					}
				}
				else 
				{	
					$data['error']="Error: file not uploaded ";
				}
			
			//echo "<pre>";print_r($insertValues);
			
			$this->db->insert_batch('quotation', $insertValues); 
			//redirect('dashboard/index','Location');
			}
				$this->load->view('uploadexcel',$data);
	}
}
?>

