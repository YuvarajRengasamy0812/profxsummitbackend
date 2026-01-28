<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'PROFX Summit' }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 100%;
            max-width: 600px;
            background-color: #fff;
            margin: 0 auto;
            padding: 30px;
            border-radius: 8px;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .header img {
            max-width: 150px;
        }
        .content {
            font-size: 16px;
            color: #333;
            line-height: 1.5;
            margin-bottom: 20px;
        }
        .ticket-container {
            width: 100%;
            margin: 0 auto;
            padding: 0;
            text-align: center;
        }
        .ticket-container img {
            display: block;
            width: 100%;
            margin: 0;
            padding: 0;
        }
        .ticket-barcode {
            margin: 0 auto;
            padding: 0;
            text-align: center;
        }
       .ticket-barcode img {
    max-width: 200px; /* QR size */
    height: auto;
    margin: 0 auto;
    display: block;
}
        .ticket-barcode .username {
            font-size: 18px;
            font-weight: bold;
            margin-top: 5px;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #e91e63;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 15px;
        }
        .footer {
            margin-top: 30px;
            font-size: 12px;
            color: #777;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">

        <!-- Main Header -->
        <div class="header">
            <img src="{{ $logo ?? 'https://profxsummit.com/assets/images/logo/profx-dark.png' }}" alt="PROFX Summit Logo">
        </div>

        <!-- Email Content -->
        <div class="content">
            {!! $details !!}
        </div>

        <!-- Visitor Ticket -->
        <div class="ticket-container">
            <!-- Ticket Header -->
            <img src="{{ $ticket_header ?? 'https://profxsummit.com/assets/images/ticket-header.png' }}" alt="Ticket Header">

            <!-- Barcode + Name -->
            <div class="ticket-barcode">
                @if($barcodeBase64)
                    <img src="{{ $barcodeBase64 }}" alt="Ticket Barcode">
                @endif
                <div class="username">{{ $user->full_name ?? '' }}</div>
            </div>

            <!-- Ticket Footer -->
            <img src="{{ $ticket_footer ?? 'https://profxsummit.com/assets/images/ticket-footer.png' }}" alt="Ticket Footer">

            <!-- Download Ticket Button -->
            @if($downloadTicketUrl)
                <a href="{{ $downloadTicketUrl }}" class="btn" target="_blank">Download Ticket</a>
            @endif
        </div>

        <!-- Email Footer -->
        <div class="footer">
            &copy; {{ date('Y') }} PROFX Summit. All rights reserved.
        </div>

    </div>
</body>
</html>
