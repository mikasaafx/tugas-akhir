<?php

namespace App\Controllers;

class User extends BaseController
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
            'title' => 'My Profile | Lovestreet'
        ];

        return view('/user/index', $data);
    }


    public function beranda()
        {
            $data = [
                'title' => 'Beranda | Lovestreet'
            ];

            return view('/user/beranda', $data);
        }


    // public function cariJodoh()
    // {
    //     $data = [
    //         'title' => 'Taaruf | Lovestreet'
    //     ];

    //     return view('/user/cari', $data);
    // }


    public function cariJodoh()
    {
        // $users = new \Myth\Auth\Models\UserModel();
        // $data['users'] = $users->findAll();

        $data['title'] = 'Taaruf | Lovestreet';


        $this->builder->select('users.id as userid, user_image, username, name, fullname');
        $this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $this->builder->where('auth_groups.name', "user");
        $query = $this->builder->get();

        $data['users'] = $query->getResult();



        return view('/user/cari', $data);
    }
}
