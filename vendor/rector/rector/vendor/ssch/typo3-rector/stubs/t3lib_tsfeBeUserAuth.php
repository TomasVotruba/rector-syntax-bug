<?php

namespace RectorPrefix20211110;

if (\class_exists('t3lib_tsfeBeUserAuth')) {
    return;
}
class t3lib_tsfeBeUserAuth
{
}
\class_alias('t3lib_tsfeBeUserAuth', 't3lib_tsfeBeUserAuth', \false);
