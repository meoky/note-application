<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Model_query extends CI_Model
{

	function displaynotes()
	{
	$query=$this->db->get("notes");
	return $query->result();
	}
	function getspecific($nID)
	{
	$query=$this->db->query("SELECT * FROM notes WHERE nID = $nID");
	return $query->result();
	}
	function insert_note(){
		$data = array(
				'date' => $this->input->post('note_date'), 
				'title' => $this->input->post('note_title'), 
				'text' => $this->input->post('note_text'),
				'time' => $this->input->post('note_time'),
				
			);
		$result=$this->db->insert('notes',$data);
		return $result;
	}

		function update_note(){
		$nID=$this->input->post('nID');
		$date=$this->input->post('date');
		$title=$this->input->post('title');
		$text=$this->input->post('text');
		$time=$this->input->post('time');

		$this->db->set('time', $time);
		$this->db->set('date', $date);
		$this->db->set('title', $title);
		$this->db->set('text', $text);
		$this->db->where('nID', $nID);
		$result=$this->db->update('notes');
		return $result;
	}

	function delete_note(){
		$nID=$this->input->post('nID');
		$this->db->where('nID', $nID);
		$result=$this->db->delete('notes');
		return $result;
	}

}	




