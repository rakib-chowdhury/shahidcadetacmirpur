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
    public function get_contact_info()
    {
        $this->db->select('*');
        $this->db->from('contact_info');
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }
    public function get_schooling_info()
    {
        $this->db->select('*');
        $this->db->from('schooling_system');
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
    public function get_admission_info()
    {
        $this->db->select('*');
        $this->db->from('admission_info');
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }
    public function get_class_info()
    {
        $this->db->select('*');
        $this->db->from('class_info');
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
    public function get_day_info()
    {
        $this->db->select('*');
        $this->db->from('day_info');
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }
    public function get_meal_timing()
    {
        $this->db->select('*');
        $this->db->from('meal_timing');
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
    public function get_batch_info()
    {
        $this->db->select('*');
        $this->db->from('batch_info');
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }
    public function get_about_us_info()
    {
        $this->db->select('*');
        $this->db->from('about_us');
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
    public function get_gallery_info()
    {
        $this->db->select('*');
        $this->db->from('gallery');
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
    public function get_success_gallery()
    {
        $this->db->select('*');
        $this->db->from('success_gallery');
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }
    public function get_gallery_category()
    {
        $this->db->select('*');
        $this->db->from('category_info');
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }
    public function get_meal_info()
    {
        $this->db->select('*, meal_info.id as id');
        $this->db->from('meal_info');
        $this->db->join('day_info', 'day_info.id=meal_info.day_id', 'left');
        $this->db->join('meal_timing', 'meal_timing.id=meal_info.breakfast_timing', 'left');
        //$this->db->join('meal_timing', 'meal_timing.id=meal_info.tiffin_first_timing', 'left');
        //$this->db->join('meal_timing', 'meal_timing.id=meal_info.lunch_timing', 'left');
        //$this->db->join('meal_timing', 'meal_timing.id=meal_info.tiffin_second_timing', 'left');
        //$this->db->join('meal_timing', 'meal_timing.id=meal_info.dinner_timing', 'left');
        $result = $this->db->get();
        return $result->result();
    }
    public function get_month_info()
    {
        $this->db->select('*');
        $this->db->from('month_info');
        $result = $this->db->get();
        return $result->result();
    }
    public function get_weekly_result_info()
    {
        $this->db->select('*, weekly_result_info.id as id');
        $this->db->from('weekly_result_info');
        $this->db->join('month_info', 'month_info.id=weekly_result_info.month_id', 'left');
        $this->db->join('batch_info', 'batch_info.id=weekly_result_info.batch_id', 'left');
        $result = $this->db->get();
        return $result->result();
    }
    public function get_weekly_syllabus_info()
    {
        $this->db->select('*, weekly_syllabus_info.id as id');
        $this->db->from('weekly_syllabus_info');
        $this->db->join('month_info', 'month_info.id=weekly_syllabus_info.month_id', 'left');
        $this->db->join('batch_info', 'batch_info.id=weekly_syllabus_info.batch_id', 'left');
        $result = $this->db->get();
        return $result->result();
    }
    public function get_class_routine_info()
    {
        $this->db->select('*, class_routine_info.id as id');
        $this->db->from('class_routine_info');
        $this->db->join('batch_info', 'batch_info.id=class_routine_info.batch_id', 'left');
        $result = $this->db->get();
        return $result->result();
    }
    public function get_term_result()
    {
        $this->db->select('*, term_result_info.id as id');
        $this->db->from('term_result_info');
        $this->db->join('batch_info', 'batch_info.id=term_result_info.batch_id', 'left');
        $result = $this->db->get();
        return $result->result();
    }
    public function get_web_color()
    {
        $this->db->select('*');
        $this->db->from('color_info');
        $result = $this->db->get();
        return $result->result();
    }
    public function get_bio_info()
    {
        $this->db->select('*');
        $this->db->from('bio_info');
        $result = $this->db->get();
        return $result->result();
    }


    

    public function get_term_result_edit($id)
    {
        $this->db->select('*, term_result_info.id as id');
        $this->db->from('term_result_info');
        $this->db->join('batch_info', 'batch_info.id=term_result_info.batch_id', 'left');
        $this->db->where('term_result_info.id', $id);
        $result = $this->db->get();
        return $result->result();
    }
    public function get_term_result_info_edit($id)
    {
        $this->db->select('*, term_result_info.id as id');
        $this->db->from('term_result_info');
        $this->db->where('term_result_info.id', $id);
        $result = $this->db->get();
        return $result->result();
    }
    public function get_success_info_edit($id)
    {
        $this->db->select('*');
        $this->db->from('success_info');
        $this->db->where('id', $id);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }
    public function get_schooling_info_edit($id)
    {
        $this->db->select('*');
        $this->db->from('schooling_system');
        $this->db->where('id', $id);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }
    public function get_slider_info_edit($id)
    {
        $this->db->select('*');
        $this->db->from('slider_image');
        $this->db->where('id', $id);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }
    public function get_medium_info_edit($id)
    {
        $this->db->select('*');
        $this->db->from('medium_info');
        $this->db->where('id', $id);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }
    public function get_about_us_info_edit($id)
    {
        $this->db->select('*');
        $this->db->from('about_us');
        $this->db->where('id', $id);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }
    public function get_gallery_info_edit($id)
    {
        $this->db->select('*');
        $this->db->from('gallery');
        $this->db->where('id', $id);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }
    public function get_prospectus_edit($id)
    {
        $this->db->select('*');
        $this->db->from('prospectus');
        $this->db->where('id', $id);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }
    public function get_success_gallery_info_edit($id)
    {
        $this->db->select('*');
        $this->db->from('success_gallery');
        $this->db->where('id', $id);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }
    public function get_weekly_result_info_edit($id)
    {
        $this->db->select('*, weekly_result_info.id as id');
        $this->db->from('weekly_result_info');
        $this->db->join('month_info', 'month_info.id=weekly_result_info.month_id', 'left');
        $this->db->join('batch_info', 'batch_info.id=weekly_result_info.batch_id', 'left');
        $this->db->where('weekly_result_info.id', $id);
        $result = $this->db->get();
        return $result->result();
    }
    public function get_class_routine_info_edit($id)
    {
        $this->db->select('*, class_routine_info.id as id');
        $this->db->from('class_routine_info');
        $this->db->join('batch_info', 'batch_info.id=class_routine_info.batch_id', 'left');
        $this->db->where('class_routine_info.id', $id);
        $result = $this->db->get();
        return $result->result();
    }
    public function get_weekly_syllabus_info_edit($id)
    {
        $this->db->select('*, weekly_syllabus_info.id as id');
        $this->db->from('weekly_syllabus_info');
        $this->db->join('month_info', 'month_info.id=weekly_syllabus_info.month_id', 'left');
        $this->db->join('batch_info', 'batch_info.id=weekly_syllabus_info.batch_id', 'left');
        $this->db->where('weekly_syllabus_info.id', $id);
        $result = $this->db->get();
        return $result->result();
    }
    public function get_meal_info_edit($id)
    {
        $this->db->select('*, meal_info.id as id');
        $this->db->from('meal_info');
        $this->db->join('day_info', 'day_info.id=meal_info.day_id', 'left');
        $this->db->join('meal_timing', 'meal_timing.id=meal_info.breakfast_timing', 'left');
        $this->db->where('meal_info.id', $id);
        //$this->db->join('sub2_category.sub2_cat_id',$id);
        $result = $this->db->get();
        return $result->result();
    }
    public function get_person_info_edit($id)
    {
        $this->db->select('*');
        $this->db->from('person');
        $this->db->where('id', $id);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }
    public function get_bio_info_edit($id)
    {
        $this->db->select('*');
        $this->db->from('bio_info');
        $this->db->where('id', $id);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }
    public function get_admission_info_edit($id)
    {
        $this->db->select('*');
        $this->db->from('admission_info');
        $this->db->where('id', $id);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }
    public function get_company_info_edit($id)
    {
        $this->db->select('*');
        $this->db->from('company_info');
        $this->db->where('id', $id);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }
    public function get_contact_info_edit($id)
    {
        $this->db->select('*');
        $this->db->from('contact_info');
        $this->db->where('id', $id);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }
    
    
    
    public function delete_company_info($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('company_info');
    }
    public function delete_weekly_result_info($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('weekly_result_info');
    }
    public function delete_term_result_info($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('term_result_info');
    }
    public function delete_weekly_syllabus_info($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('weekly_syllabus_info');
    }
    public function delete_schooling_info($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('schooling_system');
    }
    public function delete_success_info($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('success_info');
    }
    public function delete_class_info($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('class_info');
    }
    public function delete_contact_info($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('contact_info');

    }
    public function delete_person_info($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('person');

    }
    public function delete_gallery_info($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('gallery');

    }
    public function delete_success_gallery_info($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('success_gallery');

    }
    public function delete_prospectus($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('prospectus');

    }
    public function delete_bio_info($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('bio_info');

    }

    public function delete_admission_info($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('admission_info');

    }
    public function delete_meal_info($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('meal_info');

    }
    public function delete_slider_info($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('slider_image');

    }
    public function delete_about_us_info($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('about_us');
    }
    public function delete_medium_info($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('medium_info');
    }
    public function delete_class_routine_info($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('class_routine_info');
    }

    public function update_color($data)
    {
        $this->db->where('id', 1);
        $this->db->update('color_info', $data);
    }
}
