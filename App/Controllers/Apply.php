<?php

namespace Project\Controllers;

class Apply
{
    public $id;
    public $name;
    public $father_name;
    public $mother_name;
    public $collage;
    public $depertment;
    public $gpa;
    public $address;

    public function __construct()
    {
        session_start();
    }
    public function store(array $data)
    {
        $_SESSION['old'] = $data;

        if (empty($data['id'])) {
            $_SESSION['errors']['id'] = "Required Id";
        } elseif (!is_numeric($data['id'])) {
            $_SESSION['errors']['id'] = "Must be required integer number";
        }
        if (empty($data['name'])) {
            $_SESSION['errors']['name'] = "Required Name";
        }
        if (empty($data['father_name'])) {
            $_SESSION['errors']['father_name'] = "Required Name Father ";
        }
        if (empty($data['mother_name'])) {
            $_SESSION['errors']['mother_name'] = "Mother Name Required ";
        }
        if (empty($data['collage'])) {
            $_SESSION['errors']['collage'] = "Collage Name Required ";
        }
        if (empty($data['depertment'])) {
            $_SESSION['errors']['depertment'] = "Required Depertment Name";
        }
        if (empty($data['gpa'])) {
            $_SESSION['errors']['gpa'] = "Required GPA Name";
        }
        if (isset($_SESSION['errors'])) {
            return false;
        }

        $_SESSION['applylist'][] = $data;
        unset($_SESSION['old']);
        $_SESSION['massage'] = "Successfully Created!!!";
        return true;

        //  array_push($_SESSION, $data);
        // echo "<pre>";
        // print_r($_SESSION);
    }


    public function show(int $id)
    {

        $index = $this->findIndes($id);
        return $_SESSION['applylist'][$index];
    }

    public function update($data, $id)
    {

        ($_SESSION['applylist'][$this->findIndes($id)] = $data);

        $_SESSION['massage'] = "Successfully Updated!!!";
    }
    public function destroy(int $id)
    {

        $index = $this->findIndes($id);
        unset($_SESSION['applylist'][$index]);
        $_SESSION['massage'] = "Successfully Deleted!!!";
    }
    public function findIndes(int $id): int
    {
        $foodlist = $_SESSION['applylist'];
        $index = null;
        foreach ($foodlist as $key => $food) {
            if ($food['id'] == $id) {
                $index = $key;
            }
        }
        //print_r($foodInfo);
        return $index;
    }
}
