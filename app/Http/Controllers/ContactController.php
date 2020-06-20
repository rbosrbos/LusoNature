<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Codedge\Fpdf\Fpdf\Fpdf;
use Exception;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }
    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required|min:6',
            'email' => 'required|email',
            'contact_message' => 'required:min:10'
        ]);
        $pdf = new Fpdf;
        $pdf->AddPage('P', 'A4');
        $pdf->SetAutoPageBreak(true, 10);
        $pdf->SetFont('Arial', '', 12);
        $pdf->SetTopMargin(10);
        $pdf->SetLeftMargin(10);
        $pdf->SetRightMargin(10);

        $pdf->rect(0,0,210,40,'DF');
        $pdf->Image(public_path('images/logo.jpg'), 10, 5, 30);
        /* --- Text --- */
        $pdf->SetFont('Arial', '', 24);
        $pdf->Text(50, 81, 'LusoNature - Contact Form');
        /* --- Text --- */
        $pdf->SetFontSize(12);
        $pdf->Text(16, 105, 'on ' . date("Y/m/d | h:i:s") . ' ' . $request->name . ' <' . $request->email . '> wrote:');
        /* --- Write --- */
        $pdf->SetY(130);
        $pdf->Write(6, $request->contact_message);
        $response = response($pdf->Output('S'));
        $response->header('Content-Type', 'application/pdf');
        $response->header('Content-Disposition', 'inline; filename="output.pdf"');
        $response->header('Cache-Control:', 'private, max-age=0, must-revalidate');
        
        $filename = md5(uniqid(empty($_SERVER['SERVER_ADDR']) ? '' : $_SERVER['SERVER_ADDR'], true)) . '.pdf';
        Storage::put($filename, $response);
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'contact_message' => $request->contact_message
        ];
        try {
            Mail::send('email.contact', $data, function ($message) use ($filename) {
                $message->from(env('MAIL_FROM_ADDRESS'));
                $message->to(Admin::all()->first()->email);
                $message->subject('New message from LusoNature contact form');
                $message->attach(public_path('/storage\/' . $filename));
            });
            Storage::delete($filename);
            return view('contact.create',[
                'status' => 1
            ]);
        }
        catch(Exception $e){
            Storage::delete($filename);
            return view('contact.create',[
                'status' => 0
            ]);
        }
    }
}
