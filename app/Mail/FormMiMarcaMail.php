<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Imaqformservices;
use App\Models\Imaqformlines;
use App\Models\Imaqformstates;


class FormMiMarcaMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {
        $service = Imaqformservices::find($this->data->service_id);
        $line    = Imaqformlines::find($this->data->line_id);
        $state   = Imaqformstates::find($this->data->state_id);

        // Convertimos IDs a texto legible
        $this->data->service_name = $service->name ?? 'No especificado';
        $this->data->line_name    = $line->name ?? 'No especificado';
        $this->data->state_name   = $state->name ?? 'No especificado';

        // Horario (ejemplo simple)
        $hours = [
            '1' => '9:00 AM',
            '2' => '10:00 AM',
            '3' => '11:00 AM',
            '4' => '12:00 PM',
            '5' => '13:00 PM',
            '6' => '14:00 PM',
            '7' => '15:00 PM',
            '8' => '16:00 PM',
            '9' => '17:00 PM',
            '10' => '18:00 PM',
            '11' => 'Después de las 18:00 PM',
        ];

        $this->data->hour_text = $hours[$this->data->hour] ?? $this->data->hour;


        return $this->subject('Nueva solicitud - Crear marca de cosméticos')
                    ->view('emails.mimarca');
    }
}
