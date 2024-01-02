<?php

namespace App\Controllers;

class HomeController extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function create()
    {
        // echo "Hello";
        if ($this->request->getMethod() == 'post') {
            $validation = $this->validate([
                // validation rules
                'name' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Your Name is required'
                    ]
                ],
                'email' => [
                    'rules' => 'required|valid_email',
                    'errors' => [
                        'required' => 'Your Email is required',
                        'valid_email' => 'You must enter a valid email'
                    ]
                ],
                'phone' => [
                    'rules' => 'required|numeric|max_length[10]|min_length[10]',
                    'errors' => [
                        'required' => 'Contact No. is Required',
                        'numeric' => 'Your Contact No. must be a number',
                        'min_length' => 'Your Contact No. must have 10 digits number',
                        'max_length' => 'Your Contact No. must have 10 digits number'
                    ]
                ],
                'course' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Course name is required',
                    ]
                ],
            ]);

            if (!$validation) {
                $validation = \Config\Services::validation();
                $errors = $validation->getErrors();
                echo json_encode(['status' => 'error', 'data' => 'Validate form', 'errors' => $errors]);
                //    echo json_encode(['status'=>'Error', 'data'=>'Validate form', 'errors'=>$errors]);
            } else {
                // echo "Form submitted";
                $name = $this->request->getPost('name');
                $email = $this->request->getPost('email');
                $phone = $this->request->getPost('phone');
                $course = $this->request->getPost('course');
                // set value in array
                $value = ['name' => $name, 'email' => $email, 'phone' => $phone, 'course' => $course];
                // echo json_encode($value);
                // sending data to databse
                $studentModel = new \App\Models\StudentModel();
                $inserted = $studentModel->save($value);
                if ($inserted) {
                    echo json_encode(['status' => 'success', 'message' => 'Form submitted successfully']);
                } else {
                    echo json_encode(['status' => 'error', 'message' => 'Form not submitted']);
                }
                // echo json_encode(['status' => 'success', 'data' => 'Data Inserted Successfully', 'errors' => []]);
            }
        }

    }
}

