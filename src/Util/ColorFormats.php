<?php

namespace App\Util;

class ColorFormats {
    const BOLD = "\033[1m%s\033[0m";
    const DARK = "\033[2m%s\033[0m";
    const ITALIC = "\033[3m%s\033[0m";
    const UNDERLINE = "\033[4m%s\033[0m";
    const BLINK = "\033[5m%s\033[0m";
    const REVERSE = "\033[7m%s\033[0m";
    const CONCEALED = "\033[8m%s\033[0m";

    const BLACK = "\033[30m%s\033[0m";
    const RED = "\033[31m%s\033[0m";
    const GREEN = "\033[32m%s\033[0m";
    const YELLOW = "\033[33m%s\033[0m";
    const BLUE = "\033[34m%s\033[0m";
    const MAGENTA = "\033[35m%s\033[0m";
    const CYAN = "\033[36m%s\033[0m";
    const WHITE = "\033[37m%s\033[0m";

    const BG_BLACK = "\033[40m%s\033[0m";
    const BG_RED = "\033[41m%s\033[0m";
    const BG_GREEN = "\033[42m%s\033[0m";
    const BG_YELLOW = "\033[43m%s\033[0m";
    const BG_BLUE = "\033[44m%s\033[0m";
    const BG_MAGENTA = "\033[45m%s\033[0m";
    const BG_CYAN = "\033[46m%s\033[0m";
    const BG_WHITE = "\033[47m%s\033[0m";
}