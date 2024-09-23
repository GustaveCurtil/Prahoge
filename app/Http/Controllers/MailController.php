<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function submit(Request $request)
    {
        $data = $request->validate([
            'naam' => 'required|min:3',
            'nummer' => 'required',
            'email' => 'required|email|max:255',
            'boodschap' => 'required|string',
            'patient' => 'nullable',
            'robot' => ['required', 'in:7,zeven'], // Custom rule for "robot" field
        ], [
            'naam.required' => 'De naam is verplicht.',
            'naam.min' => 'De naam moet minstens 3 tekens lang zijn.',
            'nummer.required' => 'Het telefoonnummer is verplicht.',
            'email.required' => 'Het e-mailadres is verplicht.',
            'email.email' => 'Gelieve een geldig e-mailadres in te voeren.',
            'boodschap.required' => 'Gelieve een boodschap in te voeren.',
            'robot.required' => 'Deze vraag is verplicht.',
            'robot.in' => 'Het antwoord op de vraag moet "7" of "zeven" zijn.', // Custom error message for "robot"
        ]);

        $patient = $request->input('patient', false);
        $wilpatientworden = "nee";

        if ($patient) {
            $wilpatientworden = 'ja';
        } else {
            $wilpatientworden = 'nee';
        }

        // Send email to the visitor
        Mail::send([], [], function ($message) use ($data, $wilpatientworden) {
            $message->to($data['email'])
                    ->subject('Formulier PRAHOGE goed ontvangen')
                    ->from('afspraak@doktereggermont.be')
                    ->html(
                        'U heeft een boodschap achtergelaten via www.prahoge.be.<br>Dokter Gerda Eggermont zal zo snel mogelijk contact met u opnemen.<br>Deze mail is geen bevestiging voor een afspraak. Voor dringende afspraken belt u best naar het nummer +3292267062.<br><br>' .
                        'Hier is een kopie van uw boodschap:<br>' .
                        '<strong>Voor- en achternaam:</strong> ' . e($data['naam']) . '<br>' .
                        '<strong>Email:</strong> ' . e($data['email']) . '<br>' .
                        '<strong>Telefoonnummer:</strong> ' . e($data['nummer']) . '<br>' .
                        '<strong>Vraagstelling:</strong><br>' . nl2br(e($data['boodschap'])) . '<br>' .
                        '<strong>Ik wens vast patiënt te worden: </strong>' . $wilpatientworden . '<br><br>' .
                        '<a href="https://www.prahoge.be">PRAHOGE</a> - Praktijk voor Holistische Geneeskunde' . 
                        '<br><strong>U kan niet antwoorden op deze mail!</strong><br>'
                    );
        });

        // Send email to the site owner
        Mail::send([], [], function ($message) use ($data, $wilpatientworden) {
            $message->to('gerda.eggermont@telenet.be') // Replace with the site owner's email
                    ->subject('Nieuwe afspraak door ' . e($data['naam']) )
                    ->from('afspraak@doktereggermont.be')
                    ->html(
                        'Dag Gerda, <br>Het contactformulier op www.prahoge.be werd ingevuld door '  . e($data['naam']) . '<br>' .
                        'De persoon in kwestie heeft een mail ontvangen met de boodschap dat u contact zal opnemen.<br><br>' .
                        '<strong>Voor- en achternaam:</strong> ' . e($data['naam']) . '<br>' .
                        '<strong>Email:</strong> ' . e($data['email']) . '<br>' .
                        '<strong>Telefoonnummer:</strong> ' . e($data['nummer']) . '<br>' .
                        '<strong>Vraagstelling:</strong><br>' . nl2br(e($data['boodschap'])) . 'br' .
                        '<strong>' . e($data['naam']) . ' wenst vast patiënt te worden: </strong>' . $wilpatientworden . '.'
                    );
        });

        return redirect()->back()->with('success', 'Uw boodschap is goed ontvangen. Er werd een kopie gestuurd naar het door u ingevulde email: '. $data['email'] . '. Kijk zeker uw spam ook na!');
    }
}
