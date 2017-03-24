<?php

namespace alexeevdv\telegram;

class Telegram extends \yii\base\Component
{
    public $host;
    public $port;

    public function send($number, $message)
    {
        // @todo Search in contact list. If no such number, then add to contact list

        $telegram = new \Zyberspace\Telegram\Cli\Client("tcp://{$this->host}:{$this->port}");
    
        $name1 = 'a'.mt_rand(111111, 999999);
        $name2 = 'b'.mt_rand(111111, 999999);
        $contacts = $telegram->exec("add_contact {$number} {$name1} {$name2}");
        // Cant send message, cause receiver has no telegram account
        if (!count($contacts)) {
            return false;
        }
        
        $name = $contacts[0]->print_name;
        $result = $telegram->exec("msg {$name} {$message}");
        
        $telegram->exec("del_contact {$name}");
        return $result;
    }
}
