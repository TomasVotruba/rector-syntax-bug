<?php

namespace RectorPrefix20211110;

if (\class_exists('t3lib_mail_Rfc822AddressesParser')) {
    return;
}
class t3lib_mail_Rfc822AddressesParser
{
}
\class_alias('t3lib_mail_Rfc822AddressesParser', 't3lib_mail_Rfc822AddressesParser', \false);
