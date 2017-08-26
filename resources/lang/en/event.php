<?php
return [
    'tickets' => [
        'offline' => 'Offline Payment Methods Available',
        'register' => 'Register',
        'notickets'=> 'No tickets selected',
        'maxamount'=> 'The maximum number of tickets you can register is :amount' ,
        'minamount'=> 'You must select at least :amount tickets.'
    ],
    'header' => [
        'presents' => 'Presents',
        'tickets' => 'TICKETS',
        'details' => 'DETAILS',
        'location' => 'LOCATION'
    ],
    'share' => [
        'title' => 'Share Event'
    ],
    'organiser' => [
        'form' => [
            'name' => 'Your Name',
            'email' => 'Your E-mail Address',
            'message' => 'Your Message',
            'send' => 'Send Message'
        ]
    ],
    'createOrder' => [
        'title' => 'Order Details',
        'yourinfo' => 'Your Information',
        'summary' => 'Order Summary',
        'total' => 'Total',
        'countdown' => 'Please note you only have <span id=\'countdown\'></span> to complete this transaction before your tickets are re-released.',
        'copydetails' => 'Copy buyer details to all ticket holders.',
        'holders_title'=> 'Ticket Holder Information',
        'ticketholder' => 'Ticket Holder :number Details',
        'holdervalidation' => [
            'firstname'=>'Ticket holder :number\'s first name is required',
            'lastname'=>'Ticket holder :number\'s last name is required',
            'emailreq'=>'Ticket holder :number\'s email is required',
            'emailinvalid'=>'Ticket holder :number\'s email appears to be invalid',
        ],
        'payment_title' => 'Payment Information',
        'offline'=> 'Pay using offline method',
        'instructions' => 'Offline Payment Instructions',
        'checkout'=> 'Checkout',
        'sessionexp' => 'Your session has expired.'
    ],
    'viewOrder' => [
        'title' => 'Thank you for your order!',
        'ticketline' =>  'Your <a title="Download Tickets" class="ticket_download_link" href=":ticketlink"?download=1">tickets</a> and a confirmation email have been sent to you.',
        'amount'=> 'Amount',
        'reference'=> 'Reference',
        'date'=> 'Date',
        'payment' => [
            'title' => 'Payment Instructions',
            'info' => 'This order is awaiting payment. Please read the below instructions on how to make payment.',
            'bankName' =>'Name',
            'bankAccount' =>'Account',
            'bankBic' =>'BIC',
            'transferReference' =>'Reference'
        ],
        'items'=> [
            'title' => 'Order Items',
            'ticket' => 'Ticket',
            'quantity'=> 'Quantity',
            'price'=> 'Price',
            'bookingfee'=> 'Booking Fee',
            'total'=> 'Total',
            'subtotal' => 'Sub Total',
            'refund'=> 'Refunded Amount'
        ],
        'attendees' => [
            'title' => 'Order Attendees',
            'cancelled' => 'Cancelled'
        ]

    ]

];