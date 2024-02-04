<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\Database\Exceptions\DatabaseException;
use Config\Database;

class Auth extends Controller
{

    public function __construct()
    {
        helper(['form', 'url']);
        $this->session = \Config\Services::session();
    }



    public function index(): string
    {
        return view('Auth/login.php');
    }


    public function register()
    {

        helper(['auth']);
        if (isAuthenticated()) {
            return redirect()->route('dashboard');
        } else {
            return view('Auth/register.php');

        }

    }

    public function login()
    {

        helper(['auth']);
        if (isAuthenticated()) {
            return redirect()->route('dashboard');
        } else {
            return view('Auth/login.php');

        }
    }

    public function authenticate()
    {
        $session = session();
        $db = Database::connect();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        try {
            $query = $db->query("SELECT * FROM users WHERE user_name = ?", [$username]);
            $user = $query->getRow();
            print_r($user);
            if ($user) {
                if (password_verify($password, $user->token)) {
                    $ses_data = [
                        'user_id' => $user->user_id,
                        'user_name' => $user->user_name,
                        'email' => $user->email,
                        'logged_in' => TRUE
                    ];
                    $session->set($ses_data);
                    return redirect()->route('dashboard');
                } else {
                    $session->setFlashdata('msg', 'Password is incorrect.');
                    return redirect()->route('login');
                }
            } else {
                $session->setFlashdata('msg', 'Username does not exist.');
                return redirect()->route('login');
            }
        } catch (\Exception $e) {
            $session->setFlashdata('msg', 'Database error: ' . $e->getMessage());
            return redirect()->route('login');
        }
    }

    public function store()
    {
        helper(['form', 'url', 'text']);

        $input = $this->validate([
            'user_name' => 'required|min_length[3]|max_length[30]',
            'email' => 'required|valid_email|max_length[30]',
            'full_name' => 'required|max_length[50]',
            'bio' => 'max_length[200]',
            'password' => 'required|min_length[8]',
            'image' => [
                'uploaded[image]',
                'mime_in[image,image/jpg,image/jpeg,image/gif,image/png]',
                'max_size[image,4096]',
            ],
        ]);

        if (!$input) {
            return view('Auth/register.php', [
                'validation' => $this->validator
            ]);
        } else {
            $db = \Config\Database::connect();

            $img = $this->request->getFile('image');
            $newName = '';
            if ($img->isValid() && !$img->hasMoved()) {
                $newName = $img->getRandomName();
                $img->move(FCPATH . 'public/uploads/', $newName);
            }

            $password = $this->request->getVar('password');
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            $sql = "INSERT INTO users (user_name, email, full_name, bio, token, image, status, registration_datetime, last_login) VALUES (:user_name:, :email:, :full_name:, :bio:, :token:, :image:, 'active', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP)";

            try {
                $result = $db->query($sql, [
                    'user_name' => $this->request->getVar('user_name'),
                    'email' => $this->request->getVar('email'),
                    'full_name' => $this->request->getVar('full_name'),
                    'bio' => $this->request->getVar('bio'),
                    'token' => $hashedPassword,
                    'image' => $newName,
                ]);

                if ($result) {
                    $ses_data = [
                        'user_id' => $db->insertID(),
                        'user_name' => $this->request->getVar('user_name'),
                        'email' => $this->request->getVar('email'),
                        'logged_in' => TRUE
                    ];
                    session()->set($ses_data);
                    return redirect()->route('dashboard');
                } else {
                    return view('Auth/register.php', ['error' => 'Failed to register. Please try again.']);
                }
            } catch (DatabaseException $e) {
                return view('Auth/register.php', ['error' => 'Database error: ' . $e->getMessage()]);
            }
        }
    }

    public function dashboard()
    {
        helper(['auth']);
        if (isAuthenticated()) {
            $db = \Config\Database::connect();
            $sql = "SELECT count(post_id) as postcount FROM `posts` WHERE user_id = ?";
            $result = $db->query($sql, session()->get('user_id'));

            $sql1 = "select count(user_id) as usercount from users;";
            $result1 = $db->query($sql1);

            $sql2 = "select sum(posts.views_count) as totalview, sum(posts.total_seconds_views) as totalsec, max(posts.views_count) as maxreact from `posts` where user_id = ?;";
            $result2 = $db->query($sql2, [session()->get('user_id')]);

            $sql3 = "select country, count(ip_address) as people  from post_audience where post_id in ( select post_id from posts where user_id = ?) GROUP by country";
            $result3 = $db->query($sql3, session()->get('user_id'));


            $data = [
                'postcount' => $result->getResultArray(),
                'usercount' => $result1->getResultArray(),
                'postreach' => $result2->getResultArray(),
                'countryreach' => $result3->getResultArray()
            ];
            return view("Dashboard/home.php", $data);
        } else {
            return redirect()->route('login');
        }

    }

    public function createPost()
    {
        helper(['auth']);
        if (isAuthenticated()) {
            return view("Dashboard/postform.php");
        } else {
            return redirect()->route('login');
        }

    }

