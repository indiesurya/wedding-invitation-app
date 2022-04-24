<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveRsvpRequest;
use App\Repositories\RSVPRepository;

use Illuminate\Http\RedirectResponse;

class RSVPController extends Controller
{

	public function save(SaveRsvpRequest $request, RSVPRepository $rsvpRepo): RedirectResponse
	{
		$rsvpRepo->create($request->all());

		return back();
	}

}
