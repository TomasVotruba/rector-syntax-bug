<?php

namespace RectorPrefix20211110;

if (\class_exists('t3lib_tree_AbstractTree')) {
    return;
}
class t3lib_tree_AbstractTree
{
}
\class_alias('t3lib_tree_AbstractTree', 't3lib_tree_AbstractTree', \false);
