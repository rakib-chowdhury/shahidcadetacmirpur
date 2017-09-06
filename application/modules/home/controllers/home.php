<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MX_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('company_model');
        $this->load->helper('text');

    }

    public function index()
    {
        $data['color'] = $this->company_model->get_web_color();
        //echo '<pre>';print_r($data);die();
        $data['person'] = $this->company_model->get_person_info();
        $data['chairman'] = $this->company_model->get_chairman_info();
        $data['md'] = $this->company_model->get_md_info();
        $data['bio_info'] = $this->company_model->get_bio_info();
        //echo '<pre>';print_r($data['chairman']);die();
        $p = 'phone as phone';
        $q = 'cell as cell';
        $data['slider_info'] = $this->company_model->get_slider_info();
        $data['gallery'] = $this->company_model->get_gallery_info();
        $data['success_gallery'] = $this->company_model->get_success_gallery_info();
        $data['about_info'] = $this->company_model->get_about_info_all();
        //$data['phone'] = $this->company_model->get_contact_info($p)[0]->phone;
        $cell = $this->company_model->get_contact_info($q)[0]->cell;
        $data['contact_info'] = $this->company_model->get_contact_info_all();
        $data['cell'] = explode(',', $cell);
        $phone = $this->company_model->get_contact_info($p)[0]->phone;
        $data['phone'] = explode(',', $phone);
        //$data['cell'] = explode('data["contact_info"][0]')
        //echo '<pre>';print_r($data['phone']);die();
        $this->load->view('home', $data);
    }

    public function login()
    {
        $this->load->view('login');
    }

    public function login_post()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        //echo '<pre>';print_r($username);die();
        if ($this->company_model->get_login_info($username, $password) == null) {
            //echo 'Invalid Credentials';
            $this->session->set_flashdata('msg', 'Invalid Credentials');
            redirect('home/login', 'refresh');
        } else {
            $data['logged_in'] = true;
            $data['username'] = $this->input->post('username');
            //$data['user_type'] = $this->input->post('username');
            $this->session->set_userdata($data);
            redirect('admin');
        }
        //echo '<pre>';print_r($credentials);die();
    }

    public function log_out()
    {
        $this->session->unset_userdata('logged_in');
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('usertype');
        redirect('home/login', 'refresh');
    }

    public function get_chairman_info()
    {
        $data['color'] = $this->company_model->get_web_color();
        $chairman = $this->company_model->get_chairman_info();
        $message = $chairman->message;
        //echo '<pre>';print_r($message);die();
        return $message;
    }

    public function who_we_are()
    {
        $data['color'] = $this->company_model->get_web_color();
        $data['gallery'] = $this->company_model->get_gallery_info();
        $data['menu'] = 'Home';
        $data['submenu'] = 'Who We Are?';
        $d = 'who_we_are as details';
        $p = 'phone as phone';
        $q = 'cell as cell';
        $data['about'] = $this->company_model->get_about_info_all();
        $data['about_content'] = $this->company_model->get_about_info($d)[0]->details;
        $data['content'] = $this->company_model->get_about_info($d)[0]->details;
        $cell = $this->company_model->get_contact_info($q)[0]->cell;
        $data['contact_info'] = $this->company_model->get_contact_info_all();
        $data['cell'] = explode(',', $cell);
        $phone = $this->company_model->get_contact_info($p)[0]->phone;
        $data['phone'] = explode(',', $phone);
        //echo '<pre>';print_r($data['phone']);die();
        $this->load->view('view_writing', $data);
    }

    public function why_us()
    {
        $data['color'] = $this->company_model->get_web_color();
        $data['gallery'] = $this->company_model->get_gallery_info();
        $data['menu'] = 'Home';
        $data['submenu'] = 'Why Us?';
        $d = 'why_us as details';
        $p = 'phone as phone';
        $q = 'cell as cell';
        $data['about'] = $this->company_model->get_about_info_all();
        $data['about_content'] = $this->company_model->get_about_info($d)[0]->details;
        $data['content'] = $this->company_model->get_about_info($d)[0]->details;
        //$data['phone'] = $this->company_model->get_contact_info($p)[0]->phone;
        $cell = $this->company_model->get_contact_info($q)[0]->cell;
        $data['contact_info'] = $this->company_model->get_contact_info_all();
        $data['cell'] = explode(',', $cell);
        $phone = $this->company_model->get_contact_info($p)[0]->phone;
        $data['phone'] = explode(',', $phone);
        //echo '<pre>';print_r($data['content']);die();
        $this->load->view('view_writing', $data);
    }

    public function residential_facilities()
    {
        $data['color'] = $this->company_model->get_web_color();
        $data['gallery'] = $this->company_model->get_gallery_info();
        $data['menu'] = 'Home';
        $data['submenu'] = 'Residential Facilities';
        $d = 'who_we_are as details';
        $ss = 'residential_facilities';
        $p = 'phone as phone';
        $q = 'cell as cell';
//        $data['phone'] = $this->company_model->get_contact_info($p)[0]->phone;
        $cell = $this->company_model->get_contact_info($q)[0]->cell;
        $data['contact_info'] = $this->company_model->get_contact_info_all();
        $data['cell'] = explode(',', $cell);
        $phone = $this->company_model->get_contact_info($p)[0]->phone;
        $data['phone'] = explode(',', $phone);
        $data['about'] = $this->company_model->get_about_info_all();
        $data['content'] = $this->company_model->get_schooling_system($ss)[0]->residential_facilities;
        $data['about_content'] = $this->company_model->get_about_info($d)[0]->details;
        $this->load->view('view_writing', $data);
    }

    public function prospectus()
    {
        $data['color'] = $this->company_model->get_web_color();
        $data['gallery'] = $this->company_model->get_gallery_info();
        $data['menu'] = 'Home';
        $data['submenu'] = 'Prospectus';
        $d = 'who_we_are as details';
        $address = 'address as address';
        $website = 'website as website';
        $p = 'phone as phone';
        $q = 'cell as cell';
        $data['about'] = $this->company_model->get_about_info_all();
        $data['address'] = $this->company_model->get_contact_info($address)[0]->address;
        $data['website'] = $this->company_model->get_contact_info($website)[0]->website;
        //$data['phone'] = $this->company_model->get_contact_info($p)[0]->phone;
        $cell = $this->company_model->get_contact_info($q)[0]->cell;
        $data['contact_info'] = $this->company_model->get_contact_info_all();
        $data['page_data'] = $this->company_model->get_prospectus_info();
        $data['cell'] = explode(',', $cell);
        $phone = $this->company_model->get_contact_info($p)[0]->phone;
        $data['phone'] = explode(',', $phone);
        //echo '<pre>';print_r($data['page_data']);die();
        $data['about_content'] = $this->company_model->get_about_info($d)[0]->details;
        $this->load->view('view_gallery_prospectus', $data);
    }

    public function success_gallery()
    {
        $data['color'] = $this->company_model->get_web_color();
        $data['gallery'] = $this->company_model->get_gallery_info();
        $data['menu'] = 'Home';
        $data['submenu'] = 'Success Gallery';
        $d = 'who_we_are as details';
        $address = 'address as address';
        $website = 'website as website';
        $p = 'phone as phone';
        $q = 'cell as cell';
        $data['about'] = $this->company_model->get_about_info_all();
        $data['address'] = $this->company_model->get_contact_info($address)[0]->address;
        $data['website'] = $this->company_model->get_contact_info($website)[0]->website;
        //$data['phone'] = $this->company_model->get_contact_info($p)[0]->phone;
        $cell = $this->company_model->get_contact_info($q)[0]->cell;
        $data['contact_info'] = $this->company_model->get_contact_info_all();
        $data['page_data'] = $this->company_model->get_success_gallery_info();
        $data['about_content'] = $this->company_model->get_about_info($d)[0]->details;
        $phone = $this->company_model->get_contact_info($p)[0]->phone;
        $data['phone'] = explode(',', $phone);
        $this->load->view('view_gallery_prospectus', $data);
    }

    public function admission()
    {
        $data['color'] = $this->company_model->get_web_color();
        $data['gallery'] = $this->company_model->get_gallery_info();
        $data['title'] = 'Admission Information In Shahid Cadet Academy';
        $data['menu'] = 'Home';
        $data['submenu'] = 'Admission';
        $data['wage'] = 'The list of wages /salary of cadet special batch (Bangla & English version)';
        $d = 'admission_start as admission';
        $e = 'class_start as class';
        $address = 'address as address';
        $image = 'image as image';
        $p = 'phone as phone';
        $q = 'cell as cell';
        $data['admsn_title'] = 'Admission Starts:';
        $data['class_title'] = 'Class Starts:';
        $data['contact_title'] = 'If You Need More Information Please Contact';
        $data['contact_details'] = $this->company_model->get_contact_info($address)[0]->address;
        $data['about'] = $this->company_model->get_about_info_all();
        $data['medium_info'] = $this->company_model->get_medium_info();
        $data['content_admission'] = $this->company_model->get_admission_info($d)[0]->admission;
        $data['content_class'] = $this->company_model->get_admission_info($e)[0]->class;
        $data['content_image'] = $this->company_model->get_admission_info($image)[0]->image;
        //$data['phone'] = $this->company_model->get_contact_info($p)[0]->phone;
        $cell = $this->company_model->get_contact_info($q)[0]->cell;
        $data['contact_info'] = $this->company_model->get_contact_info_all();
        $data['cell'] = explode(',', $cell);
        $phone = $this->company_model->get_contact_info($p)[0]->phone;
        $data['phone'] = explode(',', $phone);
        //echo '<pre>';print_r($data['medium_info']);die();
        $this->load->view('view_admission', $data);
    }

    public function message_chairman()
    {
        $data['color'] = $this->company_model->get_web_color();
        $data['gallery'] = $this->company_model->get_gallery_info();
        $data['title'] = 'Message From Chairman';
        $data['chairman'] = $this->company_model->get_chairman_info();
        $data['menu'] = 'Home';
        $data['submenu'] = 'Message From Chairman';
        $address = 'address as address';
        $p = 'phone as phone';
        $q = 'cell as cell';
        //$data['phone'] = $this->company_model->get_contact_info($p)[0]->phone;
        $cell = $this->company_model->get_contact_info($q)[0]->cell;
        $data['contact_info'] = $this->company_model->get_contact_info_all();
        $data['cell'] = explode(',', $cell);
        $phone = $this->company_model->get_contact_info($p)[0]->phone;
        $data['phone'] = explode(',', $phone);
        $data['contact_title'] = 'If You Need More Information Please Contact';
        $data['contact_details'] = $this->company_model->get_contact_info($address)[0]->address;
        $data['about'] = $this->company_model->get_about_info_all();
        $this->load->view('view_msg', $data);
    }

    public function message_md()
    {
        $data['color'] = $this->company_model->get_web_color();
        $data['gallery'] = $this->company_model->get_gallery_info();
        $data['title'] = 'Message From Managing Director';
        $data['chairman'] = $this->company_model->get_md_info();
        $data['menu'] = 'Home';
        $data['submenu'] = 'Message From Managing Director';
        $address = 'address as address';
        $p = 'phone as phone';
        $q = 'cell as cell';
        $data['contact_title'] = 'If You Need More Information Please Contact';
        $data['contact_details'] = $this->company_model->get_contact_info($address)[0]->address;
        $data['about'] = $this->company_model->get_about_info_all();
        //$data['phone'] = $this->company_model->get_contact_info($p)[0]->phone;
        $cell = $this->company_model->get_contact_info($q)[0]->cell;
        $data['contact_info'] = $this->company_model->get_contact_info_all();
        $data['cell'] = explode(',', $cell);
        $phone = $this->company_model->get_contact_info($p)[0]->phone;
        $data['phone'] = explode(',', $phone);
        $this->load->view('view_msg', $data);
    }

    public function message_dmd()
    {
        $data['color'] = $this->company_model->get_web_color();
        $data['gallery'] = $this->company_model->get_gallery_info();
        $data['title'] = 'Message From Deputy Managing Director';
        $data['chairman'] = $this->company_model->get_dmd_info();
        $data['menu'] = 'Home';
        $p = 'phone as phone';
        $q = 'cell as cell';
        $data['submenu'] = 'Message From Deputy Managing Director';
        $address = 'address as address';
        $data['contact_title'] = 'If You Need More Information Please Contact';
        $data['contact_details'] = $this->company_model->get_contact_info($address)[0]->address;
        $data['about'] = $this->company_model->get_about_info_all();
        //$data['phone'] = $this->company_model->get_contact_info($p)[0]->phone;
        $cell = $this->company_model->get_contact_info($q)[0]->cell;
        $data['contact_info'] = $this->company_model->get_contact_info_all();
        $data['cell'] = explode(',', $cell);
        $phone = $this->company_model->get_contact_info($p)[0]->phone;
        $data['phone'] = explode(',', $phone);
        $this->load->view('view_msg', $data);
    }

    public function rules_facilities()
    {
        $data['color'] = $this->company_model->get_web_color();
        $data['gallery'] = $this->company_model->get_gallery_info();
        $data['title'] = 'Schooling System';
        $data['menu'] = 'Home';
        $data['submenu'] = 'Rules & Facilities';
        $ss = 'rules_facilities';
        $d = 'who_we_are as details';
        $address = 'address as address';
        $p = 'phone as phone';
        $q = 'cell as cell';
        $data['page_data'] = $this->company_model->get_schooling_system($ss)[0]->rules_facilities;
        //echo '<pre>';print_r($data);die();
        $data['contact_details'] = $this->company_model->get_contact_info($address)[0]->address;
        $data['content'] = $this->company_model->get_about_info($d)[0]->details;
        $data['about'] = $this->company_model->get_about_info_all();
        //$data['phone'] = $this->company_model->get_contact_info($p)[0]->phone;
        $cell = $this->company_model->get_contact_info($q)[0]->cell;
        $data['contact_info'] = $this->company_model->get_contact_info_all();
        $data['cell'] = explode(',', $cell);
        $phone = $this->company_model->get_contact_info($p)[0]->phone;
        $data['phone'] = explode(',', $phone);
        $this->load->view('view_schooling_system', $data);
    }

    public function parent_responsibility()
    {
        $data['color'] = $this->company_model->get_web_color();
        $data['gallery'] = $this->company_model->get_gallery_info();
        $data['title'] = 'Schooling System';
        $data['menu'] = 'Home';
        $d = 'who_we_are as details';
        $data['submenu'] = 'Parent Responsibilities';
        $address = 'address as address';
        $ss = 'parent_responsibility';
        $p = 'phone as phone';
        $q = 'cell as cell';
        //$data['phone'] = $this->company_model->get_contact_info($p)[0]->phone;
        $cell = $this->company_model->get_contact_info($q)[0]->cell;
        $data['contact_info'] = $this->company_model->get_contact_info_all();
        $data['cell'] = explode(',', $cell);
        $phone = $this->company_model->get_contact_info($p)[0]->phone;
        $data['phone'] = explode(',', $phone);
        $data['page_data'] = $this->company_model->get_schooling_system($ss)[0]->parent_responsibility;
        //echo '<pre>';print_r($data['page_data']);die();
        $data['contact_details'] = $this->company_model->get_contact_info($address)[0]->address;
        $data['about'] = $this->company_model->get_about_info_all();
        $data['content'] = $this->company_model->get_about_info($d)[0]->details;
        $this->load->view('view_schooling_system', $data);
    }

    public function bangla_medium()
    {
        $data['color'] = $this->company_model->get_web_color();
        $data['gallery'] = $this->company_model->get_gallery_info();
        $data['menu'] = 'Home';
        $data['submenu'] = 'Bangla Medium';
        $d = 'who_we_are as details';
        $e = 'bangla';
        $p = 'phone as phone';
        $q = 'cell as cell';
        $data['medium'] = $this->company_model->get_medium_info_where($e);
        //echo '<pre>';print_r($data);die();
        $data['about'] = $this->company_model->get_about_info_all();
        $data['about_content'] = $this->company_model->get_about_info($d)[0]->details;
        //$data['phone'] = $this->company_model->get_contact_info($p)[0]->phone;
        $cell = $this->company_model->get_contact_info($q)[0]->cell;
        $data['contact_info'] = $this->company_model->get_contact_info_all();
        $data['cell'] = explode(',', $cell);
        $phone = $this->company_model->get_contact_info($p)[0]->phone;
        $data['phone'] = explode(',', $phone);
        $this->load->view('view_medium', $data);
    }

    public function weekly_result()
    {
        $data['color'] = $this->company_model->get_web_color();
        $data['gallery'] = $this->company_model->get_gallery_info();
        $data['menu'] = 'Home';
        $data['submenu'] = 'Weekly Result';
        $data['show_div'] = 0;
        $data['a'] = 'weekly_result_post';
        $d = 'who_we_are as details';
        $p = 'phone as phone';
        $q = 'cell as cell';
        $data['batch_info'] = $this->company_model->get_batch_info();
        $data['month_info'] = $this->company_model->get_month_info();
        $data['year_month'] = $this->company_model->get_month_year_info();
        //echo '<pre>';print_r($data['month_info']);die();
        $data['content'] = $this->company_model->get_weekly_result_info();
        //echo '<pre>';print_r($data);die();
        //$data['phone'] = $this->company_model->get_contact_info($p)[0]->phone;
        $cell = $this->company_model->get_contact_info($q)[0]->cell;
        $data['contact_info'] = $this->company_model->get_contact_info_all();
        $data['cell'] = explode(',', $cell);
        $phone = $this->company_model->get_contact_info($p)[0]->phone;
        $data['phone'] = explode(',', $phone);
        $data['about'] = $this->company_model->get_about_info_all();
        $data['about_content'] = $this->company_model->get_about_info($d)[0]->details;
        $this->load->view('download_weekly_result', $data);
    }

    public function weekly_result_post()
    {
        $data['color'] = $this->company_model->get_web_color();
        $data['gallery'] = $this->company_model->get_gallery_info();
        $data['menu'] = 'Home';
        $data['submenu'] = 'Weekly Result';
        $data['show_div'] = 1;
        $data['a'] = 'weekly_result_post';
        $d = 'who_we_are as details';
        $p = 'phone as phone';
        $q = 'cell as cell';
        $y = $this->input->post('year_id');
        $m = $this->input->post('month_id');
        $w = $this->input->post('week');
        $s = $this->input->post('batch_id');
        $data['batch_info'] = $this->company_model->get_batch_info();
        $data['month_info'] = $this->company_model->get_month_info();
        $data['year_month'] = $this->company_model->get_month_year_info();
        //echo '<pre>';print_r($data);die();
        //$data['phone'] = $this->company_model->get_contact_info($p)[0]->phone;
        $cell = $this->company_model->get_contact_info($q)[0]->cell;
        $data['contact_info'] = $this->company_model->get_contact_info_all();
        $data['cell'] = explode(',', $cell);
        $phone = $this->company_model->get_contact_info($p)[0]->phone;
        $data['phone'] = explode(',', $phone);
        $data['content'] = $this->company_model->get_month_year_info_where($y, $m, $w, $s);
        //echo '<pre>';print_r($data['weekly_result']);die();
        $data['about'] = $this->company_model->get_about_info_all();
        $data['about_content'] = $this->company_model->get_about_info($d)[0]->details;
        $this->load->view('download_weekly_result', $data);
    }

    public function weekly_syllabus()
    {
        $data['color'] = $this->company_model->get_web_color();
        $data['gallery'] = $this->company_model->get_gallery_info();
        $data['menu'] = 'Home';
        $data['submenu'] = 'Weekly Syllabus';
        $data['show_div'] = 0;
        $p = 'phone as phone';
        $q = 'cell as cell';
        $data['a'] = 'weekly_syllabus_post';
        $d = 'who_we_are as details';
        $data['month_info'] = $this->company_model->get_month_info();
        $data['batch_info'] = $this->company_model->get_batch_info();
        $data['year_month'] = $this->company_model->get_month_year_info_syllabus();
        //echo '<pre>';print_r($data['month_info']);die();
        $data['content'] = $this->company_model->get_weekly_syllabus_info();
        //echo '<pre>';print_r($data);die();
        //$data['phone'] = $this->company_model->get_contact_info($p)[0]->phone;
        $data['contact_info'] = $this->company_model->get_contact_info_all();
        $cell = $this->company_model->get_contact_info($q)[0]->cell;
        $data['cell'] = explode(',', $cell);
        $phone = $this->company_model->get_contact_info($p)[0]->phone;
        $data['phone'] = explode(',', $phone);
        $data['about'] = $this->company_model->get_about_info_all();
        $data['about_content'] = $this->company_model->get_about_info($d)[0]->details;
        $this->load->view('download_weekly_syllabus', $data);
    }

    public function weekly_syllabus_post()
    {
        $data['color'] = $this->company_model->get_web_color();
        $data['gallery'] = $this->company_model->get_gallery_info();
        $data['menu'] = 'Home';
        $data['submenu'] = 'Weekly Syllabus';
        $data['show_div'] = 1;
        $data['a'] = 'weekly_syllabus_post';
        $d = 'who_we_are as details';
        $y = $this->input->post('year_id');
        $m = $this->input->post('month_id');
        $w = $this->input->post('week');
        $s = $this->input->post('batch_id');
        $data['batch_info'] = $this->company_model->get_batch_info();
        $data['month_info'] = $this->company_model->get_month_info();
        $data['year_month'] = $this->company_model->get_month_year_info_syllabus();
        //echo '<pre>';print_r($data);die();
        $data['content'] = $this->company_model->get_syllabus_info_where($y, $m, $w, $s);
        //echo '<pre>';print_r($data['content']);die();
        $p = 'phone as phone';
        $q = 'cell as cell';
        $cell = $this->company_model->get_contact_info($q)[0]->cell;
        $data['cell'] = explode(',', $cell);
        $data['contact_info'] = $this->company_model->get_contact_info_all();
        $phone = $this->company_model->get_contact_info($p)[0]->phone;
        $data['phone'] = explode(',', $phone);
        $data['about'] = $this->company_model->get_about_info_all();
        $data['about_content'] = $this->company_model->get_about_info($d)[0]->details;
        $this->load->view('download_weekly_syllabus', $data);
    }

    public function class_routine()
    {
        $data['color'] = $this->company_model->get_web_color();
        $data['gallery'] = $this->company_model->get_gallery_info();
        $data['menu'] = 'Home';
        $data['submenu'] = 'Class Routine';
        $data['show_div'] = 0;
        $p = 'phone as phone';
        $q = 'cell as cell';
        $data['a'] = 'class_routine_post';
        $d = 'who_we_are as details';
        $data['batch_info'] = $this->company_model->get_batch_info();
        $data['year_medium_info'] = $this->company_model->get_year_medium_routine();
        //$data['content'] = $this->company_model->get_routine_info();
        //echo '<pre>';print_r($data);die();
        $data['phone'] = $this->company_model->get_contact_info($p)[0]->phone;
        $cell = $this->company_model->get_contact_info($q)[0]->cell;
        $data['contact_info'] = $this->company_model->get_contact_info_all();
        $data['cell'] = explode(',', $cell);
        $phone = $this->company_model->get_contact_info($p)[0]->phone;
        $data['phone'] = explode(',', $phone);
        $data['about'] = $this->company_model->get_about_info_all();
        $data['about_content'] = $this->company_model->get_about_info($d)[0]->details;
        $this->load->view('download_class_routine', $data);
    }

    public function class_routine_post()
    {
        $data['color'] = $this->company_model->get_web_color();
        $data['gallery'] = $this->company_model->get_gallery_info();
        $data['menu'] = 'Home';
        $data['submenu'] = 'Class Routine';
        $data['show_div'] = 1;
        $data['a'] = 'class_routine_post';
        $d = 'who_we_are as details';
        $y = $this->input->post('year_id');
        $m = $this->input->post('medium');
        $s = $this->input->post('batch_id');
        $data['batch_info'] = $this->company_model->get_batch_info();
        $data['year_medium_info'] = $this->company_model->get_year_medium_routine();
        //echo '<pre>';print_r($data);die();
        $data['content'] = $this->company_model->get_routine_where($y, $m, $s);
        //echo '<pre>';print_r($data['content']);die();
        $q = 'cell as cell';
        $cell = $this->company_model->get_contact_info($q)[0]->cell;
        $data['cell'] = explode(',', $cell);
        $data['contact_info'] = $this->company_model->get_contact_info_all();
        $p = 'phone as phone';
        $phone = $this->company_model->get_contact_info($p)[0]->phone;
        $data['phone'] = explode(',', $phone);
        $data['about'] = $this->company_model->get_about_info_all();
        $data['about_content'] = $this->company_model->get_about_info($d)[0]->details;
        $this->load->view('download_class_routine', $data);
    }

    public function english_medium()
    {
        $data['color'] = $this->company_model->get_web_color();
        $data['gallery'] = $this->company_model->get_gallery_info();
        $data['menu'] = 'Home';
        $data['submenu'] = 'English Medium';
        $d = 'who_we_are as details';
        $e = 'english';
        $p = 'phone as phone';
        $q = 'cell as cell';
        $data['medium'] = $this->company_model->get_medium_info_where($e);
        //echo '<pre>';print_r($data);die();
        $data['about'] = $this->company_model->get_about_info_all();
        $data['about_content'] = $this->company_model->get_about_info($d)[0]->details;
        //$data['phone'] = $this->company_model->get_contact_info($p)[0]->phone;
        $cell = $this->company_model->get_contact_info($q)[0]->cell;
        $data['contact_info'] = $this->company_model->get_contact_info_all();
        $data['cell'] = explode(',', $cell);
        $phone = $this->company_model->get_contact_info($p)[0]->phone;
        $data['phone'] = explode(',', $phone);
        $this->load->view('view_medium', $data);
    }

    public function success()
    {
        $data['color'] = $this->company_model->get_web_color();
        $data['gallery'] = $this->company_model->get_gallery_info();
        $data['menu'] = 'Home';
        $data['submenu'] = 'Our Success';
        $data['title'] = 'Success Of Shahid Cadet Academy In Cadet College Admission Test';
        $d = 'who_we_are as details';
        $p = 'phone as phone';
        $q = 'cell as cell';
        $data['success_info'] = $this->company_model->get_success_info();
        $data['total_written'] = 0;
        $data['total_allowed'] = 0;
        foreach ($data['success_info'] as $key => $ss) {
            $data['year'] = $key + 1;
            $data['total_written'] += $ss->allowed_written;
            $data['total_allowed'] += $ss->allowed_final;
        }
        //echo '<pre>';print_r($data['total_written']);die();
        $data['about'] = $this->company_model->get_about_info_all();
        $data['about_content'] = $this->company_model->get_about_info($d)[0]->details;
        //$data['phone'] = $this->company_model->get_contact_info($p)[0]->phone;
        $cell = $this->company_model->get_contact_info($q)[0]->cell;
        $data['contact_info'] = $this->company_model->get_contact_info_all();
        $data['cell'] = explode(',', $cell);
        $phone = $this->company_model->get_contact_info($p)[0]->phone;
        $data['phone'] = explode(',', $phone);
        $this->load->view('view_success', $data);
    }

    public function meal_info()
    {
        $data['color'] = $this->company_model->get_web_color();
        $data['gallery'] = $this->company_model->get_gallery_info();
        $data['menu'] = 'Home';
        $data['submenu'] = 'Daily Food Menu';
        $data['title'] = 'Daily Food Menu For Students';
        $d = 'who_we_are as details';
        $p = 'phone as phone';
        $q = 'cell as cell';
        $data['timing'] = $this->company_model->get_timing_info();
        $data['page_info'] = $this->company_model->get_meal_info();


        // echo '<pre>';print_r($data['page_info']);die();
        //$data['phone'] = $this->company_model->get_contact_info($p)[0]->phone;
        $cell = $this->company_model->get_contact_info($q)[0]->cell;
        $data['contact_info'] = $this->company_model->get_contact_info_all();
        $data['cell'] = explode(',', $cell);
        $phone = $this->company_model->get_contact_info($p)[0]->phone;
        $data['phone'] = explode(',', $phone);
        $data['about'] = $this->company_model->get_about_info_all();
        $data['about_content'] = $this->company_model->get_about_info($d)[0]->details;
        $this->load->view('view_meal_info', $data);
    }

    public function search()
    {
        $data['color'] = $this->company_model->get_web_color();
        $list['admission'] = base_url('home/admission');
        $list['who_we_are'] = base_url('home/who_we_are');
        $list['why_us'] = base_url('home/why_us');
        $list['our_success'] = base_url('home/success');
        $list['daily_food_menu'] = base_url('home/meal_info');
        $list['chairman'] = base_url('home/message_chairman');
        $list['md'] = base_url('home/message_md');
        $list['dmd'] = base_url('home/message_dmd');
        $list['rules_facilities'] = base_url('home/rules_facilities');
        $list['parent'] = base_url('home/parent_responsibility');
        $list['responsibility'] = base_url('home/parent_responsibility');
        $list['residential'] = base_url('home/residential_facilities');
        $list['bangla'] = base_url('home/bangla_medium');
        $list['english'] = base_url('home/english_medium');

        $keyword = $this->input->post('keyword');
        $keyword = str_replace(' ', '_', $keyword);
        //echo $keyword;

        $tmp1 = array();
        foreach ($list as $k => $row) {
            if (preg_match("/" . $keyword . "/", $k)) {
                $tmp['link'] = $row;
                $keyword1 = str_replace('_', ' ', $k);
                $tmp['label'] = $keyword1;

                array_push($tmp1, $tmp);
            }
        }
        $data['res'] = $tmp1;
        echo json_encode($tmp1);
    }

    public function search_show()
    {
        $this->load->view('view_search');
    }

    public function term_result()
    {
        $data['color'] = $this->company_model->get_web_color();
        $data['gallery'] = $this->company_model->get_gallery_info();
        $data['menu'] = 'Home';
        $data['submenu'] = 'Term Result';
        $data['show_div'] = 0;
        $data['a'] = 'term_result_post';
        $d = 'who_we_are as details';
        $p = 'phone as phone';
        $q = 'cell as cell';
        $data['batch_info'] = $this->company_model->get_batch_info();
        $data['year_month'] = $this->company_model->get_term_result_year_info();
        //echo '<pre>';print_r($data['month_info']);die();
        $data['content'] = $this->company_model->get_term_result_info();
        //echo '<pre>';print_r($data);die();
        $data['about'] = $this->company_model->get_about_info_all();
        //$data['phone'] = $this->company_model->get_contact_info($p)[0]->phone;
        $cell = $this->company_model->get_contact_info($q)[0]->cell;
        $data['contact_info'] = $this->company_model->get_contact_info_all();
        $data['cell'] = explode(',', $cell);
        $phone = $this->company_model->get_contact_info($p)[0]->phone;
        $data['phone'] = explode(',', $phone);
        $data['about_content'] = $this->company_model->get_about_info($d)[0]->details;
        $this->load->view('download_term_result', $data);
    }

    public function term_result_post()
    {
        $data['color'] = $this->company_model->get_web_color();
        $data['gallery'] = $this->company_model->get_gallery_info();
        $data['menu'] = 'Home';
        $data['submenu'] = 'Term Result';
        $data['show_div'] = 1;
        $data['a'] = 'term_result_post';
        $d = 'who_we_are as details';
        $y = $this->input->post('year_id');
        $m = $this->input->post('medium');
        $b = $this->input->post('batch_id');
        $t = $this->input->post('term');
        $data['batch_info'] = $this->company_model->get_batch_info();
        $data['year_month'] = $this->company_model->get_term_result_year_info();
        //echo '<pre>';print_r($data);die();
        $data['content'] = $this->company_model->get_term_result_info_where($y, $m, $b, $t);
        //echo '<pre>';print_r($data['weekly_result']);die();
        $data['about'] = $this->company_model->get_about_info_all();
        $p = 'phone as phone';
        $phone = $this->company_model->get_contact_info($p)[0]->phone;
        $data['phone'] = explode(',', $phone);
        $q = 'cell as cell';
        $data['contact_info'] = $this->company_model->get_contact_info_all();
        $cell = $this->company_model->get_contact_info($q)[0]->cell;
        $data['cell'] = explode(',', $cell);
        $data['about_content'] = $this->company_model->get_about_info($d)[0]->details;
        $this->load->view('download_term_result', $data);
    }

    public function contact_us()
    {
        $data['color'] = $this->company_model->get_web_color();
        $data['gallery'] = $this->company_model->get_gallery_info();
        $data['menu'] = 'Home';
        $data['submenu'] = 'Contact Us';
        $d = 'who_we_are as details';
        $p = 'phone as phone';
        $q = 'cell as cell';
        $ss = 'contact_info as contact_info';
        $data['phone'] = $this->company_model->get_contact_info($p)[0]->phone;
        $cell = $this->company_model->get_contact_info($q)[0]->cell;
        $data['contact_info'] = $this->company_model->get_contact_info_all();
        $data['cell'] = explode(',', $cell);
        $phone = $this->company_model->get_contact_info($p)[0]->phone;
        $data['phone'] = explode(',', $phone);
        $data['about'] = $this->company_model->get_about_info_all();
        $data['about_content'] = $this->company_model->get_about_info($d)[0]->details;
        $data['content'] = $this->company_model->get_contact_info_all();
        $this->load->view('view_contact_us', $data);
    }

    public function mail()
    {
        $data['color'] = $this->company_model->get_web_color();
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $phone = $this->input->post('phone');
        $message = $this->input->post('message');
        //echo '<pre>';print_r($data);die();
        $this->load->library('email');
        $this->email->set_newline("\r\n");
        $this->email->set_mailtype("html");
        $this->email->from($email);
        $this->email->to('shahidcadetacademymirpur@gmail.com');
        $this->email->subject($phone);
        $this->email->message($message);
        $this->email->send();
        $this->session->set_flashdata('msg', 'Mail Has Been Sent Successfully');
        redirect('home/contact_us', 'refresh');
    }
}
