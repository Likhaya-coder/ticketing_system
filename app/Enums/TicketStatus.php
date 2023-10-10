<?php
 
namespace App\Enums;
 
enum TicketStatus: string
{
    case Open = 'open';
    case Assigned = 'assigned';
    case inProgress = 'inProgress';
    case onHold = 'onHold';
    case pending = 'pending';
    case Resolved = 'resolved';
    case Closed = 'closed';
}