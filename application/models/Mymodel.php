<?php 
class Mymodel extends CI_Model{
	public function add_suggestion($book,$username,$catagory,$subject,$publish,$link){
		$time=date('Y-m-d h:i:sa');
		$data['username']=$username;
		$data['booktype']=$catagory;
		$data['bookname']=$book;
		$data['publisher']=$publish;
		$data['aboutbook']=$subject;
		$data['booklink']=$link;
	//	$data['date_time'] = $time;
		/*`username` = ?, ,$time* /*$username,$catagory,*/
		$mysqli = " INSERT INTO `cp_admin`(`BookName`,`username`,`BookCategory`,`AboutBook`, `PublishingHouse`, `Link`) VALUES (?, ?, ?, ?, ?,? )";
		/*$mysqli="INSERT INTO cp_admin SET  `BookName` = ? , AboutBook = ? ,PublishingHouse = ? ,Link = ? ,booklink= ? ;";*/
		//$mysqli='INSERT INTO suggestions (username, booktype, bookname, aboutbook,publisher, booklink) VALUES (?,?,?,?,?,? )';
		$this->db->query($mysqli,array($book,$username,$catagory,$subject,$publish,$link));
		
		
	}
	public function moreThanSeven(){
		
		$mysqli2='SELECT username, COUNT(username) FROM suggestions GROUP BY username HAVING COUNT(username)>=8';
		$repeat=$this->db->query($mysqli2);
		return $repeat->result_array();
	}
	public function get_date(){
			$query = $this->db->query('SELECT start_date,end_date FROM start_end WHERE id=1');
			return $query->result_array();
			
	}
	public function get_counter(){
	    
	    $query = $this->db->query('SELECT * FROM count');
	    return $query->result_array();
	}
	public function update_counter($number){
	    $query = $this->db->query('UPDATE count SET counter='. $number);
	}
        
}