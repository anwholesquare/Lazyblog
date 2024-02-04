<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('LandingPage/index.php');
    }

    public function signup(): string
    {
        return view('Auth/signup.php');
    }

    public function show($symlink = ''): string
    {
        $db = \Config\Database::connect();
        $sql = "select * from posts AS p JOIN categories As c ON p.category_id = c.category_id JOIN seo s ON s.seo_id = p.seo_id JOIN users u ON u.user_id = p.user_id where p.symlink = ? group by p.post_id LIMIT 1;";
        $result = $db->query($sql, [$symlink]);

        $sql1 = "Select tag_name from tag where tag_id IN ( Select DISTINCT tag_id from post_tags where post_id  IN ( SELECT post_id from posts where symlink = '$symlink'));";
        $resultTags = $db->query($sql1);

        $sql2 = "select * from posts where user_id  IN ( SELECT user_id from posts where symlink = '$symlink');";
        $recommended = $db->query($sql2);


        if (count($result->getResultArray()) > 0) {
            $getloc = json_decode(file_get_contents("http://ipinfo.io/?token=8cbb16bd050d16"));
            $request = service('request');
            $ipAddress = $request->getIPAddress();
            $dataToUpsert = [
                (int) $result->getResultArray()[0]['post_id'],
                (string) $ipAddress,
                (string) $getloc->country
            ];
            $db->query(
                "REPLACE INTO `post_audience` (`post_id`, `ip_address`, `country`) VALUES (?, ?, ?)",
                [
                    (int) $result->getResultArray()[0]['post_id'],
                    (string) $getloc->ip,
                    (string) $getloc->country
                ]
            );
        }
        $data = [
            'post' => $result->getResultArray(),
            'tags' => $resultTags->getResultArray(),
            'recommended' => $recommended->getResultArray()
        ];
        return view('Post/show.php', $data);
    }

    public function showAuthor($symlink = '')
    {

        $db = \Config\Database::connect();
        $sql = "SELECT u.`user_id`, u.`user_name`, u.`email`, u.`full_name`, u.`bio`, u.`image`, u.`status`, u.`registration_datetime`, u.`last_login`, ap.`page_content`, ap.`updated_datetime` from users AS u LEFT JOIN author_page AS ap ON u.user_id = ap.user_id WHERE u.user_id = ? LIMIT 1;";
        $result = $db->query($sql, [$symlink]);

        $sql2 = "select * from posts where user_id = '$symlink'";
        $recommended = $db->query($sql2);

        // if (count($result->getResultArray()) > 0) {
        $data = [
            'author' => $result->getResultArray(),
            'recommended' => $recommended->getResultArray()
        ];
        return view('Author/index.php', $data);
        //}
        //return redirect()->route('/');
    }
}
