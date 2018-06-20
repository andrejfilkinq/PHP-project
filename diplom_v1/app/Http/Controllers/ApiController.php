<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Http\Requests;
use App\Api;
use App\Http\Resources\ApiMy;
use Illuminate\Http\Resources\Json\Resource;

class ApiController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $api = Api::paginate(15);
        return ApiMy::collection($api);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $api = $request->isMethod('put') ? Api::findOrFail($request->api_id) : new Api;

        $api->id = $request->input('api_id');
        $api->title = $request->input('title');
        $api->body = $request->input('body');

        if ($api->save()) {
            return new ApiMy($api);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $api = Api::findOrFail($id);

        return new ApiMy($api);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $api = Api::findOrFail($id);

        if ($api->delete()) {
            return new ApiMy($api);
        }
    }

}
