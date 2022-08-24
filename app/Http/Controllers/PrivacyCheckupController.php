<?php

namespace App\Http\Controllers;

use App\Http\Requests\PrivacyCheckupRequest;
use App\Services\PrivacyCheckupService;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PrivacyCheckupController extends Controller
{
    public function __construct(private PrivacyCheckupService $service)
    {
    }

    public function index()
    {
        return view('privacy-checkup.index');
    }

    public function show(PrivacyCheckupRequest $request): View
    {
        $reportData = $this->service->generateReport($request);
        return view('privacy-checkup.show', compact('reportData'));
    }
}
