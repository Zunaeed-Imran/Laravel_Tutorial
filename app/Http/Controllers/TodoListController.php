<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Listingitem;
use League\CommonMark\Extension\CommonMark\Node\Block\ListItem;

class TodoListController extends Controller
{

    public function index()
    {
        return view('welcome', ['listingItems' => Listingitem::where('is_complate', 0)->get()]);
    }

    public function markComplete($id)
    {
        $listItem = ListItem::find($id);
        $listItem->is_complate = 1;
        $listItem->save();

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
