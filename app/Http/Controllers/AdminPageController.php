<?php

namespace App\Http\Controllers;

use App\Models\Knowledge;
use App\Models\Service;
use App\Models\Training;
use Illuminate\Http\Request;

class AdminPageController extends Controller
{
    //Showing Create Service Post Page
    public function createServicePost(){
        return view('admin.createServicePost');
    }

    //Stroe Service post
    public function storeServicePost(Request $request){
        //validate input data
        $validation = $request->validate([
            "title"=>"required",
            "body"=>"required",
            "image"=>"nullable"
        ]);

        //If validation sucessful
        if($validation){
            //Request input data from Form name
            $title = request('title');
            $body = request('body');
            $image = request('image');

            $post = new Service();
            $post->title = $title;
            $post->body = $body;

            //image
            $imageName = uniqid()."_".$image->getClientOriginalName();
            $image->move(public_path("images/posts/"),$imageName);
            $post->image=$imageName;

            $post->save();

            return redirect()->route("home")->with("message","post added");
        } else {
            return back()->withErrors($validation);
        }
    }

    //Showing Create Training Post Page
    public function createTrainingPost(){
        return view('admin.createTrainingPost');
    }

    //Stroe Training post
    public function storeTrainingPost(Request $request){
        //validate input data
        $validation = $request->validate([
            "title"=>"required",
            "body"=>"required",
            "image"=>"nullable"
        ]);

        //If validation sucessful
        if($validation){
            //Request input data from Form name
            $title = request('title');
            $body = request('body');
            $image = request('image');

            $post = new Training();
            $post->title = $title;
            $post->body = $body;
            // $post->image= $image;

            //image
            $imageName = uniqid()."_".$image->getClientOriginalName();
            $image->move(public_path("images/posts/"),$imageName);
            $post->image=$imageName;

            $post->save();

            return redirect()->route("home")->with("message","post added");
        } else {
            return back()->withErrors($validation);
        }
    }

    //Showing Create Knowledge Post Page
    public function createKnowledgePost(){
        return view('admin.createKnowledgePost');
    }

    //Stroe Knowledge post
    public function storeKnowledgePost(Request $request){
        //validate input data
        $validation = $request->validate([
            "title"=>"required",
            "body"=>"required",
            "image"=>"nullable",
            "tags"=>"nullable"
        ]);

        //If validation sucessful
        if($validation){
            //Request input data from Form name
            $title = request('title');
            $body = request('body');
            $image = request('image');
            $tags = request('tags');

            $post = new Knowledge();
            $post->title = $title;
            $post->body = $body;
            // $post->image= $image;

            //image
            $imageName = uniqid()."_".$image->getClientOriginalName();
            $image->move(public_path("images/posts/"),$imageName);
            $post->image=$imageName;

            $post->tags = $tags;

            $post->save();

            return redirect()->route("home")->with("message","post added");
        } else {
            return back()->withErrors($validation);
        }
    }
}
