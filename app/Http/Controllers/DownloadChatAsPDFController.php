<?php

namespace App\Http\Controllers;

use App\Chat;
use PDF;
use Illuminate\Http\Request;

/**
 * Class DownloadChatAsPDFController.
 *
 * @package App\Http\Controllers
 */
class DownloadChatAsPDFController extends Controller
{
    public function index(Request $request, Chat $chat)
    {
        $pdf = PDF::loadView('pdf.chat', compact('chat'));
//        $pdf = PDF::loadView('pdf.chat', [
//            'chat' => $chat
//        ]);
        return $pdf->download('invoice.pdf');
    }
}
