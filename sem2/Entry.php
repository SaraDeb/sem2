<?php
define('CHAT_MSG_KEY', 'msg');
define('CHAT_USER_KEY', 'nickName');
define('CHAT_TIMESTAMP_KEY', 'timestamp');
define('CHAT_ENTRY_DELIMITER', ";\n");

/**
 * Holds one entry in the conversation.
 */
class Entry {

    private $U_name;
    private $msg;
    private $timestamp;
    private $deleted;

    public function __construct($U_name, $msg) {
        $this->U_name = $U_name;
        $this->msg = $msg;
        $this->timestamp = time();
        $this->deleted = false;
    }

    /**
     * @return string The author's nick name.
     */
    public function getUname() {
        return $this->U_name;
    }

    /**
     * @return string The message.
     */
    public function getMsg() {
        return $this->msg;
    }

    /**
     * @return int The time (on the server) when this entry was created.
     */
    public function getTimestamp() {
        return $this->timestamp;
    }

    /**
     * @return boolean True if the entry has been deleted.
     */
    public function isDeleted() {
        return $this->deleted;
    }

    /**
     * @param boolean $deleted Set to true if the entry shall be deleted.
     */
    public function setDeleted($deleted) {
        $this->deleted = $deleted;
    }

}
