<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UsersController extends AbstractController
{
    public function GetUsers()
    {
        $users = $this->json([
            'users' => [
                [
                    "id"=> "111cf35x-2c4y-483z-a0a9-158621f77a21",
                    "name"=> "Ivanov Ivan Ivanovich",
                    "phoneNumber"=> "+7978777777",
                    "email"=> "alexandr@mail.ru",
                    "createdTime"=> "2020-03-04T17:49:05Z",
                    "updatedTime"=> "2020-03-04T17:49:05Z",
                ],
                [
                    "id"=> "211cf35x-2c4y-483z-a0a9-158621f77a21",
                    "name"=> "Ivanov Ivan Ivanovich",
                    "phoneNumber"=> "+7978777777",
                    "email"=> "alexandr@mail.ru",
                    "createdTime"=> "2020-03-04T17:49:05Z",
                    "updatedTime"=> "2020-03-04T17:49:05Z",
                ],
                [
                    "id"=> "311cf35x-2c4y-483z-a0a9-158621f77a21",
                    "name"=> "Ivanov Ivan Ivanovich",
                    "phoneNumber"=> "+7978777777",
                    "email"=> "alexandr@mail.ru",
                    "createdTime"=> "2020-03-04T17:49:05Z",
                    "updatedTime"=> "2020-03-04T17:49:05Z",
                ],
            ]
        ]);
        return $users;
    }

    public function GetUsero($id)
    {
        $user = $this->json([
            'user' => [
                [
                    "id"=> $id,
                    "name"=> "Ivanov Ivan Ivanovich",
                    "phoneNumber"=> "+7978777777",
                    "email"=> "alexandr@mail.ru",
                    "createdTime"=> "2020-03-04T17:49:05Z",
                    "updatedTime"=> "2020-03-04T17:49:05Z",
                ],
            ]
        ]);
        return $user;
    }

    public function PostUser(){
        return $this->json(['response'=>'User has been added successfully']);
    }

    public function PutUser($id){
        return $this->json(['response'=>'User with id '.$id.' has been changed successfully']);
    }

    public function DeleteUser($id){
        return $this->json(['response'=>'User with id '.$id.' has been deleted successfully']);
    }
}