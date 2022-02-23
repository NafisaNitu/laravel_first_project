<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NameController extends Controller
{
    protected $firstName = 'Habibur';
    protected $lastName = 'Rahman';

    public function index()
    {
        return $this->firstName;
    }
    public function fullName()
    {
//        return $this->firstName.' '.$this->lastName;
        return view('ful-name',[
            'firstName' => $this->firstName,
            'lastName'  => $this->lastName,
        ]);
        return view('full-name',compact(['firstName','lastName']));
    }
}
