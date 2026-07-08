<?php

namespace Coderflex\LaravelTicket\Enums;

enum Priority: int
{
    case LOW = 1;
    case NORMAL = 2;
    case HIGH = 3;
}
