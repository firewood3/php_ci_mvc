<?php
class Topic_model extends CI_Model {
	function __construct()
	{
		parent::__construct();
	}

	public function gets()
	{
		return $this->db->query('SELECT * FROM topic')->result();
	}

	public function get($topic_id)
	{
		// active record 방식
		// 표준 sql문을 쓰게 해주므로 각 rdb의 벤더에 이식성이 좋아진다.
		// result()로 꺼내오면 리터레이션을 해주어야한다.
		// row()로 꺼내오면 리터레이션을 해주지 않아도 된다.
		return $this->db->get_where('topic', array('id'=>$topic_id))->row();
//		return $this->db->query('SELECT * FROM topic WHERE id='.$topic_id);
	}
}
