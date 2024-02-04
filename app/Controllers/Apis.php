<?php

namespace App\Controllers;



use CodeIgniter\Controller;
use CodeIgniter\Database\Exceptions\DatabaseException;
use Config\Database;
use CodeIgniter\API\ResponseTrait;

class Apis extends BaseController
{
    use ResponseTrait;

    public function categoryfinder($query)
    {
        $db = Database::connect();
        $query = $db->escapeLikeString($query);
        $sql = "SELECT category_name FROM categories WHERE category_name LIKE '%$query%' ORDER BY category_name ASC;";
        $result = $db->query($sql)->getResultArray();

        return $this->respond($result);
    }

    public function viewTimeIncrease($query)
    {
        $db = Database::connect();
        $query = $db->escape($query);
        $sql = "UPDATE `posts` SET `total_seconds_views` = `total_seconds_views` + 10 WHERE `post_id` = $query;";
        $result = $db->query($sql);
        return $this->respond($result);
    }

    public function viewcount($query)
    {
        $db = Database::connect();
        $query = $db->escape($query);
        $sql = "UPDATE `posts` SET `views_count` = `views_count` + 1 WHERE `post_id` = $query;";
        $result = $db->query($sql);
        return $this->respond($result);
    }

    public function findpostbyauthor($query1, $query2)
    {
        $db = Database::connect();
        $query1 = $db->escapeLikeString($query1);
        $query2 = $db->escapeLikeString($query2);
        $sql = "SELECT p.title, p.description, p.symlink FROM `posts` AS p LEFT JOIN categories AS c ON p.category_id = c.category_id WHERE ( p.user_id = $query1 and ((p.title LIKE '%$query2%') or (c.category_name LIKE '%$query2%')));";
        $result = $db->query($sql)->getResultArray();
        return $this->respond($result);
    }

    public function informer()
    {
        $getloc = json_decode(file_get_contents("http://ipinfo.io/?token=8cbb16bd050d16"));
        $request = service('request');
        $ipAddress = $request->getIPAddress();
        return $this->respond([
            'ip' => $getloc->ip,
            'country' => $getloc->country,
        ]);
    }
}

