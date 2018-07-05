<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
      //return 'INDEX';
      $title = 'Player 1 Advantage!';
      //return view('pages.index', compact('title'));
      return view('pages.index')->with('title',$title);
    }
    public function partnerlist(){
      $title="Partner List";
      return view('pages.partnerlist')->with('title',$title);
    }
    public function wheretobuy(){
      $title="Where to buy";
      return view('pages.wheretobuy')->with('title',$title);
    }
    public function faq(){
      $title="FAQ";
      return view('pages.faq')->with('title',$title);
    }
    public function about(){
      $title="About Us";
      return view('pages.about')->with('title',$title);
    }
    public function contactus(){
      $title="Contact Us";
      return view('pages.contactus')->with('title',$title);
    }

    public function services(){

      // $title="Services";
      $data = array(
        'title'=>'Services',
        'services' => ['WD','Programming', 'SEO']
      );
      return view('pages.services')->with($data);
    }
}
