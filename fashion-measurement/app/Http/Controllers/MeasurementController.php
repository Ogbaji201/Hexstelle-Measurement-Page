<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MeasurementController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function submit(Request $request)
    {
        // VALIDATE ALL INPUTS
        $data = $request->validate([
            'name' => 'required|string',
            'phone' => 'required|string',

            // Upper Body
            'bust' => 'required',
            'underbust' => 'required',
            'nipple_distance' => 'required',
            'shoulder_bust' => 'required',
            'shoulder_underbust' => 'required',
            'across_chest' => 'required',
            'front_bust_arc' => 'required',

            // Waist & Torso
            'waist' => 'required',
            'front_length' => 'required',
            'nape_waist' => 'required',
            'underarm' => 'required',

            // Shoulders & Back
            'shoulder_width' => 'required',
            'across_back' => 'required',
            'back_shoulder' => 'required',
            'round_shoulder' => 'required',

            // Arms
            'sleeve_wrist' => 'required',
            'sleeve_elbow' => 'required',
            'bicep' => 'required',
            'elbow' => 'required',
            'wrist' => 'required',

            // Lower Body
            'hip' => 'required',
            'knee' => 'required',

            // Length & Fit
            'waist_knee' => 'required',
            'waist_ankle' => 'required',
            'waist_floor' => 'required',
            'waist_gown' => 'required',
        ]);

        // FORMAT MESSAGE
        $message = "NEW CLIENT MEASUREMENTS\n\n"

        . "CLIENT DETAILS\n"
        . "Name: {$data['name']}\n"
        . "Phone number: {$data['phone']}\n\n"

        . "UPPER BODY\n"
        . "Bust: {$data['bust']} cm\n"
        . "Underbust: {$data['underbust']} cm\n"
        . "Nipple Distance: {$data['nipple_distance']} cm\n"
        . "Shoulder to Bust: {$data['shoulder_bust']} cm\n"
        . "Shoulder to Underbust: {$data['shoulder_underbust']} cm\n"
        . "Across Chest: {$data['across_chest']} cm\n"
        . "Front Bust Arc: {$data['front_bust_arc']} cm\n\n"

        . "WAIST & TORSO\n"
        . "Waist: {$data['waist']} cm\n"
        . "Front Length: {$data['front_length']} cm\n"
        . "Nape to Waist: {$data['nape_waist']} cm\n"
        . "Underarm: {$data['underarm']} cm\n\n"

        . "SHOULDERS & BACK\n"
        . "Shoulder Width: {$data['shoulder_width']} cm\n"
        . "Across Back: {$data['across_back']} cm\n"
        . "Back Shoulder: {$data['back_shoulder']} cm\n"
        . "Round Shoulder: {$data['round_shoulder']} cm\n\n"

        . "ARMS\n"
        . "Sleeve (Wrist): {$data['sleeve_wrist']} cm\n"
        . "Sleeve (Elbow): {$data['sleeve_elbow']} cm\n"
        . "Bicep: {$data['bicep']} cm\n"
        . "Elbow: {$data['elbow']} cm\n"
        . "Wrist: {$data['wrist']} cm\n\n"

        . "LOWER BODY\n"
        . "Hip: {$data['hip']} cm\n"
        . "Knee: {$data['knee']} cm\n\n"

        . "LENGTH & FIT\n"
        . "Waist to Knee: {$data['waist_knee']} cm\n"
        . "Waist to Ankle: {$data['waist_ankle']} cm\n"
        . "Waist to Floor: {$data['waist_floor']} cm\n"
        . "Waist to Gown: {$data['waist_gown']} cm\n";

        // SEND TO WHATSAPP
        $this->sendWhatsApp($message);

        return back()->with('success', 'Measurements sent successfully.');
    }
}   

//     // WHATSAPP FUNCTION
//     private function sendWhatsApp($message)
//     {
//         Http::withBasicAuth('ACCOUNT_SID', 'AUTH_TOKEN')
//             ->asForm()
//             ->post('https://api.twilio.com/2010-04-01/Accounts/ACCOUNT_SID/Messages.json', [
//                 'From' => 'whatsapp:+14155238886',
//                 'To' => 'whatsapp:+2348140892471',
//                 'Body' => $message,
//             ]);
//     }
// }
