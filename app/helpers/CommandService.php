<?php

/**
 * Toolkit used by the Command Controller.
 */
class CommandService {

    /**
     * Returns the current date in the format used by the database.
     *
     * @param integer $time  the current time, or null to obtain it automatically
     * @return string  the current date, e.g., 2005-02-04 20:39:14
     */
    public function getDate($time = null) {
        $time = $time ? $time : time();
        return date('Y-m-d H:i:s', $time);
    }

}
