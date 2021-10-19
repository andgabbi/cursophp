<?php

session_start();

function setMessageError ($msg) : void {
    $_SESSION['MsgError'] = $msg;
};

function getMessageError () : ?string {
    if (isset($_SESSION['MsgError'])){
        return $_SESSION['MsgError'];
    }
    return null;
};

function setMessageSuccess ($msg) : void {
    $_SESSION['MsgSuccess'] = $msg;
};

function getMessageSuccess () : ?string {
    if (isset($_SESSION['MsgSuccess'])){
        return $_SESSION['MsgSuccess'];
    }
    return null;
};

function removeErrorMessage () {
    if (isset($_SESSION['MsgError'])){
        unset($_SESSION['MsgError']);
    }
};

function removeSuccessMessage () {
    if (isset($_SESSION['MsgSuccess'])){
        unset($_SESSION['MsgSuccess']);
    }
};

