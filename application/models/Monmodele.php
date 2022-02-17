<?php

class Monmodele extends CI_Model{
	
	function getContacts()
	{
		$query = $this->db->get('contact');
		return $query->result();
	}
	
	function ajoutContact(){
		$contact = array('Nom' => $info['nom'], 'Prenom' => $info['prenom'], 'Email' => $info['email'], 'Commentaire' => $info['commentaire']);
		$this->db->insert('contact',$info);
	}

}
?>