    public function editpost($postid)
    {
        helper(['auth']);
        if (isAuthenticated()) {
            $db = \Config\Database::connect();
            $sql = "SELECT * FROM `posts` WHERE post_id = ? and user_id = ?";

            // Correct way to pass parameters as an array
            $result = $db->query($sql, [(int) $postid, (int) session()->get('user_id')]);

            if (count($result->getResultArray()) > 0) {

                $sql = "select * from posts AS p JOIN categories As c ON p.category_id = c.category_id JOIN seo s ON s.seo_id = p.seo_id JOIN users u ON u.user_id = p.user_id where p.post_id = ? group by p.post_id LIMIT 1;";
                $result = $db->query($sql, [$postid]);

                $sql1 = "Select tag_name from tag where tag_id IN ( Select DISTINCT tag_id from post_tags where post_id  IN ( SELECT post_id from posts where post_id = '$postid'));";
                $resultTags = $db->query($sql1);

                $sql2 = "select * from posts where user_id  IN ( SELECT user_id from posts where post_id = '$postid');";
                $recommended = $db->query($sql2);

                $data = [
                    'post' => $result->getResultArray(),
                    'tags' => $resultTags->getResultArray(),
                    'recommended' => $recommended->getResultArray()
                ];
                return view("Dashboard/editpostform.php", $data);
            } else {
                return redirect()->route("dashboard/post");
            }
        } else {
            return redirect()->route('login');
        }
    }


    public function updatepost()
    {
        helper(['auth']);
        if (isAuthenticated()) {
            $postid = (int) $this->request->getVar('postid');
            $prev = $this->request->getVar('prev_image');

            $coverImage = $this->request->getFile('cover_image');
            $newName = '';
            if ($coverImage->isValid() && !$coverImage->hasMoved()) {
                // Assuming $prev contains the filename of the previous cover_image
                if (!empty($prev) && file_exists(FCPATH . 'public/uploads/' . $prev)) {
                    // Remove the previous cover_image file
                    unlink(FCPATH . 'public/uploads/' . $prev);
                }

                if ($coverImage->isValid() && !$coverImage->hasMoved()) {
                    $newName = $coverImage->getRandomName();
                    $coverImage->move(FCPATH . 'public/uploads/', $newName);
                }
            } else {
                $newName = $prev;
            }

            $db = \Config\Database::connect();
            $sql = "UPDATE `posts` SET `title`=?,`description`= ?,`cover_image`= '$newName', `content`= ?, `symlink`= ?, `last_update_datetime`= NOW() WHERE `post_id`= ? and user_id = ?";

            $result = $db->query($sql, [$this->request->getVar('title'), $this->request->getVar('description'), $this->request->getVar('content'), $this->request->getVar('symlink'), $postid, session()->get('user_id')]);
            //print_r($db->getLastQuery());
            return redirect()->to(base_url() . "/dashboard/edit/post/$postid");
        } else {
            return redirect()->route('login');
        }
    }


    public function showpost()
    {
        helper(['auth']);
        if (isAuthenticated()) {
            $db = \Config\Database::connect();
            $result = $db->query("SELECT * FROM `posts` where user_id = ?", array(session()->get('user_id')));





            return view("Dashboard/post.php", ["result" => $result->getResultArray()]);
        } else {
            return redirect()->route('login');
        }

    }

    public function editAuthor()
    {
        helper(['auth']);
        if (isAuthenticated()) {
            $db = \Config\Database::connect();
            $sql = "SELECT * FROM `author_page` WHERE user_id = ?";
            $result = $db->query($sql, session()->get("user_id"));

            $data = [
                'author' => $result->getResultArray(),
            ];
            return view("Dashboard/author.php", $data);
        } else {
            return redirect()->route('login');
        }

    }

    public function submitAuthorContent()
    {
        helper(['auth']);
        if (isAuthenticated()) {
            $db = \Config\Database::connect();
            $sql = "Replace INTO `author_page`(`user_id`, `page_content`) VALUES (" . (int) session()->get("user_id") . " , " . (string) str_replace('"', "'", ($db->escape($this->request->getVar('content')))) . ")";
            //print_r($sql);
            //die();
            $result = $db->query($sql);

            return redirect()->route('dashboard/editAuthor');
        } else {
            return redirect()->route('login');
        }

    }

    public function showLeaderboard()
    {
        helper(['auth']);
        if (isAuthenticated()) {
            $db = \Config\Database::connect();
            $sql = "select users.user_id as user_id, users.user_name as user_name, users.image, users.registration_datetime as registered , sum(posts.views_count) as counter from users LEFT JOIN posts ON users.user_id = posts.user_id group by users.user_id;";
            $result = $db->query($sql);


            $data = [
                'data' => $result->getResultArray()
            ];
            return view('dashboard/leaderboard', $data);
        } else {
            return redirect()->route('login');
        }

    }

