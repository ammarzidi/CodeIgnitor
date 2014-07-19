<?
class DB extends CI_Model
{
	public function get_data()
	{
		$data = $this->db->query('select * fron user');
		return $date->result();
	}
}
?>