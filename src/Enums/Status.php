<?php

namespace Coderflex\LaravelTicket\Enums;

enum Status: int
{
    case OPEN = 1;
    case CLOSED = 2;
    case ARCHIVED = 3;
}
