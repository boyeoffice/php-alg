<?php

// Usually when you buy something, you're asked whether your credit card number, phone number or answer to your most secret question is still correct. However, since someone could look over your shoulder, you don't want that shown on your screen. Instead, we mask it.

// Your task is to write a function maskify, which changes all but the last four characters into '#'.

function maskify($cc) {
  $mask = str_split( $cc );
  $maskLength = strlen( $cc ) - 5;
  for ( $i = 0; $i <= $maskLength; $i++ ) {
    $mask[$i] = '#';
  }

  return implode( '', $mask );
}

echo maskify($num = '09377589398759939');