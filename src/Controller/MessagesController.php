<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MessagesController extends AbstractController
{
    public function GetMessages($userId)
    {
        $messages = $this->json([
            'messages' => [
                [
                    'id' => '126cf35x-2c4y-483z-a0a9-158621f77a21',
                    'sender' => $userId,
                    'receiver' => 'alexander@gmail.com',
                    'createdTime' => new \DateTime('now'),
                    'topic' => 'cats',
                    'messageText' => 'There are a lot of cats',
                    'parentMessage' => 43633,
                    'files' => [32432,423432,32442],
                ],
                [
                    'id' => '777cf35x-2c4y-483z-a0a9-158621f77a21',
                    'sender' => $userId,
                    'receiver' => 'alexander@gmail.com',
                    'createdTime' => new \DateTime('now'),
                    'topic' => 'cats',
                    'messageText' => 'There are a lot of cats',
                    'parentMessage' => 43633,
                    'files' => [32432,423432,32442],
                ],
                [
                    'id' => '555cf35x-2c4y-483z-a0a9-158621f77a21',
                    'sender' => $userId,
                    'receiver' => 'alexander@gmail.com',
                    'createdTime' => new \DateTime('now'),
                    'topic' => 'cats',
                    'messageText' => 'There are a lot of cats',
                    'parentMessage' => 43633,
                    'files' => [32432,423432,32442],
                ],
            ]
        ]);
        return $messages;
    }

    public function GetMessage($id)
    {
        $message = $this->json([
            'messages' => [
                    'id' => '126cf35x-2c4y-483z-a0a9-158621f77a21',
                    'sender' => $id,
                    'receiver' => 'alexander@gmail.com',
                    'createdTime' => new \DateTime('now'),
                    'topic' => 'cats',
                    'messageText' => 'There are a lot of cats',
                    'parentMessage' => 43633,
                    'files' => [32432,423432,32442],
                ]
        ]);
        return $message;
    }

    public function PostMessage()
    {
        return $this->json(['response' => 'Message has been added successfully']);
    }

    public function PutMessage($id)
    {
        return $this->json(['response' => 'Message with id ' . $id . ' has been changed successfully']);
    }

    public function DeleteMessage($id)
    {
        return $this->json(['response' => 'Message with id ' . $id . ' has been deleted successfully']);
    }
}