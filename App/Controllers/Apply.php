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

        $_SESSION['applylist'][] = $data;

        $_SESSION['massage'] = "Successfully Created!!!";

         array_push($_SESSION, $data);

        echo "<pre>";
        print_r($_SESSION);
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


