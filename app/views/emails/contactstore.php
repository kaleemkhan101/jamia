<html>
    <head>
        <style type="text/css">
            /* add some css here */
            body {
                font: 12px/18px #333 Helvetica, Ubuntu, sans-serif;
            }
            td, th {
                text-align: left;
                padding: 5px;
            }
            table {
                margin: 20px;
            }
        </style>
    </head>
    <body>
        <p>Somebody filled in the contact form.</p>
        <table>
            <tr>
                <th>Name:</th>
                <td><?= $contact->name; ?></td>
            </tr>
            <tr>
                <th>Email:</th>
                <td><?= $contact->email; ?></td>
            </tr>
            <tr>
                <th>Message:</th>
                <td><?= $contact->message; ?></td>
            </tr>
        </table>
    </body>
</html>

