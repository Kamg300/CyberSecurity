<?php

function verifySession() {
    if ( session_status() !== PHP_SESSION_ACTIVE) { session_start(); }
}