<?php

namespace App\Http\Controllers;

use App\Http\Requests\Book\BookLoanRequest;
use App\Models\Loan;
use Illuminate\Http\Request;

class LoanController extends Controller
{
    public function makeLoan(BookLoanRequest $request)
    {
        $bookLoanData = $request->validated();

        $bookLoanData['tgl_pinjam'] = date("Y/m/d");
        $bookLoanData['status'] = 'diproses';

        Loan::create($bookLoanData);

        return back();
    }
}
