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
                $img->move(WRITEPATH . 'uploads', $newName);
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
                    return view("LandingPage/index.php");
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
            return view("Dashboard/home.php");
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

    public function submitPost()
    {
        helper(['form', 'url', 'text', 'auth', 'category']);

        if (isAuthenticated()) {

            $input = $this->validate([
                'title' => 'required|min_length[3]|max_length[30]'
                // 'description' => 'required||max_length[300]',
                // 'content' => 'required|max_length[10000]',
                // 'category' => 'required|max_length[100]',
                // 'tags' => 'required|max_length[10000]',
                // 'seo_keywords' => 'required|min_length[4]',
                // 'seo_title' => 'required|min_length[4]',
                // 'seo_short_description' => 'required|min_length[8]',
                // 'robot_type' => 'required|min_length[2]'
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
                    $coverImage->move(WRITEPATH . 'uploads', $newName);
                }

                $seoImage = $this->request->getFile('seo_image');
                $newName = '';
                if ($seoImage->isValid() && !$seoImage->hasMoved()) {
                    $newName = $seoImage->getRandomName();
                    $seoImage->move(WRITEPATH . 'uploads', $newName);
                }


                try {
                    // Begin the transaction
                    //$db->transBegin();
                    $categoryId = -1;
                    $categoryName = $this->request->getVar('category');
                    // print('' . $categoryId . '' . $categoryName . '');
                    $query = $db->query("SELECT category_id FROM categories WHERE category_name = ?", array($categoryName));
                    $row = $query->getRow();
                    if (isset($row)) {

                        $categoryId = $row->category_id;
                    } else {
                        $query = $db->query("INSERT INTO categories (category_name) VALUES (?)", array($categoryName));
                        $categoryId = $query->row()->insert_id();
                    }



                    print($categoryId);




                    // Check if everything went well
                    // if ($db->transStatus() === FALSE) {
                    //     // Something went wrong, roll back the transaction
                    //     $db->transRollback();
                    // } else {
                    //     // Everything is fine, commit the transaction
                    //     $db->transCommit();
                    // }
                } catch (DatabaseException $e) {
                    // Handle any database errors
                    $db->transRollback();
                    // You might want to log this error or handle it as per your requirement
                }



                //return redirect()->route('dashboard');
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
