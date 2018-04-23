<?php

/**
 * IF ELS
 * OPERATOR &&
 */

$nombor = 1234;
if (isset($nombor) && is_numeric($nombor)) {
    echo "$nombor sah";
} else {
    echo "$nombor tidak sah";
}
echo '<br/>';
/**
 * IF ELS
 * OPERATOR ||
 */

$nombor = 3;
if (isset($nombor) && $nombor >= 3):
    echo "$nombor sah";
else:
    echo "$nombor tidak sah";
endif;
