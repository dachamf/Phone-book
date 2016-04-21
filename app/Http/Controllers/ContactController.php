<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use DB;

class ContactController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     *
     */
    public function index()
    {
        //Fetch posts and paginate.
        $contacts = Contact::paginate(5);
        if (!count($contacts)) {
            $contacts = array();
        }

        return view('frontend.contact.index', ['contacts' => $contacts]);
    }

    public function create()
    {
        return view('frontend.contact.create');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'firstName' => 'required|alpha|min:2|max:25',
            'lastName' => 'required|alpha|min:2|max:25',
            'phoneNumber' => 'required|numeric|min:7|unique:contacts,phoneNumber',
            'address' => 'required|min:3|max:100',
            'comment' => 'required|min:2|max:250',
        ]);

        //Save the contact.
        $contact = new Contact;
        $contact->firstName = $request->firstName;
        $contact->lastName = $request->lastName;
        $contact->phoneNumber = $request->phoneNumber;
        $contact->address = $request->address;
        $contact->comment = $request->comment;
        $contact->save();

        Session::flash('success', 'Contact successfully added!');
        return redirect()->action('ContactController@index');
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $contact = Contact::find($id);
        return view('frontend.contact.edit', ['contact' => $contact]);
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'firstName' => 'required|alpha|min:2|max:25',
            'lastName' => 'required|alpha|min:2|max:25',
            'phoneNumber' => 'required|numeric',
            'address' => 'required|min:3|max:100',
            'comment' => 'required|min:2|max:250',
        ]);

        //Save the contact.
        $contact = Contact::find($id);
        $contact->firstName = $request->firstName;
        $contact->lastName = $request->lastName;
        $contact->phoneNumber = $request->phoneNumber;
        $contact->address = $request->address;
        $contact->comment = $request->comment;
        $contact->save();

        Session::flash('success', 'Contact successfully updated!');
        return redirect()->action('ContactController@index');
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete($id)
    {
        Contact::destroy($id);
        Session::flash('success', 'Contact successfully deleted!');
        return redirect()->action('ContactController@index');
    }

    /**
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function executeSearch(Request $request)
    {
//        $users = User::where('votes', '>', 100)->paginate(15);

        $searchterm = $request->searchinput;

        $contacts = DB::table('contacts')->where('firstName', 'LIKE', '%'. $searchterm .'%')
            ->orWhere('lastName', 'LIKE', '%'. $searchterm .'%')
            ->orWhere('phoneNumber', 'LIKE', '%'. $searchterm .'%')
            ->orWhere('address', 'LIKE', '%'. $searchterm .'%')->paginate(5);
        if (!count($contacts)) {
            $contacts = array();
            Session::flash('fail', "There is no results matching term '$searchterm'!");
        }

        return view('frontend.contact.search', ['contacts' => $contacts]);

    }

}
