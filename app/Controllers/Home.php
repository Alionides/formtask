<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		
		$db = \Config\Database::connect();
		$query = $db->table('form')->get();
		echo view('layouts/header');
		echo view('site/index');
		echo view('layouts/footer');
	}
	public function records()
	{

		$db = \Config\Database::connect();
		$query = $db->table('form')->get();
		$data['alldata'] = $query->getResult();

		echo view('layouts/header');
		echo view('site/records', $data);
		echo view('layouts/footer');
	}
	public function insertform()
    {  
       // helper(['form', 'url']);
         
        $db = \Config\Database::connect();
		$formModel = new \App\Models\FormModel();
		
		$builder = $formModel->builder();
 
        $data = [ 
            'name' => $this->request->getVar('name'),
            'phone'  => $this->request->getVar('phone'),
            'email'  => $this->request->getVar('email'),
            'message'  => $this->request->getVar('message')
            ];
 
           $save = $builder->insert($data);
 
       $data = [
        'success' => true,
        'data' => $save,
        'msg' => $formModel->errors()
       ];
 
       return $this->response->setJSON($data);
    }

	//--------------------------------------------------------------------

}
