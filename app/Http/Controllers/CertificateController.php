<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Models\Certificate;
use App\Models\Participant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Barryvdh\DomPDF\Facade\Pdf;


class CertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'participant_name' => 'required|string',
            'training' => 'required|string',
            'ceo_name' => 'required|string',
            'trainer_name' => 'required|string',
            'trainer_agency' => 'required|string',
            'place' => 'required|string',
            'date' => 'required|date',
            'ceo_signature' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'trainer_signature' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'title' => 'required|string',
            'description' => 'required|string',
            'design' => 'required|in:1,2',
        ]);

        // Create Participant
        $participant = Participant::create([
            'name' => $request->participant_name,
            'training' => $request->training,
        ]);

        // Upload and store signatures
        $ceo_signature = null;
        $trainer_signature = null;

        if ($request->hasFile('ceo_signature')) {
            $ceo_signature = $request->file('ceo_signature')->store('signatures', 'public');
        }

        if ($request->hasFile('trainer_signature')) {
            $trainer_signature = $request->file('trainer_signature')->store('signatures', 'public');
        }

        // Create Setting
        $setting = Setting::create([
            'ceo_name' => $request->ceo_name,
            'trainer_name' => $request->trainer_name,
            'trainer_agency' => $request->trainer_agency,
            'place' => $request->place,
            'date' => $request->date,
            'ceo_signature' => $ceo_signature,
            'trainer_signature' => $trainer_signature,
        ]);

        // Create Certificate
        $certificate = Certificate::create([
            'participant_id' => $participant->id,
            'setting_id' => $setting->id,
            'title' => $request->title,
            'description' => $request->description,
            'design' => $request->design,
        ]);

        // // Generate PDF based on design
        // $pdfView = $request->design === '1' ? 'certif1' : 'certif2';

        // $data = [
        //     'name' => $request->participant_name,
        //     'title' => $request->title,
        //     'description' => $request->description,
        // ];

        // $pdf = PDF::loadView($pdfView, $data);

        // // Save PDF to storage
        // $pdfPath = 'certificates/' . $certificate->id . '.pdf';
        // Storage::disk('public')->put($pdfPath, $pdf->output());

        // // Update the certificate with the PDF path
        // $certificate->update(['pdf_path' => $pdfPath]);

        return redirect()->route('certificates.show', $certificate->id)
            ->with('success', 'Certificate created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
