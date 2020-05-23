<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    /**
     * @param ContactRequest $req
     * @return $this
     */
    public function submit(ContactRequest $req) {
//        $validation = $req->validate([
//            'subject' => 'required|min:5|max:50',
//            'message' => 'required|min:5|max:300',
//            'email' => 'required|email:rfc,dns',
//        ]);

        $contact = new Contact();
        $contact->name = $req->input('name');
        $contact->email = $req->input('email');
        $contact->subject = $req->input('subject');
        $contact->message = $req->input('message');

        $contact->save();

        return redirect('contact')->with('success', ['Сообщение оставлено. Мы свяжемся с вами в ближайшее время']);
    }

    /**
     * @param int $id
     * @param ContactRequest $req
     *
     * @return $this
     */
    public function updateMessageByIdSubmit($id, ContactRequest $req) {
        $contact = self::getMessageById($id);

        $contact->name = $req->input('name');
        $contact->email = $req->input('email');
        $contact->subject = $req->input('subject');
        $contact->message = $req->input('message');

        $contact->save();

        return redirect()->route('contact-data-update', $id)->with('success', ['Сообщение успешно отредактировано']);
    }

    /**
     * @param int $id
     *
     * @return $this
     */
    public function deleteMessage($id) {
        self::getMessageById($id)->delete();

        return redirect()->route('contact-data-all')->with('success', ['Сообщение успешно удалено']);
    }

    /**
     * @param int $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function viewMessageById($id) {
        // $contact->where('id', '=', $id)->get()
        return view('messagePage', ['data' => self::getMessageById($id)]);
    }

    /**
     * @param int $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function updateMessageById($id) {
        return view('updateMessage', ['data' => self::getMessageById($id)]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function allData() {
        $contact = new Contact();


        // $contact->orderBy('id', 'desc')->take(12)->get()
        return view('messages', ['data' => $contact->get()]);
    }

    /**
     * @param int $id
     * @return mixed
     */
    private static function getMessageById($id) {
        return Contact::find($id);
    }
}
