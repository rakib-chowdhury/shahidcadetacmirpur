<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends MX_Controller
{
    function __construct()
    {
        parent::__construct();
        if($this->session->userdata('logged_in') == false && $this->session->userdata('username') == null)
        {
            redirect('home/login', 'refresh');
        }
        $this->load->model('company_model');
    }

    private $upload_path = "./assets/images/slider";
    private $upload_path2 = "./assets/images/success_gallery";
    private $upload_path3 = "./assets/images/prospectus";

    public function index()
    {
        $data['person_info'] = $this->company_model->get_person_info();
        $data['slider_info'] = $this->company_model->get_slider_info();
        $data['gallery_info'] = $this->company_model->get_gallery_info();
        $data['weekly_result_info'] = $this->company_model->get_weekly_result_info();
        $data['weekly_syllabus_info'] = $this->company_model->get_weekly_syllabus_info();
        $data['term_result_info'] = $this->company_model->get_term_result();
        $this->load->view('dashboard', $data);
    }

    ////Start Show Pages////
    public function show_class_info()
    {
        $data['class_info'] = $this->company_model->get_class_info();
        //echo '<pre>';print_r($data);die();
        $this->load->view('class/show_class_info', $data);
    }
    public function show_weekly_result_info()
    {
        $data['weekly_result_info'] = $this->company_model->get_weekly_result_info();
        //echo '<pre>';print_r($data);die();
        $this->load->view('downloads/result_info/show_weekly_result_info', $data);
    }
    public function show_class_routine_info()
    {
        $data['class_routine_info'] = $this->company_model->get_class_routine_info();
        //echo '<pre>';print_r($data);die();
        $this->load->view('downloads/routine_info/show_class_routine_info', $data);
    }
    public function show_weekly_syllabus_info()
    {
        $data['weekly_syllabus_info'] = $this->company_model->get_weekly_syllabus_info();
        //echo '<pre>';print_r($data);die();
        $this->load->view('downloads/syllabus_info/show_weekly_syllabus_info', $data);
    }
    public function show_gallery_info()
    {
        $data['gallery_info'] = $this->company_model->get_gallery_info();
        //echo '<pre>';print_r($data);die();
        $this->load->view('gallery/show_gallery_info', $data);
    }
    public function show_prospectus()
    {
        $data['prospectus_info'] = $this->company_model->get_prospectus_info();
        //echo '<pre>';print_r($data);die();
        $this->load->view('prospectus/show_prospectus', $data);
    }
    public function show_success_gallery()
    {
        $data['success_gallery'] = $this->company_model->get_success_gallery();
        //echo '<pre>';print_r($data);die();
        $this->load->view('success_gallery/show_success_gallery', $data);
    }
    public function show_about_us_info()
    {
        $data['about_us_info'] = $this->company_model->get_about_us_info();
        //echo '<pre>';print_r($data);die();
        $this->load->view('about_us/show_about_info', $data);
    }
    public function show_meal_info()
    {
        $data['meal_info'] = $this->company_model->get_meal_info();
        //echo '<pre>';print_r($data);die();
        $this->load->view('meal_info/show_meal_info', $data);
    }
    public function show_contact_info()
    {
        $data['contact_info'] = $this->company_model->get_contact_info();
        //echo '<pre>';print_r($data);die();
        $this->load->view('contact_info/show_contact_info', $data);
    }
    public function show_medium_info()
    {
        $data['medium_info'] = $this->company_model->get_medium_info();
        //echo '<pre>';print_r($data);die();
        $this->load->view('medium_info/show_medium_info', $data);
    }
    public function show_company_info()
    {
        $data['company_info'] = $this->company_model->get_company_info();
        //echo '<pre>';print_r($data);die();
        $this->load->view('company_info/show_company_info', $data);
    }
    public function show_admission_info()
    {
        $data['admission_info'] = $this->company_model->get_admission_info();
        //echo '<pre>';print_r($data);die();
        $this->load->view('admission/show_admission_info', $data);
    }
    public function show_person_info()
    {
        $data['person_info'] = $this->company_model->get_person_info();
        //echo '<pre>';print_r($data);die();
        $this->load->view('person/show_person_info', $data);
    }
    public function show_schooling_info()
    {
        $data['schooling_info'] = $this->company_model->get_schooling_info();
        //echo '<pre>';print_r($data);die();
        $this->load->view('schooling_system/show_schooling_info', $data);
    }
    public function show_success_info()
    {
        $data['success_info'] = $this->company_model->get_success_info();
        //echo '<pre>';print_r($data);die();
        $this->load->view('success/show_success_info', $data);
    }
    public function show_term_result()
    {
        $data['term_result_info'] = $this->company_model->get_term_result();
        //echo '<pre>';print_r($data);die();
        $this->load->view('term_results/show_term_result_info', $data);
    }
    public function show_bio()
    {
        $data['bio_info'] = $this->company_model->get_bio_info();
        //echo '<pre>';print_r($data);die();
        $this->load->view('bio/show_bio_info', $data);
    }
    ////Show Pages Ends////

    ////Start Add Show Pages////
    public function medium_add()
    {
        $data['batch_info'] = $this->company_model->get_batch_info();
        $this->load->view('medium_info/add_medium_info', $data);
    }
    public function person_add()
    {
        $this->load->view('person/add_person_info');
    }
    public function success_info_add()
    {
        $this->load->view('success/add_success_info');
    }
    public function admission_add()
    {
        $this->load->view('admission/add_admission_info');
    }
    public function contact_add()
    {
        $this->load->view('contact_info/add_contact_info');
    }
    public function slider_image_add()
    {

        $this->load->view('slider/add_slider_image');
    }
    public function color_change()
    {
        $data['color'] = $this->company_model->get_web_color();
        $this->load->view('color/change_color', $data);
    }
    public function color_change_post()
    {
        $data['css_change'] = $this->input->post('css_change');
        $this->company_model->update_color($data);
        redirect('admin/color_change');
    }

    public function gallery_image_add()
    {
        $data['category'] = $this->company_model->get_gallery_category();
        $this->load->view('gallery/add_gallery_image', $data);
    }
    public function prospectus_add()
    {
        $this->load->view('prospectus/add_prospectus');
    }
    public function success_gallery_image_add()
    {
        $this->load->view('success_gallery/add_success_image');
    }
    public function schooling_system_add()
    {
        $this->load->view('schooling_system/add_schooling_info');
    }
    public function company_add()
    {
        $this->load->view('company_info/company_info');
    }
    public function about_add()
    {
        $this->load->view('about_us/add_about_info');
    }
    public function batch_add()
    {
        $this->load->view('medium_info/add_batch');
    }
    public function weekly_result_add()
    {
        $data['month_info'] = $this->company_model->get_month_info();
        $data['batch_info'] = $this->company_model->get_batch_info();
        $this->load->view('downloads/result_info/add_weekly_result_info', $data);
    }
    public function class_routine_add()
    {
        $data['batch_info'] = $this->company_model->get_batch_info();
        $this->load->view('downloads/routine_info/add_class_routine_info', $data);
    }
    public function weekly_syllabus_add()
    {
        $data['month_info'] = $this->company_model->get_month_info();
        $data['batch_info'] = $this->company_model->get_batch_info();
        $this->load->view('downloads/syllabus_info/add_weekly_syllabus_info', $data);
    }
    public function gallery_category_add()
    {
        $this->load->view('gallery/add_category');
    }
    public function slider_description_add()
    {
        $data['slider_info'] = $this->company_model->get_slider_info();
        //echo '<pre>';print_r($data);die();
        $this->load->view('slider/add_description', $data);
    }
    public function class_add()
    {
        $this->load->view('class/add_class_info');
    }
    public function meal_add()
    {
        $data['day_info'] = $this->company_model->get_day_info();
        $data['timing'] = $this->company_model->get_meal_timing();
        //echo '<pre>';print_r($data);die();
        $this->load->view('meal_info/add_meal_info', $data);
    }
    public function meal_name_add()
    {
        $this->load->view('meal_info/add_meal_name');
    }
    public function term_result_add()
    {
        $data['batch_info'] = $this->company_model->get_batch_info();
        $this->load->view('term_results/add_term_result_info', $data);
    }
    public function bio_add()
    {
        $this->load->view('bio/add_bio_info');
    }
    ////Add Show Pages Ends////

    ////Start Edit Page////
    public function edit_company_info($id)
    {
        $data['company_info'] = $this->company_model->get_company_info_edit($id);
        // echo '<pre>';print_r($data);die();
        $this->load->view('company_info/edit_company_info', $data);
    }
    public function edit_weekly_result_info($id)
    {
        $data['month_info'] = $this->company_model->get_month_info();
        $data['batch_info'] = $this->company_model->get_batch_info();
        $data['weekly_result_info'] = $this->company_model->get_weekly_result_info_edit($id);
        //echo '<pre>';print_r($data);die();
        $this->load->view('downloads/result_info/edit_weekly_result_info', $data);
    }
    public function edit_weekly_syllabus_info($id)
    {
        $data['month_info'] = $this->company_model->get_month_info();
        $data['batch_info'] = $this->company_model->get_batch_info();
        $data['weekly_syllabus_info'] = $this->company_model->get_weekly_syllabus_info_edit($id);
        //echo '<pre>';print_r($data);die();
        $this->load->view('downloads/syllabus_info/edit_weekly_syllabus_info', $data);
    }
    public function edit_term_result_info($id)
    {
        $data['batch_info'] = $this->company_model->get_batch_info();
        $data['term_result'] = $this->company_model->get_term_result_edit($id);
        //echo '<pre>';print_r($data);die();
        $this->load->view('term_results/edit_term_result_info', $data);
    }
    public function edit_about_us_info($id)
    {
        $data['about_us_info'] = $this->company_model->get_about_us_info_edit($id);
        //echo '<pre>';print_r($data);die();
        $this->load->view('about_us/edit_about_info', $data);
    }
    public function edit_schooling_info($id)
    {
        $data['schooling_info'] = $this->company_model->get_schooling_info_edit($id);
        // echo '<pre>';print_r($data);die();
        $this->load->view('schooling_system/edit_schooling_info', $data);
    }
    public function edit_admission_info($id)
    {
        $data['admission_info'] = $this->company_model->get_admission_info_edit($id);
        // echo '<pre>';print_r($data);die();
        $this->load->view('admission/edit_admission_info', $data);
    }
    public function edit_person_info($id)
    {
        $data['person_info'] = $this->company_model->get_person_info_edit($id);
        //echo '<pre>';print_r($data);die();
        $this->load->view('person/edit_person_info', $data);
    }
    public function edit_contact_info($id)
    {
        $data['contact_info'] = $this->company_model->get_contact_info_edit($id);
        //echo '<pre>';print_r($data);die();
        $this->load->view('contact_info/edit_contact_info', $data);
    }
    public function gallery_image_edit($id)
    {
        $data['gallery_info'] = $this->company_model->get_gallery_info_edit($id);
        //echo '<pre>';print_r($data);die();
        $this->load->view('gallery/edit_gallery_image', $data);
    }
    public function success_gallery_image_edit($id)
    {
        $data['success_gallery'] = $this->company_model->get_success_gallery_info_edit($id);
        //echo '<pre>';print_r($data);die();
        $this->load->view('success_gallery/edit_success_image', $data);
    }
    public function prospectus_edit($id)
    {
        $data['prospectus_edit'] = $this->company_model->get_prospectus_edit($id);
        //echo '<pre>';print_r($data);die();
        $this->load->view('prospectus/edit_prospectus', $data);
    }
    public function edit_bio_info($id)
    {
        $data['bio_info'] = $this->company_model->get_bio_info_edit($id);
        //echo '<pre>';print_r($data);die();
        $this->load->view('bio/edit_bio_info', $data);
    }
    public function edit_meal_info($id)
    {
        $data['meal_info'] = $this->company_model->get_meal_info_edit($id);
        $data['day_info'] = $this->company_model->get_day_info();
        $data['timing'] = $this->company_model->get_meal_timing();
        //echo '<pre>';print_r($data);die();
        $this->load->view('meal_info/edit_meal_info', $data);
    }
    public function edit_medium_info($id)
    {
        $data['medium_info'] = $this->company_model->get_medium_info_edit($id);
        //echo '<pre>';print_r($data);die();
        $data['batch_info'] = $this->company_model->get_batch_info();
        //echo '<pre>';print_r($data);die();
        //echo '<pre>';print_r($data);die();
        $this->load->view('medium_info/edit_medium_info', $data);
    }
    public function edit_success_info($id)
    {
        $data['success_info'] = $this->company_model->get_success_info_edit($id);
        // echo '<pre>';print_r($data);die();
        $this->load->view('success/edit_success_info', $data);
    }
    public function edit_class_routine_info($id)
    {
        $data['batch_info'] = $this->company_model->get_batch_info();
        $data['class_routine_info'] = $this->company_model->get_class_routine_info_edit($id);
        //echo '<pre>';print_r($data);die();
        $this->load->view('downloads/routine_info/edit_class_routine_info', $data);
    }

    ////Edit Page Ends////]

    ////Start Edit Post////
    public function bio_edit_post()
    {
        $id = $this->input->post('id');
        //echo '<pre>';print_r($_FILES['image']['error']);die();
        $data['bio'] = $this->input->post('bio');
        //echo '<pre>';print_r($data);die();
        if($data['bio'] != null) {
            $this->db->where('id', $id);
            $this->db->update('bio_info', $data);
            redirect('admin/show_bio', 'refresh');
        }


    }
    public function person_edit_post()
    {
        $id = $this->input->post('id');
        //echo '<pre>';print_r($_FILES['image']['error']);die();
        $data['name'] = $this->input->post('name');
        $data['phone'] = $this->input->post('phone');
        $data['designation'] = $this->input->post('designation');
        $data['address'] = $this->input->post('address');
        $data['message'] = $this->input->post('message');
        //echo '<pre>';print_r($data);die();
        if ($_FILES['image']['error'] == 4) {
            $this->db->where('id', $id);
            $this->db->update('person', $data);
            redirect('admin/show_person_info', 'refresh');
        } else {
            $image_ext = explode('.', $_FILES['image']['name']);
            $extension = end($image_ext);
            list($first) = explode(".", $_FILES['image']['name']);
            // echo '<pre>';print_r($first);die();
            if ($extension == 'jpg' || $extension == 'png' || $extension == 'gif' || $extension == 'JPEG' || $extension == 'JPG') {
                $target_path = 'person_image_' . $first . '.' . end($image_ext);
                if (move_uploaded_file($_FILES['image']['tmp_name'], 'assets/images/person/' . $target_path)) {
                    $data['image'] = $target_path;
                    //echo '<pre>';print_r($data);die();
                    $this->db->where('id', $id);
                    $this->db->update('person', $data);
                    redirect('admin/show_person_info', 'refresh');
                }
            }
        }

    }
    public function weekly_result_info_edit_post()
    {
        $id = $this->input->post('id');
        $weekly_result = $this->input->post('weekly_result');
        // echo '<pre>';print_r($_FILES);die();
        $data['year_id'] = $this->input->post('year_id');
        $data['month_id'] = $this->input->post('month_id');
        $data['week'] = $this->input->post('week');
        $data['medium'] = $this->input->post('medium');
        $data['batch_id'] = $this->input->post('batch_id');
        //echo '<pre>';print_r($data);die();
        if ($_FILES['weekly_result']['error'] == 4) {
            $this->db->where('id', $id);
            $this->db->update('weekly_result_info', $data);
            redirect('admin/show_weekly_result_info', 'refresh');
        } else {
            $image_ext = explode('.', $_FILES['weekly_result']['name']);
            $extension = end($image_ext);
            list($first) = explode(".", $_FILES['weekly_result']['name']);
            // echo '<pre>';print_r($first);die();
            if ($extension == 'pdf') {
                $target_path = $weekly_result;
                if (move_uploaded_file($_FILES['weekly_result']['tmp_name'], 'assets/downloads/weekly_result/' . $target_path)) {
                    $data['weekly_result'] = $target_path;
                    //echo '<pre>';print_r($data);die();
                    $this->db->where('id', $id);
                    $this->db->update('weekly_result_info', $data);
                    redirect('admin/show_weekly_result_info', 'refresh');
                }
            }
        }

    }
    public function weekly_syllabus_info_edit_post()
    {
        $id = $this->input->post('id');
        $weekly_syllabus = $this->input->post('weekly_syllabus');
        // echo '<pre>';print_r($_FILES);die();
        $data['year_id'] = $this->input->post('year_id');
        $data['month_id'] = $this->input->post('month_id');
        $data['week'] = $this->input->post('week');
        $data['medium'] = $this->input->post('medium');
        $data['batch_id'] = $this->input->post('batch_id');
        //echo '<pre>';print_r($data);die();
        if ($_FILES['weekly_syllabus']['error'] == 4) {
            $this->db->where('id', $id);
            $this->db->update('weekly_syllabus_info', $data);
            redirect('admin/show_weekly_syllabus_info', 'refresh');
        } else {
            $image_ext = explode('.', $_FILES['weekly_syllabus']['name']);
            $extension = end($image_ext);
            list($first) = explode(".", $_FILES['weekly_syllabus']['name']);
            // echo '<pre>';print_r($first);die();
            if ($extension == 'pdf') {
                $target_path = $weekly_syllabus;
               //echo '<pre>';print_r($target_path);die();
                if (move_uploaded_file($_FILES['weekly_syllabus']['tmp_name'], 'assets/downloads/weekly_syllabus/' . $target_path)) {
                    $data['weekly_syllabus'] = $target_path;
                    //echo '<pre>';print_r($data);die();
                    $this->db->where('id', $id);
                    $this->db->update('weekly_syllabus_info', $data);
                    redirect('admin/show_weekly_syllabus_info', 'refresh');
                }
            }
        }

    }
    public function class_routine_info_edit_post()
    {
        $id = $this->input->post('id');
        $class_routine_old = $this->input->post('class_routine_old');
        // echo '<pre>';print_r($_FILES);die();
        $data['year_id'] = $this->input->post('year_id');
        $data['medium'] = $this->input->post('medium');
        $data['batch_id'] = $this->input->post('batch_id');
        //echo '<pre>';print_r($data);die();
        if ($_FILES['class_routine']['error'] == 4) {
            $this->db->where('id', $id);
            $this->db->update('class_routine_info', $data);
            redirect('admin/show_class_routine_info', 'refresh');
        } else {
            $image_ext = explode('.', $_FILES['class_routine']['name']);
            $extension = end($image_ext);
            list($first) = explode(".", $_FILES['class_routine']['name']);
            // echo '<pre>';print_r($first);die();
            if ($extension == 'pdf') {
                $target_path = $class_routine_old;
                //echo '<pre>';print_r($target_path);die();
                if (move_uploaded_file($_FILES['class_routine']['tmp_name'], 'assets/downloads/class_routine/' . $target_path)) {
                    $data['class_routine'] = $target_path;
                    //echo '<pre>';print_r($data);die();
                    $this->db->where('id', $id);
                    $this->db->update('class_routine_info', $data);
                    redirect('admin/show_class_routine_info', 'refresh');
                }
            }
        }

    }
    public function term_result_info_edit_post()
    {
        $id = $this->input->post('id');
        $term_result_old = $this->input->post('term_result_old');
        // echo '<pre>';print_r($_FILES);die();
        $data['year_id'] = $this->input->post('year_id');
        $data['term'] = $this->input->post('term');
        $data['medium'] = $this->input->post('medium');
        $data['batch_id'] = $this->input->post('batch_id');
        //echo '<pre>';print_r($data);die();
        if ($_FILES['term_result']['error'] == 4) {
            $this->db->where('id', $id);
            $this->db->update('term_result_info', $data);
            redirect('admin/show_term_result_info', 'refresh');
        } else {
            $image_ext = explode('.', $_FILES['term_result']['name']);
            $extension = end($image_ext);
            list($first) = explode(".", $_FILES['term_result']['name']);
            // echo '<pre>';print_r($first);die();
            if ($extension == 'pdf') {
                $target_path = $term_result_old;
                //echo '<pre>';print_r($target_path);die();
                if (move_uploaded_file($_FILES['term_result']['tmp_name'], 'assets/downloads/term_results/' . $target_path)) {
                    $data['term_result'] = $target_path;
                    //echo '<pre>';print_r($data);die();
                    $this->db->where('id', $id);
                    $this->db->update('term_result_info', $data);
                    redirect('admin/show_term_result', 'refresh');
                }
            }
        }

    }
    public function gallery_edit_post()
    {
        $id = $this->input->post('id');
        $category = $this->input->post('category');
        //echo '<pre>';print_r($_FILES);die();
        $image_ext = explode('.', $_FILES['image']['name']);
        $extension = end($image_ext);
        list($first) = explode(".", $_FILES['image']['name']);
        // echo '<pre>';print_r($first);die();
        if ($extension == 'jpg' || $extension == 'png' || $extension == 'gif' || $extension == 'JPEG' || $extension == 'JPG') {
            $target_path = 'gallery_image_' . $category . '.' . end($image_ext);
            $data['image'] = $target_path;
            //echo '<pre>';print_r($data);die();
            if (move_uploaded_file($_FILES['image']['tmp_name'], 'assets/images/gallery/' . $target_path)) {
                $this->db->where('id', $id);
                $this->db->update('gallery', $data);
                redirect('admin/show_gallery_info', 'refresh');
            }
        }
    }
    public function success_gallery_edit_post()
    {
        $id = $this->input->post('id');
        $old_image = $this->input->post('old_image');
        //echo '<pre>';print_r($old_image);die();
        if ($old_image && file_exists($this->upload_path2 . "/" . $old_image)) {
            unlink($this->upload_path2 . "/" . $old_image);
        }
        //echo '<pre>';print_r($_FILES);die();
        $image_ext = explode('.', $_FILES['image']['name']);
        $extension = end($image_ext);
        list($first) = explode(".", $_FILES['image']['name']);
        //echo '<pre>';print_r($first);die();
        if ($extension == 'jpg' || $extension == 'png' || $extension == 'gif' || $extension == 'JPEG' || $extension == 'JPG') {
            $target_path = 'success_gallery_'.uniqid().'.'.end($image_ext);
            //echo '<pre>';print_r($target_path);die();
            $data['image'] = $target_path;
            //echo '<pre>';print_r($data);die();
            if (move_uploaded_file($_FILES['image']['tmp_name'], 'assets/images/success_gallery/' . $target_path)) {
                $this->db->where('id', $id);
                $this->db->update('success_gallery', $data);
                redirect('admin/show_success_gallery', 'refresh');
            }
        }
    }
    public function prospectus_edit_post()
    {
        $id = $this->input->post('id');
        $old_image = $this->input->post('old_image');
        //echo '<pre>';print_r($old_image);die();
        if ($old_image && file_exists($this->upload_path3 . "/" . $old_image)) {
            unlink($this->upload_path3 . "/" . $old_image);
        }
        //echo '<pre>';print_r($_FILES);die();
        $image_ext = explode('.', $_FILES['image']['name']);
        $extension = end($image_ext);
        list($first) = explode(".", $_FILES['image']['name']);
        //echo '<pre>';print_r($first);die();
        if ($extension == 'jpg' || $extension == 'png' || $extension == 'gif' || $extension == 'JPEG' || $extension == 'JPG') {
            $target_path = 'prospectus_'.uniqid().'.'.end($image_ext);
            //echo '<pre>';print_r($target_path);die();
            $data['image'] = $target_path;
            //echo '<pre>';print_r($data);die();
            if (move_uploaded_file($_FILES['image']['tmp_name'], 'assets/images/prospectus/' . $target_path)) {
                $this->db->where('id', $id);
                $this->db->update('prospectus', $data);
                redirect('admin/show_prospectus', 'refresh');
            }
        }
    }
    public function company_edit_post()
    {
        $id = $this->input->post('id');
        $data['name'] = $this->input->post('name');
        $data['phone'] = $this->input->post('phone');
        $data['website'] = $this->input->post('website');
        $data['address'] = $this->input->post('address');
        //echo '<pre>';print_r($data);die();
        $this->db->where('id', $id);
        $this->db->update('company_info', $data);
        redirect('admin/show_company_info', 'refresh');
    }
    public function contact_edit_post()
    {
        $id = $this->input->post('id');
        $data['address'] = $this->input->post('address');
        $data['phone'] = $this->input->post('phone');
        $data['cell'] = $this->input->post('cell');
        $data['bkash'] = $this->input->post('bkash');
        $data['website'] = $this->input->post('website');

        //echo '<pre>';print_r($data);die();
        $this->db->where('id', $id);
        $this->db->update('contact_info', $data);
        redirect('admin/show_contact_info', 'refresh');
    }
    public function about_edit_post()
    {
        $id = $this->input->post('id');
        //echo '<pre>';print_r($_FILES['image']['error']);die();
        $data['who_we_are'] = $this->input->post('who_we_are');
        $data['why_us'] = $this->input->post('why_us');
        //echo '<pre>';print_r($data);die();
        if ($_FILES['image']['error'] == 4) {
            $this->db->where('id', $id);
            $this->db->update('about_us', $data);
            redirect('admin/show_about_us_info', 'refresh');
        } else {
            $image_ext = explode('.', $_FILES['image']['name']);
            $extension = end($image_ext);
            list($first) = explode(".", $_FILES['image']['name']);
            // echo '<pre>';print_r($first);die();
            if ($extension == 'jpg' || $extension == 'png' || $extension == 'gif' || $extension == 'JPEG' || $extension == 'JPG') {
                $target_path = 'about_image'.'.'.end($image_ext);
                if (move_uploaded_file($_FILES['image']['tmp_name'], 'assets/images/about_us/' . $target_path)) {
                    $data['image'] = $target_path;
                    //echo '<pre>';print_r($data);die();
                    $this->db->where('id', $id);
                    $this->db->update('about_us', $data);
                    redirect('admin/show_about_us_info', 'refresh');
                }
            }
        }

    }
    public function schooling_edit_post()
    {
        $id = $this->input->post('id');
        //echo '<pre>';print_r($_FILES);die();
        $data['residential_facilities'] = $this->input->post('residential_facilities');
        //echo '<pre>';print_r($data);die();
        if ($_FILES['rules_facilities']['error'] == 4) {
            $image_ext = explode('.', $_FILES['parent_responsibility']['name']);
            $extension = end($image_ext);
            list($first) = explode(".", $_FILES['parent_responsibility']['name']);
            // echo '<pre>';print_r($first);die();
            if ($extension == 'jpg' || $extension == 'png' || $extension == 'gif' || $extension == 'JPEG' || $extension == 'JPG') {
                $target_path = 'parent_responsibility_image' . '.' . end($image_ext);
                if (move_uploaded_file($_FILES['parent_responsibility']['tmp_name'], 'assets/images/schooling_system/' . $target_path)) {
                    $data['parent_responsibility'] = $target_path;
                    //echo '<pre>';print_r($data);die();
                    $this->db->where('id', $id);
                    $this->db->update('schooling_system', $data);
                    redirect('admin/show_schooling_info', 'refresh');
                }
            }
        }
        if (($_FILES['rules_facilities']['error'] == 4) && ($_FILES['parent_responsibility']['error'] == 4)) {
            $this->db->where('id', $id);
            $this->db->update('schooling_system', $data);
            redirect('admin/show_schooling_info', 'refresh');
        } else {
            $image_ext = explode('.', $_FILES['rules_facilities']['name']);
            $extension = end($image_ext);
            list($first) = explode(".", $_FILES['rules_facilities']['name']);
            // echo '<pre>';print_r($first);die();
            if ($extension == 'jpg' || $extension == 'png' || $extension == 'gif' || $extension == 'JPEG' || $extension == 'JPG') {
                $target_path = 'rules_facilities_image' . '.' . end($image_ext);
                if (move_uploaded_file($_FILES['rules_facilities']['tmp_name'], 'assets/images/schooling_system/' . $target_path)) {
                    $data['rules_facilities'] = $target_path;
                    //echo '<pre>';print_r($data);die();
                    $this->db->where('id', $id);
                    $this->db->update('schooling_system', $data);
                    redirect('admin/show_schooling_info', 'refresh');
                }
            }
        }

    }
    public function meal_info_edit_post()
    {
        $id = $this->input->post('id');
        //echo '<pre>';print_r($id);die();
        $data['day_id'] = $this->input->post('day_id');
        //$data['meal_timing_id'] = $this->input->post('meal_timing_id');
        $data['b_details'] = $this->input->post('b_details');
        $data['t1_details'] = $this->input->post('t1_details');
        $data['l_details'] = $this->input->post('l_details');
        $data['t2_details'] = $this->input->post('t2_details');
        $data['d_details'] = $this->input->post('d_details');
        //echo '<pre>';print_r($data);die();
        $this->db->where('id', $id);
        $this->db->update('meal_info', $data);
        redirect('admin/show_meal_info', 'refresh');
    }
    public function medium_info_edit_post()
    {
        $id = $this->input->post('id');
        //echo '<pre>';print_r($id);die();
        $data['medium'] = $this->input->post('medium');
        $data['batch_id'] = $this->input->post('batch_id');
        $data['category_one'] = $this->input->post('category_one');
        $data['nr_admission_charge'] = $this->input->post('nr_admission_charge');
        $data['nr_monthly_salary'] = $this->input->post('nr_monthly_salary');
        $data['nr_advance_payment'] = $this->input->post('nr_advance_payment');
        $data['category_two'] = $this->input->post('category_one');
        $data['r_admission_charge'] = $this->input->post('r_admission_charge');
        $data['r_monthly_salary'] = $this->input->post('r_monthly_salary');
        $data['r_advance_payment'] = $this->input->post('r_advance_payment');
        $data['category_three'] = $this->input->post('category_three');
        $data['d_admission_charge'] = $this->input->post('d_admission_charge');
        $data['d_monthly_salary'] = $this->input->post('d_monthly_salary');
        $data['d_advance_payment'] = $this->input->post('d_advance_payment');
        //echo '<pre>';print_r($data);die();
        $this->db->where('id', $id);
        $this->db->update('medium_info', $data);
        redirect('admin/show_medium_info', 'refresh');
    }
    public function success_edit_post()
    {
        $id = $this->input->post('id');
        //echo '<pre>';print_r($id);die();
        $data['year'] = $this->input->post('year');
        $data['total_examinee'] = $this->input->post('total_examinee');
        $data['allowed_written'] = $this->input->post('allowed_written');
        $data['allowed_final'] = $this->input->post('allowed_final');
        //echo '<pre>';print_r($data);die();
        $this->db->where('id', $id);
        $this->db->update('success_info', $data);
        redirect('admin/show_success_info', 'refresh');
    }
    public function class_edit_post()
    {
        $id = $this->input->post('id');
        $data['class_name'] = $this->input->post('class_name');
        $this->db->where('id', $id);
        $this->db->update('class_info', $data);
        redirect('admin/show_class_info', 'refresh');
    }
    public function class_add_post()
    {
        $data['class_name'] = $this->input->post('class_name');
        $this->db->insert('class_info', $data);
        redirect('admin/show_class_info', 'refresh');
    }
    ////Edit Post Ends////

    ////Start Delete Functions////
    public function delete_bio_info($id)
    {
        $this->company_model->delete_bio_info($id);
        redirect('admin/show_bio', 'refresh');
    }
    public function delete_company_info($id)
    {
        $this->company_model->delete_company_info($id);
        $data['company_info'] = $this->company_model->get_company_info();
        $this->load->view('company_info/show_company_info', $data);
    }
    public function delete_schooling_info($id)
    {
        $schooling_info = $this->company_model->get_schooling_info_edit($id);
        //echo '<pre>';print_r($data);die();
        unlink('./assets/images/schooling_system/' . $schooling_info[0]->rules_facilities);
        unlink('./assets/images/schooling_system/' . $schooling_info[0]->parent_responsibility);
        $this->company_model->delete_schooling_info($id);
        redirect('admin/show_schooling_info', 'refresh');
    }
    public function delete_slider_info($id)
    {
        //$id = $this->input->post('id');
        $slider_info = $this->company_model->get_slider_info_edit($id);
        //echo '<pre>';print_r($slider_info);die();
        unlink('./assets/images/slider/' . $slider_info[0]->image);
        $this->company_model->delete_slider_info($id);
        redirect('admin/slider_image_add', 'refresh');
    }
    public function list_slider()
    {
        $this->load->helper("file");
        $files = get_filenames($this->upload_path);
        foreach ($files as $file)
        {
            $file = array(
              'name' => $file,
                'size' =>filesize($this->upload_path.'/'.$file),
            );
        }
        echo json_encode($files);
    }
    public function delete_contact_info($id)
    {
        $this->company_model->delete_contact_info($id);
        $data['contact_info'] = $this->company_model->get_contact_info();
        $this->load->view('contact_info/show_contact_info', $data);
    }
    public function delete_person_info($id)
    {
        $image1 = $this->company_model->get_person_info_edit($id);
        //echo '<pre>';print_r($image1[0]->image);die();
        unlink('./assets/images/person/' . $image1[0]->image);
        $this->company_model->delete_person_info($id);
        redirect('admin/show_person_info', 'refresh');
    }
    public function delete_gallery_info($id)
    {
        $gallery = $this->company_model->get_gallery_info_edit($id);
        //echo '<pre>';print_r($gallery[0]->image);die();
        unlink('./assets/images/gallery/' . $gallery[0]->image);
        $this->company_model->delete_gallery_info($id);
        redirect('admin/show_gallery_info', 'refresh');
    }
    public function delete_success_gallery_info($id)
    {
        $success_gallery = $this->company_model->get_success_gallery_info_edit($id);
        //echo '<pre>';print_r($success_gallery[0]->image);die();
        unlink('./assets/images/success_gallery/' . $success_gallery[0]->image);
        $this->company_model->delete_success_gallery_info($id);
        redirect('admin/show_success_gallery', 'refresh');
    }
    public function delete_prospectus($id)
    {
        $prospectus = $this->company_model->get_prospectus_edit($id);
        //echo '<pre>';print_r($prospectus[0]->image);die();
        unlink('./assets/images/prospectus/' . $prospectus[0]->image);
        $this->company_model->delete_prospectus($id);
        redirect('admin/show_prospectus', 'refresh');
    }
    public function delete_class_info($id)
    {
        $this->company_model->delete_class_info($id);
        redirect('admin/show_class_info', 'refresh');
    }
    public function delete_about_us_info($id)
    {
        $data = $this->company_model->get_about_us_info_edit($id);
        unlink('./assets/images/about_us/' . $data[0]->image);
        $this->company_model->delete_about_us_info($id);
        redirect('admin/show_about_us_info', 'refresh');
    }
    public function delete_weekly_result_info($id)
    {
        $data = $this->company_model->get_weekly_result_info_edit($id);
        unlink('./assets/downloads/weekly_result/' . $data[0]->weekly_result);
        $this->company_model->delete_weekly_result_info($id);
        redirect('admin/show_weekly_result_info', 'refresh');
    }
    public function delete_term_result_info($id)
    {
        $data = $this->company_model->get_term_result_info_edit($id);
        unlink('./assets/downloads/term_results/' . $data[0]->term_result);
        $this->company_model->delete_term_result_info($id);
        redirect('admin/show_term_result', 'refresh');
    }
    public function delete_weekly_syllabus_info($id)
    {
        $data = $this->company_model->get_weekly_syllabus_info_edit($id);
        unlink('./assets/downloads/weekly_syllabus/' . $data[0]->weekly_syllabus);
        $this->company_model->delete_weekly_syllabus_info($id);
        redirect('admin/show_weekly_syllabus_info', 'refresh');
    }
    public function delete_class_routine_info($id)
    {
        $data = $this->company_model->get_class_routine_info_edit($id);
        unlink('./assets/downloads/class_routine/' . $data[0]->class_routine);
        $this->company_model->delete_class_routine_info($id);
        redirect('admin/show_class_routine_info', 'refresh');
    }
    public function delete_meal_info($id)
    {
        $this->company_model->delete_meal_info($id);
        redirect('admin/show_meal_info', 'refresh');
    }
    public function delete_success_info($id)
    {
        $this->company_model->delete_success_info($id);
        redirect('admin/show_success_info', 'refresh');
    }
    public function delete_medium_info($id)
    {
        $this->company_model->delete_medium_info($id);
        redirect('admin/show_medium_info', 'refresh');
    }
    public function delete_admission_info($id)
    {
        $image1 = $this->company_model->get_admission_info_edit($id);
        //echo '<pre>';print_r($image1[0]->image);die();
        unlink('./assets/images/admission_info/' . $image1[0]->image);
        $this->company_model->delete_admission_info($id);
        redirect('admin/show_admission_info', 'refresh');
    }
    ////Delete Functions Ends////

    ////Start Add Post Functions////
    public function batch_add_post()
    {
        $data['batch_name'] = $this->input->post('batch_name');
        $this->db->insert('batch_info', $data);
        redirect('admin/medium_add', 'refresh');
    }
    public function category_add_post()
    {
        $data['category_name'] = $this->input->post('category_name');
        $this->db->insert('category_info', $data);
        redirect('admin/gallery_image_add', 'refresh');
    }
    public function meal_name_add_post()
    {
        $data['meal_name'] = $this->input->post('meal_name');
        $data['time'] = $this->input->post('time');
        $this->db->insert('meal_timing', $data);
        redirect('admin/meal_add', 'refresh');
    }
    public function company_add_post()
    {
        $data['name'] = $this->input->post('name');
        $data['phone'] = $this->input->post('phone');
        $data['website'] = $this->input->post('website');
        $data['address'] = $this->input->post('address');
        //echo '<pre>';print_r($data);die();
        $this->db->insert('company_info', $data);
        redirect('admin/show_company_info', 'refresh');
    }
    public function contact_add_post()
    {
        $data['address'] = $this->input->post('address');
        $data['phone'] = $this->input->post('phone');
        $data['cell'] = $this->input->post('cell');
        $data['bkash'] = $this->input->post('bkash');
        $data['website'] = $this->input->post('website');
        //echo '<pre>';print_r($data);die();
        $this->db->insert('contact_info', $data);
        redirect('admin/show_contact_info', 'refresh');
    }
    public function person_add_post()
    {
        $data['name'] = $this->input->post('name');
        $data['designation'] = $this->input->post('designation');
        $data['message'] = $this->input->post('message');
        $data['address'] = $this->input->post('address');
        $data['phone'] = $this->input->post('phone');
        $image_ext = explode('.', $_FILES['image']['name']);
        $extension = end($image_ext);
        list($first) = explode(".", $_FILES['image']['name']);
        if ($extension == 'jpg' || $extension == 'png' || $extension == 'gif' || $extension == 'JPEG' || $extension == 'JPG') {
            $target_path = 'person_image_' . $first . '.' . end($image_ext);
            if (move_uploaded_file($_FILES['image']['tmp_name'], 'assets/images/person/' . $target_path)) {
                $data['image'] = $target_path;
                //echo '<pre>';print_r($data);die();
                $this->db->insert('person', $data);
                redirect('admin/show_person_info');
            }
        }

    }
    public function bio_add_post()
    {
        $data['bio'] = $this->input->post('bio');
        //echo '<pre>';print_r($data);die();
        $this->db->insert('bio_info', $data);
        redirect('admin/show_bio', 'refresh');

    }
    public function slider_image_add_post()
    {
        //$this->load->view('slider/add_slider_image');
        $data['image'] = $this->input->post('file');
        echo '<pre>';
        print_r($data);
        die();
    }
    public function slider_image_description_add_post()
    {
        //$this->load->view('slider/add_slider_image');
        $data['description'] = $this->input->post('description');
        //echo '<pre>';print_r($data);die();
        $id = $this->input->post('id');
        $this->db->where('id', $id);
        $this->db->update('slider_image', $data);
        //echo '<pre>';print_r($data);die();
        redirect('admin/slider_image_add', 'refresh');
    }
    public function weekly_result_add_post()
    {
        $data['year_id'] = $this->input->post('year_id');
        $data['month_id'] = $this->input->post('month_id');
        $data['week'] = $this->input->post('week');
        $data['medium'] = $this->input->post('medium');
        $data['batch_id'] = $this->input->post('batch_id');
        //$this->db->insert('weekly_result_info', $data);
        $result_info_ext = explode('.', $_FILES['weekly_result']['name']);
        $extension = end($result_info_ext);
        list($first) = explode(".", $_FILES['weekly_result']['name']);
        if ($extension == 'pdf') {
            $target_path = 'weekly_result_' . $data['year_id'] .'_'.$data['week'] .'.' . end($result_info_ext);
            if (move_uploaded_file($_FILES['weekly_result']['tmp_name'], 'assets/downloads/weekly_result/' . $target_path)) {
                $data['weekly_result'] = $target_path;
                //echo '<pre>';print_r($data);die();
                $this->db->insert('weekly_result_info', $data);
                redirect('admin/show_weekly_result_info');
            }
        }

    }
    public function weekly_syllabus_add_post()
    {
        $data['year_id'] = $this->input->post('year_id');
        $data['month_id'] = $this->input->post('month_id');
        $data['week'] = $this->input->post('week');
        $data['medium'] = $this->input->post('medium');
        $data['batch_id'] = $this->input->post('batch_id');
        //$this->db->insert('weekly_result_info', $data);
        $syllabus_info_ext = explode('.', $_FILES['weekly_syllabus']['name']);
        $extension = end($syllabus_info_ext);
        list($first) = explode(".", $_FILES['weekly_syllabus']['name']);
        if ($extension == 'pdf') {
            $target_path = 'weekly_syllabus_' . $data['year_id'] .'_'.$data['week'] .'.' . end($syllabus_info_ext);
            if (move_uploaded_file($_FILES['weekly_syllabus']['tmp_name'], 'assets/downloads/weekly_syllabus/' . $target_path)) {
                $data['weekly_syllabus'] = $target_path;
                //echo '<pre>';print_r($data);die();
                $this->db->insert('weekly_syllabus_info', $data);
                redirect('admin/show_weekly_syllabus_info');
            }
        }

    }
    public function class_routine_add_post()
    {
        $data['year_id'] = $this->input->post('year_id');
        $data['medium'] = $this->input->post('medium');
        $data['batch_id'] = $this->input->post('batch_id');
        //$this->db->insert('weekly_result_info', $data);
        $routine_info_ext = explode('.', $_FILES['class_routine']['name']);
        $extension = end($routine_info_ext);
        list($first) = explode(".", $_FILES['class_routine']['name']);
        if ($extension == 'pdf') {
            $target_path = 'class_routine_' . $data['year_id'] .'_'.$data['batch_id'].'.' . end($routine_info_ext);
            if (move_uploaded_file($_FILES['class_routine']['tmp_name'], 'assets/downloads/class_routine/' . $target_path)) {
                $data['class_routine'] = $target_path;
                //echo '<pre>';print_r($data);die();
                $this->db->insert('class_routine_info', $data);
                redirect('admin/show_class_routine_info');
            }
        }

    }
    public function gallery_add_post()
    {
        $data['category'] = $this->input->post('category');
        $image_ext = explode('.', $_FILES['image']['name']);
        $extension = end($image_ext);
        list($first) = explode(".", $_FILES['image']['name']);
        if ($extension == 'jpg' || $extension == 'png' || $extension == 'gif' || $extension == 'JPEG' || $extension == 'JPG') {
            $target_path = 'gallery_image_'.uniqid().'_'. $data['category'] . '.' . end($image_ext);
            if (move_uploaded_file($_FILES['image']['tmp_name'], 'assets/images/gallery/' . $target_path)) {
                $data['image'] = $target_path;
                //echo '<pre>';print_r($data);die();
                $this->db->insert('gallery', $data);
                redirect('admin/show_gallery_info');
            }
        }
    }
    public function success_gallery_add_post()
    {
        $image_ext = explode('.', $_FILES['image']['name']);
        $extension = end($image_ext);
        list($first) = explode(".", $_FILES['image']['name']);
        if ($extension == 'jpg' || $extension == 'png' || $extension == 'gif' || $extension == 'JPEG' || $extension == 'JPG') {
            $target_path = 'success_gallery_'.uniqid().'.'.end($image_ext);
            if (move_uploaded_file($_FILES['image']['tmp_name'], 'assets/images/success_gallery/' . $target_path)) {
                $data['image'] = $target_path;
                //echo '<pre>';print_r($data);die();
                $this->db->insert('success_gallery', $data);
                redirect('admin/show_success_gallery');
            }
        }
    }
    public function prospectus_add_post()
    {
        //$image = $this->input->post('image');

        $image_ext = explode('.', $_FILES['image']['name']);
       // echo '<pre>';print_r($image_ext);die();
        $extension = end($image_ext);
        list($first) = explode(".", $_FILES['image']['name']);
        if ($extension == 'jpg' || $extension == 'png' || $extension == 'gif' || $extension == 'JPEG' || $extension == 'JPG') {
            $target_path = 'prospectus_'.uniqid().'.'.end($image_ext);
            if (move_uploaded_file($_FILES['image']['tmp_name'], 'assets/images/prospectus/' . $target_path)) {
                $data['image'] = $target_path;
                //echo '<pre>';print_r($data);die();
                $this->db->insert('prospectus', $data);
                redirect('admin/show_prospectus');
            }
        }
    }
    public function success_add_post()
    {
        $data['year'] = $this->input->post('year');
        $data['total_examinee'] = $this->input->post('total_examinee');
        $data['allowed_written'] = $this->input->post('allowed_written');
        $data['allowed_final'] = $this->input->post('allowed_final');
        //echo '<pre>';print_r($data);die();
        $this->db->insert('success_info', $data);
        redirect('admin/show_success_info', 'refresh');
    }
    public function medium_info_add_post()
    {
        $data['medium'] = $this->input->post('medium');
        $data['batch_id'] = $this->input->post('batch_id');
        $data['category_one'] = $this->input->post('category_one');
        $data['nr_admission_charge'] = $this->input->post('nr_admission_charge');
        $data['nr_monthly_salary'] = $this->input->post('nr_monthly_salary');
        $data['nr_advance_payment'] = $this->input->post('nr_advance_payment');
        $data['category_two'] = $this->input->post('category_one');
        $data['r_admission_charge'] = $this->input->post('r_admission_charge');
        $data['r_monthly_salary'] = $this->input->post('r_monthly_salary');
        $data['r_advance_payment'] = $this->input->post('r_advance_payment');
        $data['category_three'] = $this->input->post('category_one');
        $data['d_admission_charge'] = $this->input->post('d_admission_charge');
        $data['d_monthly_salary'] = $this->input->post('d_monthly_salary');
        $data['d_advance_payment'] = $this->input->post('d_advance_payment');
        //echo '<pre>';print_r($data);die();
        $this->db->insert('medium_info', $data);
        redirect('admin/show_medium_info', 'refresh');
    }
    public function meal_info_add_post()
    {
        $data['day_id'] = $this->input->post('day_id');
        $data['breakfast_timing'] = 1;
        $data['b_details'] = $this->input->post('b_details');
        $data['tiffin_first_timing'] = 2;
        $data['t1_details'] = $this->input->post('t1_details');
        $data['lunch_timing'] = 3;
        $data['l_details'] = $this->input->post('l_details');
        $data['tiffin_second_timing'] = 4;
        $data['t2_details'] = $this->input->post('t2_details');
        $data['dinner_timing'] = 5;
        $data['d_details'] = $this->input->post('d_details');

        //echo '<pre>';print_r($data);die();
        $this->db->insert('meal_info', $data);
        redirect('admin/show_meal_info', 'refresh');
    }
    public function about_add_post()
    {
        $data['who_we_are'] = $this->input->post('who_we_are');
        $data['why_us'] = $this->input->post('why_us');
        $image_ext = explode('.', $_FILES['image']['name']);
        $extension = end($image_ext);
        list($first) = explode(".", $_FILES['image']['name']);
        if ($extension == 'jpg' || $extension == 'png' || $extension == 'gif' || $extension == 'JPEG' || $extension == 'JPG') {
            $target_path = 'about_image'.'.'.end($image_ext);
            if (move_uploaded_file($_FILES['image']['tmp_name'], 'assets/images/about_us/' . $target_path)) {
                $data['image'] = $target_path;
                //echo '<pre>';print_r($data);die();
                $this->db->insert('about_us', $data);
                redirect('admin/show_about_us_info');
            }
        }

    }
    public function admission_add_post()
    {
        $data['admission_start'] = $this->input->post('admission_start');
        $data['class_start'] = $this->input->post('class_start');
        $image_ext = explode('.', $_FILES['image']['name']);
        $extension = end($image_ext);
        list($first) = explode(".", $_FILES['image']['name']);
        if ($extension == 'jpg' || $extension == 'png' || $extension == 'gif' || $extension == 'JPEG' || $extension == 'JPG') {
            $target_path = 'admission_info_image_' . $first . '.' . end($image_ext);
            if (move_uploaded_file($_FILES['image']['tmp_name'], 'assets/images/admission_info/' . $target_path)) {
                $data['image'] = $target_path;
                //echo '<pre>';print_r($data);die();
                $this->db->insert('admission_info', $data);
                redirect('admin/show_admission_info');
            }
        }
    }
    public function schooling_system_add_post()
    {
        $data['residential_facilities'] = $this->input->post('residential_facilities');
        $image_ext = explode('.', $_FILES['rules_facilities']['name']);
        $image_ext_one = explode('.', $_FILES['parent_responsibilities']['name']);
        $extension = end($image_ext);
        $extension_one = end($image_ext_one);
        list($first) = explode(".", $_FILES['rules_facilities']['name']);
        list($first_one) = explode(".", $_FILES['parent_responsibilities']['name']);

        if (($extension == 'jpg' || $extension == 'png' || $extension == 'gif' || $extension == 'JPEG' || $extension == 'JPG') &&
            ($extension_one == 'jpg' || $extension_one == 'png' || $extension_one == 'gif' || $extension_one == 'JPEG' || $extension == 'JPG')
        ) {
            $target_path = 'rules_facilities_image' . '.' . end($image_ext);
            $target_path_one = 'parent_responsibility_image' . '.' . end($image_ext_one);
            if ((move_uploaded_file($_FILES['rules_facilities']['tmp_name'], 'assets/images/schooling_system/' . $target_path)) &&
                (move_uploaded_file($_FILES['parent_responsibilities']['tmp_name'], 'assets/images/schooling_system/' . $target_path_one))
            ) {
                $data['rules_facilities'] = $target_path;
                $data['parent_responsibility'] = $target_path_one;
                //echo '<pre>';print_r($data);die();
                $this->db->insert('schooling_system', $data);
                redirect('admin/show_schooling_info');
            }
        }
    }
    public function term_result_add_post()
    {
        $data['year_id'] = $this->input->post('year_id');
        $data['term'] = $this->input->post('term');
        $data['medium'] = $this->input->post('medium');
        $data['batch_id'] = $this->input->post('batch_id');
        //$this->db->insert('weekly_result_info', $data);
        $term_result_info_ext = explode('.', $_FILES['term_result']['name']);
        $extension = end($term_result_info_ext);
        list($first) = explode(".", $_FILES['term_result']['name']);
        if ($extension == 'pdf') {
            $target_path = 'term_result_' . $data['year_id'] .'_'.$data['term'].'_'.$data['medium'].'_'.$data['batch_id'].'.' . end($term_result_info_ext);
            if (move_uploaded_file($_FILES['term_result']['tmp_name'], 'assets/downloads/term_results/' . $target_path)) {
                $data['term_result'] = $target_path;
                //echo '<pre>';print_r($data);die();
                $this->db->insert('term_result_info', $data);
                redirect('admin/show_term_result');
            }
        }

    }
    ////Add Post Functions Ends////

    public function remove_images()
    {
        $file = $this->input->post('file');
        if ($file && file_exists($this->upload_path . "/" . $file)) {
            unlink($this->upload_path . "/" . $file);
        }
    }
    public function upload()
    {
        if (!empty($_FILES)) {
            $config["upload_path"] = $this->upload_path;
            $config["allowed_types"] = "jpg|png|gif";
            $this->load->library('upload', $config);
            $image_ext = explode('.', $_FILES['file']['name']);
            $extension = end($image_ext);
            list($first) = explode(".", $_FILES['file']['name']);
            if ($extension == 'jpg' || $extension == 'png' || $extension == 'gif' || $extension == 'JPEG' || $extension == 'JPG') {
                $target_path = 'slider_image_' . $first . '.' . end($image_ext);
                if (move_uploaded_file($_FILES['file']['tmp_name'], 'assets/images/slider/' . $target_path)) {
                    $data['image'] = $target_path;
                    //echo '<pre>';print_r($data);die();
                    $this->db->insert('slider_image', $data);
                }
            }


        }
    }
}
