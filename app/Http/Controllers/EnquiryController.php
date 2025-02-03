<?php

namespace App\Http\Controllers;

use App\Mail\EnquiryMail;
use App\Models\Enquiry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EnquiryController extends Controller
{
    public function index()
    {
        $enquiries = Enquiry::latest()->where('type', request('type'))->paginate(10);
        return view('admin.screens.enquiry.index', compact('enquiries'));
    }

    public function create()
    {
        return view('web.screens.enquiry.index');
    }

    public function store(Request $request)
    {
        $enquiry = Enquiry::where("mobile", $request->mobile)->firstOrNew();
        $enquiry->name = $request->name;
        $enquiry->email = $request->email;
        $enquiry->mobile = $request->mobile;
        $enquiry->company_name = $request->company_name;
        $enquiry->address = $request->address;
        $enquiry->type = $request->type;
        $enquiry->save();

        $whatsapp = "";
        if ($request->type == "visitor") {
            $whatsapp = createEntryPaas($enquiry, "visitor");
        }

        Mail::to(env('MAIL_FROM_ADDRESS'))->send(new EnquiryMail($request->all()));

        return response()->json([
            'message' => 'Details has been sent, We will contact you shortly.',
            // 'whatsapp' => $whatsapp
        ]);
    }
}
