<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Osboha extends CI_Controller {
	
	public function index(){
	    
	    $status=false;
		$this->load->model('Mymodel');
		$dates=$this->Mymodel->get_date();
		foreach($dates as $date){
			$start_str = $date['start_date'];
			$end_str = $date['end_date'];
			
		}
		$start = strtotime ($start_str);
		$end = strtotime ($end_str);
		$today = strtotime(date("Y-m-d H:i:s"));
			if($start <= $today && $end >= $today){
				$status = true;
			}
				else {
					$status = false;
				}
		
	if($status ===false){
	    	$data['ad'] = "انتهى وقت التقديم";
		$this->load->view('Webpage',$data);
		if($this->input->post('submit') != NULL ){
		    echo "<script>";
		    echo "alert('انتهى وقت التقديم')";
		    echo "</script>";
		    
		}
		
	}
	else{
	    $this->load->model('Mymodel');
		if($this->input->post('submit') != NULL ){
    $data['response']='تم ارسال الاقتراح';
	 
    $counter = $this->Mymodel->get_counter();
    
    foreach ($counter as $count){
        $current = $count['counter'];
    }
            
        $newCounter = $current;
        $newCounter++;
        
        /*echo "<script>";
		    echo "alert('$newCounter')";
            echo "</script>";*/
        
        $this->Mymodel->update_counter($newCounter);
        
		
	 $postData = $this->input->post();
	 $username=$postData['username'];
	 $catagory=$postData['catagory'];
	 $book=$postData['book'];
	 $publish=$postData['publish'];
	 $subject=$postData['subject'];
	 $link=$postData['link'];
	 $status=false;
	 
	            $moreSeven=$this->Mymodel->moreThanSeven();
				foreach($moreSeven as $member){
					
					
					if($username == $member['username']){
						echo '<script language="javascript">';
					echo 'alert("تستطيع اقتراح 8 كتب فقط...")';
					echo '</script>';
					$data['response']='لم يتم ارسال الاقتراح';
					
					$data['ad'] .= date('d/m/Y', strtotime($date['end_date']));
					$data['ed'] = date('h:i A', strtotime($date['end_date']));
					$webpage=$this->load->view('Webpage',$data);
					$status=true;
			}	
				else{
					$status=false;
				}
			
				}
				
				/*if($username == $member['username']){
					echo '<script language="javascript">';
					echo 'alert("ستطيع اقتراح 7 كتب فقط...")';
					echo '</script>';
					$data['response']='لم يتم ارسال الاقتراح';
				}		*/
					if($status===false){
					$this->Mymodel->add_suggestion(/*,*/$book,$username,$catagory,$subject,$publish,$link);
					$data['response']='تنبيه <br> ، 
شكرا لك ، لقد تم قبول اقتراحك ستقوم لجنة الكتاب بقراءة الكتاب و دراسة سيرة المؤلف واختيار أفضل الكتب لضمها للتصويت 💙' . "<br>";
					$data['ad'] = date('d/m/Y', strtotime($date['end_date']));
					$data['ed'] = date('h:i A', strtotime($date['end_date']));
					
					$webpage=$this->load->view('Webpage',$data);
					}
	}
	if(isset($data)){
	$webpage;}
	else{
	    $data['ad'] = date('d/m/Y', strtotime($date['end_date']));
		$data['ed'] = date('h:i A', strtotime($date['end_date']));
		$this->load->view('Webpage',$data);
	}
	  }
	}
	

 
 }

?>