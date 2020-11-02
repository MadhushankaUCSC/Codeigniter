<?php  
/**
  * 
  */
 class queries extends CI_Model
 {
 	
 	public function getPosts()
 	{
 		$query = $this->db->get('tbl_post');  // Produces: SELECT * FROM mytable
 		if ($query->num_rows() > 0) {
 			return $query->result();
 		}
 	}
 	public function addpost($data){
 		return $this->db->insert('tbl_post',$data);
 	}

 	public function getSinglePosts($id){
 		$query = $this->db->get_where('tbl_post',array('id'=>$id));
 		if ($query->num_rows() > 0) {
 			return $query->row();
 		}
 	}
 	public function updatePost($data, $id){
 		return $this->db->where('id',$id)->update('tbl_post',$data);
 	}
 	public function deletePost($id){
 		return $this->db->delete('tbl_post',['id'=>$id]);
 	}
 } 
 ?>