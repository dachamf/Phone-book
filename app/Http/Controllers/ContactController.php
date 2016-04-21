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

    /**
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

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

        //Set flash message.
        Session::flash('success', 'Contact successfully added!');
        // Redirect to a frontpage.
        return redirect()->action('ContactController@index');
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        //find contact by id.
        $contact = Contact::find($id);
        //Get a view and pas them a contact object value
        return view('frontend.contact.edit', ['contact' => $contact]);
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        //Validate request.
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

        // Set session flash message.
        Session::flash('success', 'Contact successfully updated!');

        //Redirect to a front page.
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
        //Get a search term.
        $searchterm = $request->searchinput;

        // Get results filtering by search term.
        $contacts = DB::table('contacts')->where('firstName', 'LIKE', '%' . $searchterm . '%')
            ->orWhere('lastName', 'LIKE', '%' . $searchterm . '%')
            ->orWhere('phoneNumber', 'LIKE', '%' . $searchterm . '%')
            ->orWhere('address', 'LIKE', '%' . $searchterm . '%')->paginate(5);
        if (!count($contacts)) {
            $contacts = array();
            Session::flash('fail', "There is no results matching term '$searchterm'!");
        }

        // Go to search page and pas contacts search result.
        return view('frontend.contact.search', ['contacts' => $contacts]);

    }

}
