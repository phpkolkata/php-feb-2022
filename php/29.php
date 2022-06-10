<?php
// Topic: Session
// -: session must be start on very top of the line, weather setting data or getting data
// ex: session_start(); // this will be on top of the file

// -: session will destroy on following conditions
//     1. when the browser is closed
//     2. if you logout explicitly
//     3. 10 min of inactivity