    public function submitPost()
    {
        helper(['form', 'url', 'text', 'auth', 'category', 'text']);

        if (isAuthenticated()) {

            $input = $this->validate([
                'title' => 'required|min_length[3]|max_length[100]',
                'description' => 'required|max_length[300]',
                'content' => 'required',
                'category' => 'required|max_length[100]',
                'tags' => 'required|max_length[10000]',
            ]);

            if (!$input) {
                return view('Dashboard/postform.php', [
                    'validation' => $this->validator
                ]);
            } else {
                $db = \Config\Database::connect();

                $coverImage = $this->request->getFile('cover_image');
                $newName = '';
                if ($coverImage->isValid() && !$coverImage->hasMoved()) {
                    $newName = $coverImage->getRandomName();
                    $coverImage->move(FCPATH . 'public/uploads/', $newName);
                }

                $seoImage = $this->request->getFile('seo_image');
                $newName = '';
                if ($seoImage->isValid() && !$seoImage->hasMoved()) {
                    $newName = $seoImage->getRandomName();
                    $seoImage->move(FCPATH . 'public/uploads/', $newName);
                }




                try {
                    // Begin the transaction
                    // $db->transBegin();
                    $categoryId = -1;
                    $categoryName = $this->request->getVar('category');
                    // print('' . $categoryId . '' . $categoryName . '');
                    $query = $db->query("SELECT category_id FROM categories WHERE category_name = ?", $categoryName);


                    foreach ($query->getResultArray() as $row) {
                        $categoryId = $row['category_id'];
                    }


                    if ($categoryId == -1) {
                        $query = $db->query("INSERT INTO categories (category_name) VALUES (?)", array($categoryName));
                        $categoryId = $db->insertID();
                        print_r($categoryId);
                    }



                    // sym start

                    $symlink = $this->request->getVar("symlink");
                    if (strlen(trim($symlink)) == "" || $symlink == "" || $symlink == null) {
                        $symlink = random_string('alnum', 20);
                    }


                    $query = $db->query("SELECT * FROM posts WHERE symlink = '$symlink'");
                    $sym_gen = 0;
                    foreach ($query->getResult() as $row) {
                        $sym_gen++;
                        break;
                    }

                    while ($sym_gen != 0) {
                        $symlink = generateRandomString(30);
                        $query = $db->query("SELECT * FROM posts WHERE symlink = ?", $symlink);

                        $sym_gen = 0;
                        foreach ($query->getResultArray() as $row) {
                            $sym_gen++;
                            break;
                        }


                    }

                    // sym end


                    $sql = "INSERT INTO `posts`( `title`, `description`, `cover_image`, `content`, `symlink`, `seo_id`, `user_id`, `category_id`, `status`) VALUES ('" . $this->request->getVar('title') . "',
                    '" . $this->request->getVar('description') . "' , '$newName', '" . str_replace("'", "", str_replace('"', "*", $db->escape($this->request->getVar('content')))) . "', '$symlink', 1, '" . session()->get('user_id') . "', '$categoryId', 'active')";

                    echo $sql;
                    $result = $db->query($sql);




                    $post_id = $db->insertID();


                    $sql1 = "INSERT INTO `seo`(`seo_keywords`, `seo_title`, `seo_image`, `seo_short_description`, `robot_type`) VALUES ( :keywords:, :title: , :si:, :seo_desc:, :rt:);";






                    $result = $db->query($sql1, [
                        'keywords' => $this->request->getVar('seo_keywords'),
                        'title' => $this->request->getVar('seo_title'),
                        'si' => $newName,
                        'seo_desc' => $this->request->getVar('seo_short_description'),
                        'rt' => $this->request->getVar('robot_type'),
                    ]);

                    $seo_id = $db->insertID();

                    $db->query('UPDATE `posts` SET `seo_id` = ? WHERE `post_id` = ?', [$seo_id, $post_id]);

                    $tagsArr = explode(',', $this->request->getVar('tags'));

                    foreach ($tagsArr as $tag) {
                        $tag = trim($tag);
                        if (strlen($tag) > 0) {
                            $tagid = -1;
                            $query = $db->query("SELECT `tag_id` FROM `tag` WHERE tag_name = ?", $tag);


                            foreach ($query->getResultArray() as $row) {
                                $tagid = $row['tag_id'];
                            }


                            if ($tagid == -1) {
                                $query = $db->query("INSERT INTO tag (tag_name, created_by) VALUES (?, ?)", array($tag, session()->get('user_id')));
                                $tagid = $db->insertID();

                            }

                            $db->query('INSERT INTO `post_tags` (`post_id`, `tag_id`) VALUES (?, ?)', [$post_id, $tagid]);

                        }
                    }








                    // if ($db->transStatus() === FALSE) {
                    //     // Something went wrong, roll back the transaction
                    //     $db->transRollback();
                    // } else {
                    //     // Everything is fine, commit the transaction
                    //     $db->transCommit();
                    // }

                } catch (DatabaseException $e) {
                    // Handle any database errors
                    print_r($e->getMessage());
                    //$db->transRollback();
                    // You might want to log this error or handle it as per your requirement
                }



                return redirect()->route('dashboard/post');
            }
        } else {
            return redirect()->route('login');
        }

    }



    public function logout()
    {
        $this->session->destroy();
        return redirect()->route('login');
    }
}
