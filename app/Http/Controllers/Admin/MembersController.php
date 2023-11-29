<?php

namespace App\Http\Controllers\Admin;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class MembersController extends Controller
{
    public function index()
    {
        $members = User::where('user_status', 1)->get();
        return view('admins.members', compact('members'));
    }

    public function downloadPDF(Request $request)
    {
        $members = User::where('user_status', 1)->get();

        $data = [
            'members' => $members,
        ];

        if($request->has('download'))
        {
            $pdf = PDF::loadView('pdf.members', $data);
            $today = date('Y-m-d');
            return $pdf->download('Member List ' .$today . '.pdf');
        }

        return view('admins.members');
    }
}
