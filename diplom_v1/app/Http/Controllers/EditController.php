<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validator;
use App\Article;
use DB;

class EditController extends Controller
{

    public function editing($id, Request $request) {


        if ($request->isMethod('POST')) {

            $article = new Article();
            $article->unguard();

            $input = $request->except('_token');



            DB::table('articles')
                    ->where('id', $input['id'])
                    ->update($input);
            return redirect('home');
        }


        $article = Article::find($id);

        $old = $article->toArray();

        $data = [
            'title' => 'edit',
            'data' => $old
        ];



        return view('pages_edit', $data);
    }

    public function delete($page) {
        $article = Article::find($page);
        $article->delete();
        return redirect('home');
    }

    public function add(Request $request) {

        $name = Auth::user()->name;


        if ($request->isMethod('get')) {

            $data = [
                'name' => $name,
            ];

            return view('pages_add', $data);
        } else {
            $input = $request->except('_token');
            $id = Auth::user()->id;

            $article = new Article();
            $article->unguard(); //разрешает автозаполнение любого поля
            $article->fill($input);

//            $article = $input;
            $article->save();



            return redirect('home');


//            dd($input);
        }
    }

}
