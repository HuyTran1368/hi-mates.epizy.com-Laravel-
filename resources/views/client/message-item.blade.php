<x-message-item class="{{ $msg->user_id===auth()->id() ? 'm-dr' : 'm-dl' }}" data-placement="{{ $msg->user_id===auth()->id() ? 'right' : 'left' }}" :msg="json_encode($msg)" style="background-color: {{ $team->team_data->color }};" />