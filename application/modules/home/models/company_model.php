<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Company_model extends CI_Model
{
    public function get_company_info()
    {
        $this->db->select('*');
        $this->db->from('company_info');
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }

    public function get_bio_info()
    {
        $this->db->select('*');
        $this->db->from('bio_info');
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }

    public function get_contact_info($d)
    {
        $this->db->select($d);
        $this->db->from('contact_info');
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }
    
    public function get_contact_info_all()
    {
        $this->db->select('*');
        $this->db->from('contact_info');
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }

    public function get_person_info()
    {
        $this->db->select('*');
        $this->db->from('person');
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }
    
    public function get_batch_info()
    {
        $this->db->select('*');
        $this->db->from('batch_info');
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }

    public function get_gallery_info()
    {
        $this->db->select('*');
        $this->db->from('gallery');
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }
    
    public function get_success_gallery_info()
    {
        $this->db->select('*');
        $this->db->from('success_gallery');
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }
    
    public function get_prospectus_info()
    {
        $this->db->select('*');
        $this->db->from('prospectus');
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }

    public function get_chairman_info()
    {
        $this->db->select('*');
        $this->db->from('person');
        $this->db->like('designation', 'chairman');
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }

    public function get_schooling_system($d)
    {
        $this->db->select($d);
        $this->db->from('schooling_system');
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }

    public function get_md_info()
    {
        $this->db->select('*');
        $this->db->from('person');
        $this->db->like('designation', 'managing director');
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }

    public function get_weekly_result_info()
    {
        $this->db->select('*, weekly_result_info.id as id');
        $this->db->from('weekly_result_info');
        $this->db->join('month_info', 'weekly_result_info.month_id=month_info.id', 'left');
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }
    
    public function get_term_result_info()
    {
        $this->db->select('*, term_result_info.id as id');
        $this->db->from('term_result_info');
        $this->db->join('batch_info', 'term_result_info.batch_id=batch_info.id', 'left');
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }

    public function get_weekly_syllabus_info()
    {
        $this->db->select('*, weekly_syllabus_info.id as id');
        $this->db->from('weekly_syllabus_info');
        $this->db->join('month_info', 'weekly_syllabus_info.month_id=month_info.id', 'left');
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }

    public function get_year_medium_routine()
    {
        $this->db->select('year_id, medium');
        $this->db->from('class_routine_info');
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }

    public function get_month_year_info()
    {
        $this->db->select('*, weekly_result_info.id as id');
        $this->db->from('weekly_result_info');
        //$this->db->where('year_id', $y);
        $this->db->join('month_info', 'weekly_result_info.month_id=month_info.id', 'left');
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }
    
    public function get_term_result_year_info()
    {
        $this->db->select('year_id');
        $this->db->from('term_result_info');
        //$this->db->where('year_id', $y);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }

    public function get_month_year_info_syllabus()
    {
        $this->db->select('*, weekly_syllabus_info.id as id');
        $this->db->from('weekly_syllabus_info');
        //$this->db->where('year_id', $y);
        $this->db->join('month_info', 'weekly_syllabus_info.month_id=month_info.id', 'left');
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }

    public function get_month_year_info_where($y, $m, $w, $s)
    {
        $this->db->select('*, weekly_result_info.id as id');
        $this->db->from('weekly_result_info');
        $this->db->join('month_info', 'weekly_result_info.month_id=month_info.id', 'left');
        $this->db->where('year_id', $y);
        $this->db->where('month_id',$m);
        $this->db->where('week', $w);
        $this->db->where('batch_id', $s);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }
    
    public function get_term_result_info_where($y, $m, $b, $t)
    {
        $this->db->select('*, term_result_info.id as id');
        $this->db->from('term_result_info');
        $this->db->join('batch_info', 'term_result_info.batch_id=batch_info.id', 'left');
        $this->db->where('year_id', $y);
        $this->db->where('medium',$m);
        $this->db->where('batch_id', $b);
        $this->db->where('term', $t);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }

    public function get_routine_where($y, $m, $s)
    {
        $this->db->select('*, class_routine_info.id as id');
        $this->db->from('class_routine_info');
        $this->db->join('batch_info', 'class_routine_info.batch_id=batch_info.id', 'left');
        $this->db->where('year_id', $y);
        $this->db->where('medium',$m);
        $this->db->where('batch_id', $s);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }

    public function get_syllabus_info_where($y, $m, $w, $s)
    {
        $this->db->select('*, weekly_syllabus_info.id as id');
        $this->db->from('weekly_syllabus_info');
        $this->db->join('month_info', 'weekly_syllabus_info.month_id=month_info.id', 'left');
        $this->db->where('year_id', $y);
        $this->db->where('month_id',$m);
        $this->db->where('week', $w);
        $this->db->where('batch_id', $s);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }

    public function get_medium_info()
    {
        $this->db->select('*, medium_info.id as id');
        $this->db->from('medium_info');
        $this->db->join('batch_info', 'batch_info.id=medium_info.batch_id', 'left');
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }

    public function get_month_info()
    {
        $this->db->select('*');
        $this->db->from('month_info');
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }

    public function get_medium_info_where($e)
    {
        $this->db->select('*, medium_info.id as id');
        $this->db->from('medium_info');
        $this->db->where('medium', $e);
        $this->db->join('batch_info', 'batch_info.id=medium_info.batch_id', 'left');
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }

    public function get_dmd_info()
    {
        $this->db->select('*');
        $this->db->from('person');
        $this->db->where('designation', 'deputy managing director');
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }

    public function get_login_info($username, $password)
    {
        $this->db->select('*');
        $this->db->from('login');
        $this->db->where('user_name', $username, 'password', $password);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }

    public function get_success_info()
    {
        $this->db->select('*');
        $this->db->from('success_info');
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }

    public function get_meal_info()
    {
        $this->db->select('*, meal_info.id as id, brk.time as brk_time, tffn1.time as tffn1_time, lunch.time as lunch_time, tffn2.time as tffn2_time, dinner.time as dinner_time');
        $this->db->from('meal_info');
        $this->db->join('day_info', 'day_info.id = meal_info.day_id', 'left');
        $this->db->join('meal_timing brk', 'brk.id = meal_info.breakfast_timing', 'left');
        $this->db->join('meal_timing tffn1', 'tffn1.id = meal_info.tiffin_first_timing', 'left');
        $this->db->join('meal_timing lunch', 'lunch.id = meal_info.lunch_timing', 'left');
        $this->db->join('meal_timing tffn2', 'tffn2.id = meal_info.tiffin_second_timing', 'left');
        $this->db->join('meal_timing dinner', 'dinner.id = meal_info.dinner_timing', 'left');
        $this->db->order_by('day_info.id');
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }

    public function get_search_result($keyword)
    {
        $this->db->select('*');
        $this->db->from('weekly_result_info');
        //$this->db->join('currency','currency.currency_id=products.currency_id');
        //$this->db->where('products.p_is_block', 0);
        $this->db->like('weekly_result_info.weekly_result', $keyword);
        $result = $this->db->get();
        return $result->result_array();
    }

    public function get_timing_info()
    {
        $this->db->select('*');
        $this->db->from('meal_timing');
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }

    public function get_day_info()
    {
        $this->db->select('*');
        $this->db->from('day_info');
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }

    public function get_slider_info()
    {
        $this->db->select('*');
        $this->db->from('slider_image');
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }

    public function get_about_info($d)
    {
        $this->db->select($d);
        $this->db->from('about_us');
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }

    public function get_admission_info($d)
    {
        $this->db->select($d);
        $this->db->from('admission_info');
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }

    public function get_about_info_all()
    {
        $this->db->select('*');
        $this->db->from('about_us');
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }

    public function get_web_color()
    {
        $this->db->select('css_change');
        $this->db->from('color_info');
        $result = $this->db->get();
        return $result->result();
    }

}
