<?php

use Devaweb\BladeTailUI\Facades\Btui;

/**
 * Btui helper
 *
 * @param string $theme 
 * 
 * @return void
 */
function btui($theme) {
    return Btui::theme($theme);
}