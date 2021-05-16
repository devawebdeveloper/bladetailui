<?php

use Devaweb\BladeTailUI\Facades\Btui;

/**
 * Btui helper
 *
 * @param string $theme 
 * 
 * @return void
 */
function btui($theme, $hover = false) {
    return Btui::theme($theme, $hover);
}