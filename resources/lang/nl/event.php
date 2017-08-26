<?php
return [
    'tickets' => [
        'offline' => 'Ook mogelijk om offline te belaten',
        'register' => 'Inschrijven',
        'notickets'=> 'Gelieve een aantal tickets te kiezen',
        'maxamount'=> 'Je kan maximum nog :amount tickets selecteren.' ,
        'minamount'=> 'Je moet minimum :amount tickets kiezen.'
    ],
    'header' => [
        'presents' => 'presenteert',
        'tickets' => 'TICKETS',
        'details' => 'DETAILS',
        'location' => 'LOCATIE'
    ], 'share' => [
        'title' => 'Delen'
    ],
    'organiser' => [
        'form' => [
            'name' => 'Naam',
            'email' => 'E-mailadres',
            'message' => 'Bericht',
            'send' => 'Verzenden'
        ]

    ],
    'createOrder' => [
        'title' => 'Details bestelling',
        'yourinfo' => 'Jouw gegevens',
        'summary' => 'Bestelling',
        'total' => 'Totaal',
        'countdown' => 'Opgelet: je hebt nog <span id=\'countdown\'></span> om jouw bestelling af te ronden vooraleer de tickets terug worden vrijgegeven.',
        'copydetails' => 'Kopieer persoongegevens naar alle tickets voor de deelnemers',
        'holders_title'=> 'Tickets deelnemers',
        'ticketholder' => 'Deelnemer :number',
        'holdervalidation' => [
            'firstname'=>'De voornaam van deelnemer :number is verplicht',
            'lastname'=>'De naam van deelnemer :number is verplicht',
            'emailreq'=>'E-mailadres voor deelnemer :number is verplicht',
            'emailinvalid'=>'E-mailadres voor deelnemer :number ziet er niet correct uit',
        ],
        'payment_title' => 'Betalingsgegevens',
        'offline'=> 'Betaal achteraf',
        'instructions' => 'Instructies',
        'checkout'=> 'Afrekenen',
        'sessionexp' => 'De sessie is verlopen.'
    ],
    'viewOrder' => [
        'title' => 'Bedankt voor jouw bestelling!',
        'ticketline' =>  'De <a title="Download Tickets" class="ticket_download_link" href=":ticketlink"?download=1">tickets</a> en bevesting zijn via e-mail naar jou verzonden.',
        'amount'=> 'Bedrag',
        'reference'=> 'Referentie',
        'date'=> 'Datum',
        'payment' => [
            'title' => 'Betalingsinstructies',
            'info' => 'Deze bestelling is nog niet betaald, zie onderstaande instructies om dit in orde te brengen.',
            'bankName' =>'Naam rekeninghouder',
            'bankAccount' =>'Rekeningnummer',
            'bankBic' =>'BIC',
            'transferReference' =>'Gestructureerde mededeling'
        ],
        'items'=> [
            'title' => 'Details bestelling',
            'ticket' => 'Ticket',
            'quantity'=> 'Aantal',
            'price'=> 'Prijs',
            'bookingfee'=> 'Boekingskost',
            'total'=> 'Totaal',
            'subtotal' => 'Subtotaal',
            'refund'=> 'Bedrag terugbetaald'
        ],
        'attendees' => [
            'title' => 'Ingeschreven personen',
            'cancelled' => 'geannuleerd'
        ]

    ]
];