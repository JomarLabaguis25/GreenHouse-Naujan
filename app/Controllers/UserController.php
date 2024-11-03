<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Controllers\BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class UserController extends BaseController
{
    public function UserReg()
    {
        // Load the Request library and helper functions
        helper(['form', 'url']);

        // Check if the request is a POST request
        if ($this->request->getMethod() === 'post') {
            // Extract form data
            $userData = [
                'fullName' => $this->request->getPost('fullName'),
                'department' => $this->request->getPost('department'),
                'email' => $this->request->getPost('email'),
                'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT), // Hash the password
                'address' => $this->request->getPost('address')
            ];

            // Handle profile picture upload
            $profilePicture = $this->request->getFile('profilePicture');
            if ($profilePicture && $profilePicture->isValid() && !$profilePicture->hasMoved()) {
                $newName = $profilePicture->getRandomName();
                $profilePicture->move(WRITEPATH . 'uploads/profile_pictures', $newName);
                $userData['profilePicture'] = $newName; // Save the file name in the database
            } else {
                // Handle the case where no profile picture is uploaded
                $userData['profilePicture'] = null;
            }

            // Load the UserModel
            $userModel = new UserModel();

            // Call model method to insert data into the database
            if ($userModel->insert($userData)) {
                return redirect()->to('/success'); // Redirect to a success page or any other page
            } else {
                return redirect()->back()->with('error', 'Failed to register user. Please try again.');
            }
        }

        // If it's not a POST request or after processing the form submission, load the view
        return view('users/UserReg');
    }

    public function editprofile()
    {
        return view('users/editprofile');
    }
    public function login()
    {
        return view('login');
    }

    public function UserLogin()
    {
        return view('users/UserLogin');
    }

    public function processLogin()
    {
        $userModel = new UserModel();

        if ($this->request->getMethod() === 'post') {
            // Form submitted, validate input data
            if (!$this->validate($userModel->validationRules)) {
                $data['error'] = $this->validator->listErrors();
                return view('users/UserLogin', $data);
            }

            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');

            $user = $userModel->getUserByEmail($email);

            if ($user && password_verify($password, $user['password'])) {
                // Login successful
                // Redirect to dashboard or wherever you want
                return redirect()->to('dash');
            } else {
                // Login failed
                $data['error'] = 'Invalid email or password';
                return view('users/UserLogin', $data);
            }
        }

        // Show the login form if the request method is not post
        return view('users/UserLogin');
    }



    //     protected $UserModel; 

    // public function __construct()
    // {
    //     $this->UserModel = new UserModel(); 
    //     $this->validator = \Config\Services::validation();
    // }

    //     public function index()
    //     {
    //         return view('users/UserLogin');
    //     }

    //     public function UserLogin()
    // {
    //     // Form validation rules
    //     $validationRules = [
    //         'email' => 'required|valid_email',
    //         'password' => 'required'
    //     ];

    //     if (!$this->validate($validationRules)) {
    //         // If validation fails, reload the login form view with validation errors
    //         return view('users/UserLogin', ['validation' => $this->validator]);
    //     } else {
    //         // Retrieve email and password from form
    //         $email = $this->request->getPost('email');
    //         $password = $this->request->getPost('password');

    //         // Check if the email and password are correct using the UserModel
    //         if ($this->UserModel->verifyUser($email, $password)) {
    //             // Redirect to dashboard upon successful login
    //             return redirect()->to('dashboard/dash');
    //         } else {
    //             // Set error message and reload the login form view
    //             $data['error'] = '';
    //             return view('users/UserLogin', $data);
    //         }
    //     }
    // }
}
