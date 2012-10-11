<?php
class Model_User {
    protected $db_dapt;
    public function __construct() {
        $this->db_dapt = Zend_Registry::get('db_dapt');
    }
    //thuan php
    public function getAll(){
         $result=$this->db_dapt->query("select * from user order by id DESC");
	        return $result->fetchAll();
    }
    // su dung mo hinh active record
    public function listUser($where=' 1=1 '){
        $sql = $this->db_dapt->select();
        $sql->from('user',array('id','first_name','last_name','user_name','password'));
        $sql->where($where);
        $sql->order("id desc");
        $data = $this->db_dapt->fetchAll($sql);
        return $data;
    }
    public function insertUser($data) {
        $this->db_dapt->insert($data);
    }
    
    public function updateUser($data,$where){
        $this->db_dapt->update($data, $where);
    }
    public function deleteUser($id){
        $where = " id = $id";
        $this->db_dapt->delete($where);
    }
}

