<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class FilesController extends AbstractController
{
    public function GetFiles($userId)
    {
        $files = $this->json([
            'files' => [
                [
                    'id' => '126cf35x-2c4y-483z-a0a9-158621f77a21',
                    'userID' => $userId,
                    'name' => 'image',
                    'description' => 'Cat image',
                    'extension' => 'jpeg',
                    'mime' => 'image/jpeg',
                    'size' => 5674,
                ],
                [
                    'id' => '346cf35x-2c4y-483z-a0a9-158621f77a21',
                    'userID' => $userId,
                    'name' => 'document',
                    'description' => 'Cat passport',
                    'extension' => 'pdf',
                    'mime' => 'application/pdf',
                    'size' => 56254,
                ],
                [
                    'id' => '126cf35x-2c4y-483z-a0a9-158621f77a21',
                    'userID' => $userId,
                    'name' => 'music',
                    'description' => 'Cat music',
                    'extension' => 'mpeg',
                    'mime' => 'audio/mpeg',
                    'size' => 56674,
                ],
            ]
        ]);
        return $files;
    }

    public function GetFile($id)
    {
        $message = $this->json([
            'files' => [
                    'id' => '126cf35x-2c4y-483z-a0a9-158621f77a21',
                    'userID' => $id,
                    'name' => 'image',
                    'description' => 'Cat image',
                    'extension' => 'jpeg',
                    'mime' => 'image/jpeg',
                    'size' => 5674,
            ]
        ]);
        return $message;
    }

    public function PostFile()
    {
        return $this->json(['response' => 'File has been added successfully']);
    }

    public function PutFile($id)
    {
        return $this->json(['response' => 'File with id ' . $id . ' has been changed successfully']);
    }

    public function DeleteFile($id)
    {
        return $this->json(['response' => 'File with id ' . $id . ' has been deleted successfully']);
    }
}