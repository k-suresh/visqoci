<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function index() {
        $this->mytemplate->addCSS(array("bootstrap.min", "bootstrap-theme.min", "custom", "style", "responsive"));
        $this->mytemplate->addJS(array("jquery.min", "bootstrap.min"));
        $data['assets'] = $this->mytemplate->load_JS_and_css();
        $this->load->view('home', $data);
    }

    public function form_askquestion() {

        $questionData = $_POST;
        $this->load->library('Imagefile');

        $questionData['user_id'] = 1;
        $questionData['added_date'] = date('Y-m-d H-i-s');
        $target_file = $this->imagefile->upload($_FILES["image"]);
        if ($target_file[0]) {
            $questionData['image'] = $target_file[1];
            $questionData['user_id'] = 1;
            $questionData['added_date'] = date('Y-m-d H-i-s');
            $this->db->insert('question', $questionData);
            redirect('dashboard/index/?msg=1', 'Location');
        } else {
            redirect('dashboard/index/?msg=2', 'Location');
        }
    }

    public function user_search() {
        $this->mytemplate->addCSS(array("bootstrap.min", "bootstrap-theme.min", "custom", "style", "responsive"));
        $this->mytemplate->addJS(array("jquery.min", "bootstrap.min"));
        $data['assets'] = $this->mytemplate->load_JS_and_css();
        $keyword = $this->input->post('usersearch');
        $this->db->like('username', $keyword);
        $query = $this->db->get('user');
        foreach ($query->result() as $row) {
            ?>
            <tr>
                <td><?php echo $row->username ?></td>
            </tr>
            <?php
        }
        $this->load->view('user_search', $data);
        //$this->output->enable_profiler(TRUE);
    }

}
