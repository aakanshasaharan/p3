<?php

namespace App\Http\Controllers;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Faker\Factory;

class randomUserController extends Controller {
    public function __construct() {
        # Put anything here that should happen before any of the other actions
    }

    //Request to get randomuser
    public function getRandomuser() {
        return view('randomuser');
    }

    //Request to post randomuser
    public function postRandomuser(Request $request) {
        $this->validate(
            $request,
            [ 'number' => 'required|integer|min:1|max:50',
              'options' => 'required'],
              array('options.required' => 'One option must be selected!')
        );
        $faker = Factory::create('en_US');
        $data = $request->all();
        $options = $data['options'];
        $randomuser = array();
        $number_of_randomuser = $data['number'];
        if (isset($data['options'])) {
            $options=$data['options'];
            for ($i=0; $i < $number_of_randomuser; $i++) {
                $user = array();
                if (in_array('name', $options)) {
                    $user['Name'] = $faker->name;
                }
                if (in_array('email', $options)) {
                    $user['Email'] = $faker->email;
                }
                if (in_array('username', $options)) {
                    $user['Username'] = $faker->username;
                }
                if (in_array('company', $options)) {
                    $user['Company'] = $faker->company;
                }
                if (in_array('address', $options)) {
                    $user['Address'] = $faker->address;
                }
                if (in_array('phone', $options)) {
                   $user['Phone'] = $faker->phoneNumber;
                }
                if (in_array('text', $options)) {
                   $user['Text'] = $faker->text;
                }
                array_push($randomuser, $user);
            }
        }
        $request->flash();
        return view('randomuser')->with('randomuser', $randomuser)
                                 ->with('options', $options);
    }
}
