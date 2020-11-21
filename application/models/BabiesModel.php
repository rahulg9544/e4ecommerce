<?php 
class BabiesModel extends CI_Model 
{


   //common
  
    public function get_categories()
    {
        $this->db->from('category');
        $this->db->order_by('category_id','desc');
        $query = $this->db->get();

       
        
        return $query->result();
    }

    // public function get_sub_categories($category_id)
    // {
    //     $this->db->where('subcategory_category', $category_id);
    //     $query = $this->db->get('subcategory');
    //     return $query->result();
    // }

    // public function get_divisions($subcat)
    // {
    //     $this->db->where('division_subcat', $subcat);
    //     $query = $this->db->get('division');
    //     return $query->result();
    // }
    
     public function get_offers()
    {
        $selqry = 'SELECT * FROM offers LEFT JOIN subcategory ON offers.offers_sub_cat_id = subcategory.subcategory_id LEFT JOIN category ON subcategory.subcategory_category = category.category_id';
        $query = $this->db->query($selqry);  
        return $query->result(); 
    }

   //common
   

    // homepage
    
     function getslides()
     {
     	$this->db->order_by('banner_id ','desc');
     	$query = $this->db->get('banner');
     	return $query;
     }

     function getcategorieslides()
     {
        $query = $this->db->get('category');

        return $query->result();
     }

    // homepage

    //loginregpage

     function getsameusercount($cusmail,$regmob)
     {
     	$squery="SELECT count(*) as sameucount FROM user WHERE user_mail = '$cusmail' OR user_mobile='$regmob'";
      $query1 = $this->db->query($squery);
      $query=$query1->row();
      return $query->sameucount;
     }

     function insertuser($data)
     {
     	$query=$this->db->insert('user',$data);
     	return $query;
     }

     function getuserdetails($username)
     {
     	$this->db->where('user_mail',$username);
		$query = $this->db->get('user');
		return $query;
     }

     //loginregpage

     // addaddresspage


     function getareas()
     {
        $query = $this->db->get('city');
        return $query->result();
     }

     function insertaddress($data)
     {
        $query = $this->db->insert('addressprofile',$data);
        return $query;
     }

     // addaddresspage

     //editaddress

     function getadrs_byid($adrs_id)
     {
        $this->db->where('addressprofile_id',$adrs_id);
        $query = $this->db->get('addressprofile');
        return $query->row();
     }

     function updateaddress($data,$adrsid)
     {
        $this->db->where('addressprofile_id',$adrsid);
        $query = $this->db->update('addressprofile',$data);
        return $query;
     }

     //editaddress

     //myaccout
      
      function getalladrress($userid)
      {
        // $this->db->where('addressprofile_userid',$userid);
        // $query = $this->db->get('addressprofile');
        
        $squery = "SELECT * FROM addressprofile LEFT JOIN city ON addressprofile_city=city_id WHERE addressprofile_userid='$userid'";
        $query = $this->db->query($squery);

        return $query->result();
      }

      function getpersonaldetails($userid)
      {
        $this->db->where('user_id',$userid);
        $query = $this->db->get('user');
        return $query->row();
      }

      function getsamemaildetils($mailid)
      {
         $this->db->where('user_mail',$mailid);
        $query = $this->db->get('user');
        return $query;
      }

      function updateuserinfo($data,$userid)
      {
         $this->db->where('user_id',$userid);
        $query = $this->db->update('user',$data);
        return $query;
      
      }

     //myaccout




}	