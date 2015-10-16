<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoremIpsumController extends Controller {

    public function __construct() {
        # Put anything here that should happen before any of the other actions
    }

    //Responds to request to GET /indexPage or homePage for app
    public function getIndex() {
        return view('index');
    }

    // Responds to request to GET /loremipsum paragraphs page
     public function getLoremIpsum() {
         return view('loremipsum');
     }
    //Responds to request to POST /loremipsum paragraphs
    public function postLoremIpsum(Request $request) {
    //validation ask for atleast min2 max50 no. of paragraphs
         $this->validate(
             $request,
             ['paragraphs' => 'integer|min:2|max:50']
         );
         $paragraphs = $request->input('paragraphs');
         return view('loremipsum')->with('paragraphs', $paragraphs);
     }

    //Responds to requests to GET /randomuser page
    public function getRandomUser() {
          return view('randomuser');
      }
    //Responds to requests to POST /randomuser page
    public function postRandomUser() {
            return view('randomuser');
      }
}
