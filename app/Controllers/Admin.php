<?php

namespace App\Controllers;

class Admin extends BaseController
{

    protected $db, $builder;

    public function __construct() 
    {
        $this->db      = \Config\Database::connect();
        $this->builder = $this->db->table('users');
    }

    public function index()
        {
            $data = [
                'title' => 'Dashboard | Lovestreet'
            ];

            return view('admin/dashboard', $data);
        }


    public function lists()
    {
        // $users = new \Myth\Auth\Models\UserModel();
        // $data['users'] = $users->findAll();

        $data['title'] = 'Dashboard | List Users';


        $this->builder->select('users.id as userid, user_image, username, email, name');
        $this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $query = $this->builder->get();

        $data['users'] = $query->getResult();



        return view('/admin/list-users', $data);
    }




    public function detail($id = 0)
    {
        // $users = new \Myth\Auth\Models\UserModel();
        // $data['users'] = $users->findAll();

        $data['title'] = 'User Detail';

        
        $this->builder->select('users.id as userid, username, email, name, fullname, user_image');
        $this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $this->builder->where('users.id', $id);
        $query = $this->builder->get();


        $data['user'] = $query->getRow();
        // $data['user'] = $model->paginate(3);
        // $data['pager'] = $model->pager;


        if(empty($data['user'])) {
            return redirect()->to('/admin');
        }

        return view('/admin/detail', $data);
    }


}
