Vantiv-Developer-Portal and Vantiv-Payment-Web-Services
=======================================================
*** IMPORTANT You will need to create a project at https://apideveloper.vantiv.com/ in order to get access to the sandbox and test your code

Integration Guidelines available here: https://apideveloper.vantiv.com/docs/payment-web-services/implementation-guidelines<br>
Online developers guide: https://apideveloper.vantiv.com/documentation<br>

<b>GETTING STARTED</b><br>
Run test.php to start the php script. It will send soap requests directly to 
PWS and if the sendToApigee flag is true, it will send JSON requests to Apigee.
The requests that are described here are Authorize, Capture, Purchase, and Cancel.
Too see the raw soap requests/response, you can set $debugFlag to true in test.php
and to see the raw JSON requests/response, you can set $debugFlag to true in 
TransmitJson.php.

The PHP implementation of Vantiv-Developer-Portal sample code demonstrating how to integrate with both Vantiv-Developer-Portal as well as Vantiv-Payment-Web-Services
- Contains a REST sample* for integrating to Vantiv-Developer-Portal 
- Contains a SOAP sample* for integrating to Payment-Web-Services

* Please note that if you are unsure of which solution which will match your solution needs you should contact a vantiv solution consultant first before starting any development efforts. Not doing so may lead to lost coding time. 
