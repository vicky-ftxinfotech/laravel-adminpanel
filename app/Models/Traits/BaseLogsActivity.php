<?php

namespace App\Models\Traits;

use Spatie\Activitylog\Traits\LogsActivity;

trait BaseLogsActivity
{
    use LogsActivity;

    /**
     * Log Fillable Fields Only.
     *
     * @var bool
     */
    protected static $logFillable = true;

    /**
     * Log Only Dirty Fields.
     *
     * @var bool
     */
    protected static $logOnlyDirty = true;
}
