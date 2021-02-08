<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

/*public function index(){
        return "This is index method";
    }

    public function create()
    {
        return "This is create method";
    }

    public function show($id)
    {
        return "This is the id for show mwthod ".$id;
    }

    public function edit($id)
    {
        return "This is the id for edit mwthod ".$id;
    }

    public function store(Request $request)
    {
        return "This is store method";
    }

    public function update(Request  $request, $id)
    {
        return "This is update method";
    }

    public function destory($id)
    {
        return "This is destroy method";
    }*/

    public function index(){

        //$title='gooood';

        return view('pages.index',[
            'title'=>'goooood',
            'title1' => 'title 2'
            ]);
    }

    public function about(){

        return view('pages.about');
    }

    public function services(){

        $data =array(
            'title'=>'services',
            'services'=>['car','boat','tain']
        );

        return view('pages.services')->with($data);
    }


}
