<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Listingitem;

class TodoListController extends Controller
{

    public function index()
    {
        return view('welcome', ['listingItems' => Listingitem::all()]);
    }

    public function markComplete()
    {
        return redirect('/');
    }
    public function saveItem(Request $request)
    {
        $newListItem = new Listingitem;
        $newListItem->name = $request->listingitems;
        $newListItem->is_complate = 0;
        $newListItem->save();


        return redirect('/');
    }
}
